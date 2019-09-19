var domainCookie = "tinbatdongsan.com";
var userId = $('#hdUserId').val();
if (userId == 0)
    userId = '';
$(document).ready(function () {
    GetProductlist();//load product saved    
    checkStatus();
    $.cookie('numberSave', { domain: domainCookie, path: '/', expires: 7 });
});

function checkStatus() {
    if (productId == 0) return false;
    if (userId == '') {
        var listProductId = $.cookie('savedProductIds');
        if (listProductId != undefined && listProductId != "" && listProductId != " ") {
            if (listProductId.search(productId) > -1)
                changeHtml(1);
        }
        else
            changeHtml(2);
    }
    else {
        $.ajax({
            type: "POST",
            cache: false,
            url: "/Handler/ProductHandler.ashx?module=getProduct",
            data: { "productId": productId },
            success: function (data) {
                if (data > 0)
                    changeHtml(1);
                else
                    changeHtml(2);
            }
        });
    }
}


function changeHtml(typeId) {
    if (typeId == 1) {
        $('#savedNews').attr("onclick", "buttonDelete(this,'" + productId + "')");
        $('#savedNews').html('<i class="fa fa-check"></i><span class="tooltips">Bỏ lưu tin</span>');
    }
    else {
        $('#savedNews').attr("onclick", "productSaved(this,'" + productId + "')");
        $('#savedNews').html('<i class="fa fa-download"></i><span class="tooltips">Lưu tin</span></a>');
    }
}

function GetProductlist() {
    var listProductId = $.cookie('savedProductIds');
    var html = '';
    if (listProductId != null && userId == '') {
        var likeReturn = '';
        $("#boxProductSaved table tbody").html(html);
        if ($("body").data('GetProductlist_' + listProductId) != null) {
            likeReturn = $("body").data('GetProductlist_' + listProductId);
            var i = 0;
            $.each(likeReturn, function (index, value) {
                i = i + 1
                var image = value.Images;
                if (image == null)
                    image = '/Images/no-photo.png';
                else
                    image = "https://img.tinbatdongsan.com/crop/100x75/" + image;
                html += '<tr><td>' + i + '</td><td>' + value.ProductId + '<br>Hiển thị</td><td><div class="images-prdtable"><a href="' + value.SourceNews + '"><img src="' + image + '" alt=""></a></div><div class="content-prdtable"><h4 class="title"><a href="' + value.SourceNews + '">' + value.Title + '</a></h4></div></td><td><a onclick="deleteProduct(this,' + value.ProductId + ');" class="dark-clr"><i class="fa fa-trash SavedDelete"></i>&nbsp;&nbsp;Xóa</a></td></tr>';
            });

            if (html != '') {
                $("#boxProductSaved table tbody").html(html);
            }
            else {
                $.removeCookie('savedProductIds', { path: '/' });
            }
        }
        else {
            $.ajax({
                type: "POST",
                cache: false,
                url: "/Handler/ProductHandler.ashx?module=getProductList",
                data: { "productIds": listProductId },
                success: function (data) {
                    if (data != null) {
                        likeReturn = eval('(' + data + ')');
                        $("body").data('GetProductlist_' + listProductId, likeReturn);
                        var i = 0;
                        $.each(likeReturn, function (index, value) {
                            i = i + 1;
                            var image = value.Images;
                            if (image == null)
                                image = '/Images/no-photo.png';
                            else
                                image = "https://img.tinbatdongsan.com/crop/100x75/" + image;
                            html += '<tr><td>' + i + '</td><td>' + value.ProductId + '<br>Hiển thị</td><td><div class="images-prdtable"><a href="' + value.SourceNews + '"><img src="' + image + '" alt=""></a></div><div class="content-prdtable"><h4 class="title"><a href="' + value.SourceNews + '">' + value.Title + '</a></h4></div></td><td><a onclick="deleteProduct(this,' + value.ProductId + ');" class="dark-clr"><i class="fa fa-trash SavedDelete"></i>&nbsp;&nbsp;Xóa</a></td></tr>';
                        });
                        if (html != '') {
                            $("#boxProductSaved table tbody").html(html);
                        }
                        else {
                            $.removeCookie('savedProductIds', { path: '/' });
                        }
                    }
                }
            });
        }
    }
    else if (userId != '') //Get top 5 productSaved and saved cookie
    {
        listProductId = '';
        $.ajax({
            type: "POST",
            cache: false,
            url: "/Handler/ProductHandler.ashx?module=getProductList",
            data: { "productIds": listProductId },
            success: function (data) {
                if (data != null) {
                    likeReturn = eval('(' + data + ')');
                    //$("body").data('GetProductlist_' + listProductId, likeReturn);
                    var i = 0;
                    $.each(likeReturn, function (index, value) {
                        i = i + 1;
                        var image = value.Images;
                        if (image == null)
                            image = '/Images/no-photo.png';
                        else
                            image = "https://img.tinbatdongsan.com/crop/100x75/" + image;
                        html += '<tr><td>' + i + '</td><td>' + value.ProductId + '<br>Hiển thị</td><td><div class="images-prdtable"><a href="' + value.SourceNews + '"><img src="' + image + '" alt=""></a></div><div class="content-prdtable"><h4 class="title"><a href="' + value.SourceNews + '">' + value.Title + '</a></h4></div></td><td><a onclick="deleteProduct(this,' + value.ProductId + ');" class="dark-clr"><i class="fa fa-trash SavedDelete"></i>&nbsp;&nbsp;Xóa</a></td></tr>';
                        listProductId += value.ProductId + ',';
                    });
                    if (listProductId != '') {
                        $("#boxProductSaved table tbody").html(html);
                        $.cookie('savedProductIds', listProductId, { path: '/', expires: 7 });
                    }
                    else {
                        $.removeCookie('savedProductIds', { path: '/' });
                    }
                }
            }
        });
    }
    var numberSave = 0;
    var listProductId1 = $.cookie('savedProductIds');
    if (listProductId1 != null && listProductId1 != " " && listProductId1 != "") {
        if (listProductId1.search(',') > -1) {
            var arrCookie = listProductId1.split(',');
            for (var ii = 0; ii < arrCookie.length ; ii++)
            {
                if (arrCookie[ii] != "")
                    numberSave++;
            }
            $('#numberSave').text(numberSave);
        }
        else{
            $('#numberSave').text("1");
        }
    }
    else {
        $('#numberSave').text(numberSave);
    }
}

function productSaved(index, productId) {
    var numberSaved = $('#numberSave').text();
    if (userId == '' && numberSaved >= 5)
    {
        alert("Bạn đã lưu 5 tin. Hãy đăng nhập để lưu được nhiều tin hơn.");
        return false;
    }
    else
    {
        var listProductId = $.cookie('savedProductIds');
        if (listProductId != undefined && listProductId != " ") {
            if (listProductId.search(productId) == -1)
                $.cookie('savedProductIds', productId + ',' + listProductId, { path: '/', expires: 7 });
        }
        else {
            $.cookie('savedProductIds', productId, { path: '/', expires: 7 });
        }
        if (userId == '') {
            GetProductlist();//load product saved
        }
        else {
            $.ajax({
                type: "POST",
                cache: false,
                url: "/Handler/ProductHandler.ashx?module=productInsert",
                data: { "productId": productId },
                success: function (data) {
                    //alert(data);
                    GetProductlist();
                }
            });
        }
        //window.location.reload();
        GetProductlist();
        $(index).attr("onclick", "buttonDelete(this,'" + productId + "')");
        $(index).html('<i class="fa fa-check"></i><span class="tooltips">Bỏ lưu tin</span>');
    }
}
function buttonDelete(index, productId) {
    var listProductId = $.cookie('savedProductIds');
    listProductId = listProductId.replace(productId, ' ').replace(', ,', ',').replace(', ', '').replace(' ,', '');
    deleteProductSaved(productId);//xoa trong database
    if (listProductId != '' && listProductId != ',')
        $.cookie('savedProductIds', listProductId, { path: '/', expires: 7 });
    else
        $.removeCookie('savedProductIds', { path: '/' });
    if (listProductId != null && listProductId != " ") {
        if (listProductId.search(',') > -1 && listProductId != '') {
            var arrCookie = listProductId.split(',');
            $('#numberSave').text(arrCookie.length);
        }
        else if (listProductId.search(',') == -1 && listProductId != '') {
            $('#numberSave').text("1");
        }
    }
    else {
        $.cookie('savedProductIds', listProductId, { path: '/', expires: 7 });
        $('#numberSave').text("0");
    }
    checkStatus();
    $(index).attr("onclick", "productSaved(this,'" + productId + "')");
    $(index).html('<i class="fa fa-download"></i><span class="tooltips">Lưu tin</span>');
}

function deleteProduct(index, productId) {
    if (confirm('Bạn có chắc chắn muốn xóa ?')) {
        $(index).parent().parent().remove();
        //delete cookey
        var listProductId = $.cookie('savedProductIds');
        listProductId = listProductId.replace(productId, ' ').replace(', ,', ',').replace(', ', '').replace(' ,', '');
        deleteProductSaved(productId);//xoa trong database
        if (listProductId != '' && listProductId != ',')
            $.cookie('savedProductIds', listProductId, { path: '/', expires: 7 });
        else
            $.removeCookie('savedProductIds', { path: '/' });
        if ($("#boxProductSaved table tbody tr").length == 0) {
            $("#boxProductSaved").hide();
            $('body').removeClass("no-scroll");
        }
        var numberSave = 0;
        if (listProductId != null && listProductId != " ") {
            if (listProductId.search(',') > -1 && listProductId != '') {
                var arrCookie = listProductId.split(',');
                for (var ii = 0; ii < arrCookie.length ; ii++) {
                    if (arrCookie[ii] != "")
                        numberSave++;
                }
                $('#numberSave').text(numberSave);
            }
            else if (listProductId.search(',') == -1 && listProductId != '') {
                $('#numberSave').text("1");
            }
        }
        else {
            $('#numberSave').text("0");
        }
        checkStatus();
    }
}

function deleteAllNews() {
    if (confirm('Bạn có chắc chắn muốn xóa tất cả ?')) {
        var listProductId = $.cookie('savedProductIds');
        deleteListProductSaved(listProductId);
        $.removeCookie('savedProductIds', { path: '/' });
        $("#boxProductSaved").hide();
    }
}
function deleteProductSaved(productId) {
    if (userId != '') {
        $.ajax({
            type: "POST",
            cache: false,
            url: "/Handler/ProductHandler.ashx?module=deleteProductId",
            data: { "productId": productId },
            success: function () {

            }
        });
    }
}

function deleteListProductSaved(productIds) {
    if (userId != '') {
        $.ajax({
            type: "POST",
            cache: false,
            url: "/Handler/ProductHandler.ashx?module=deleteListProductId",
            data: { "productIds": productIds },
            success: function () {

            }
        });
    }
}

function checkStatusListId() {

    if (userId == '') {
        var listProductId = $.cookie('savedProductIds');
        if (listProductId != null) {
            {
                $('.productlist .item .save').each(function () {
                    var productId = $(this).attr('id');
                    if (listProductId.search(productId) > -1)
                        $('#' + productId).html('<a class="save-news"><i class="fa fa-download"></i><span class="tooltips">Lưu tin</span></a>');
                });

            }
        }
    }
    else {
        var listId = '';
        $('.productlist .item .save').each(function () {
            listId += $(this).attr('id') + ',';
        });
        if (listId != '') {
            $.ajax({
                type: "POST",
                cache: false,
                url: "/Handler/ProductHandler.ashx?module=getListProductId",
                data: { "productIds": listId },
                success: function (data) {
                    listId = '';
                    if (data != null) {
                        likeReturn = eval('(' + data + ')');
                        $.each(likeReturn, function (index, value) {
                            listId += value.ProductId + ',';
                        });
                        $('.productlist .item .save').each(function () {
                            var productId = $(this).attr('id');
                            if (listId.search(productId) > -1)
                                $('#' + productId).html('<a class="save-news"><i class="fa fa-download"></i><span class="tooltips">Lưu tin</span></a>');
                        });
                    }
                }
            });
        }
    }
}