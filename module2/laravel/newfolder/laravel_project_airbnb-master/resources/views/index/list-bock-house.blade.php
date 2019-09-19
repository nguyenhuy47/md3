<head id="Head1">
    <link href="https://tinbatdongsan.com/Images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="audience" content="general"/>
    <meta name="resource-type" content="document"/>
    <meta name="abstract" content="Thông tin nhà đất Việt Nam"/>
    <meta name="classification" content="Bất động sản Việt Nam"/>
    <meta name="area" content="Nhà đất và bất động sản"/>
    <meta name="placename" content="Việt Nam"/>
    <meta name="author" content="#"/>
    <meta name="copyright" content="#"/>
    <meta name="owner" content="#"/>
    <meta name="generator" content="#"/>
    <meta name="distribution" content="Global"/>
    <meta name="keywords" content="Nhà, đất, cho, thuê, cho, thuê, nhà, tại, Việt"/>
    <meta name="description"
          content="Nhà đất cho thuê cho thuê nhà tại Việt Nam với các loại diện tích giá cho thuê địa điểm khác nhau Nhà đất cho thuê cho thuê nhà tại Việt Nam thuê và cho thuê nhà đất đầy đủ cập nhật nhất"/>
    <meta name="revisit-after" content="1 days"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="#"/>
    <link rel="canonical" href="#"/>
    <title>Nhà đất cho thuê, cho thuê nhà Việt Nam | tại Việt Nam</title>
    <link rel="stylesheet" type="text/css" media="all" href="https://tinbatdongsan.com/Styles/reset.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/font-awesome.min.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/font-ops.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all" href="https://tinbatdongsan.com/Styles/basis.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Scripts/Fancybox/source/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/general.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all" href="https://tinbatdongsan.com/Styles/style.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all" href="https://tinbatdongsan.com/Styles/post.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/firefox.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/font-rbt.min.css?v=2018060171"/>
    <link href="https://tinbatdongsan.com/Styles/Scrollbar/scrollbar.css" rel="stylesheet"/>
    <link href="https://tinbatdongsan.com/Styles/Responsive.css?v=2018060171" rel="stylesheet" type="text/css"/>
    <link href="https://tinbatdongsan.comMaster/css/ie8.css" rel="stylesheet" type="text/css"/>
    <link href="https://tinbatdongsan.com/Scripts/jquery.selectbox-0.2/css/jquery.selectbox.css" rel="stylesheet"/>
    <link href="https://tinbatdongsan.com/Styles/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
    <script type="text/javascript" href="https://tinbatdongsan.com/Scripts/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" href="https://tinbatdongsan.com/Scripts/jquery-ui-1.8.24.min.js"></script>
    <script type="text/javascript" href="https://tinbatdongsan.com/Scripts/Fancybox/source/jquery.fancybox.js"></script>
    <script type="text/javascript" href="https://tinbatdongsan.com/Scripts/Register.js"></script>
    <script href="https://tinbatdongsan.com/Styles/Scrollbar/scrollbar.min.js"></script>
    <script type="text/javascript" src="https://tinbatdongsan.com/Scripts/Common.js?v=123"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<body>
@include('index.layout.header')

<div id="wrapper">
    <div class="main">
        <div class="row clearfix">
            <div class="bg-blue-20 pd-top-20 pd-bottom-20 filter-productlist">
                <div class="main">
                    <div class="row clearfix">
                        <div class="col-gr-75per">
                            <div class="pull-left title-search-product" style="">
                                <h1 class="fsize-22 fweight-700 text-uppercase blue-clr no-mg"
                                    style="white-space: nowrap; text-overflow: ellipsis; width: 560px; overflow: hidden;">
                                    Nhà đất cho thuê tại Việt Nam
                                </h1>
                                <div class="none">
                                </div>
                                <p class="no-mg">Có <span class='blue-clr'>{{ count($houses) }}</span> bất động sản.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h5 style="text-transform: uppercase; color: #00a855"> Danh sách phòng hiện có </h5>
        <div class="col-gr-75per row" style="margin-top: 55px ">
            <ul class="group-prd group-3cl clearfix">
                @if(count($houses) == "0")
                    Hiện không có nhà nào giống với yêu cầu của bạn
                @else
                    @foreach($houses as $house)
                        <li>
                            <div class="news_post_image">
                                <a id="MainContent_ProductSearchResult_rpProductList_hplAvatar_3"
                                   title="Cho thuê nhà riêng tại Đường Nguyễn Lương Bằng, Đống Đa, Hà Nội diện tích 75m2 giá 27 Tr..."
                                   href="{{ route('seeDetails', $house->id) }}">
                                    <img src="{{ asset('storage/images/' . $house->image) }}" alt=""
                                         style="width: 255px">
                                </a>
                            </div>
                            <div class="content">
                                <p class="fsize-13 dblue-clr text-ellipsis mg-bottom-6">
                                    <i class="fa fa-map-marker hint fsize-14 mg-right-5"></i>
                                    {{ $house->address->address }}
                                </p>
                                <div class="info clearfix">
                                    <div class="pull-left w--100 mg-bottom-5"
                                         style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr">
                                    {{ number_format($house->price) }} VND
                                </span>
                                    </div>
                                    <div class="pull-left w--100">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr">
                                            @if($house->status == 0 )
                                                Chưa cho thuê
                                            @else
                                                Đã cho thuê
                                            @endif
                                        </span>
                                    </div>

                                    <a id="hplView" title="Cần cho thuê căn hộ chung cư Sunrise City khu North, Quận 7"
                                       class="none"
                                       href="{{ route('seeDetails', $house->id) }}">Xem
                                        thêm</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
            <div class="paging pull-right">
                {!! $houses->appends(request()->query()) !!}
            </div>
        </div>

        <div class="col-gr-25per">
            <div class="group-advance-search style-col-search mg-bottom-30">
                <ul class="tabs-search home-search clearfix">
                    <li id="ban"><a onclick="ChangeType(38);">Tìm kiếm</a></li>
                </ul>
                <form action="{{ route('search') }}">
                    {{ csrf_field() }}
                    <div class="search-content listProductSearch">
                        <ul class="filter clearfix" style="height: 300px;">
                            <li>
                                <div class="custom-select">
                                    <select id="cboCate" name="price" onchange="ChangeValue('Cate', $(this).val());"
                                            class="form-control">
                                        <option value="0-1000000000000"
                                                @if(isset($_GET['price']) && $_GET['price'] == '0-1000000000000')
                                                selected
                                                @endif
                                        >Mức giá
                                        </option>
                                        <option value="0-2000000"
                                                @if(isset($_GET['price']) && $_GET['price'] == '0-2000000')
                                                selected
                                                @endif
                                        >Dưới 2 triệu
                                        </option>
                                        <option value="2000000-4000000"
                                                @if(isset($_GET['price']) && $_GET['price'] == '2000000-4000000')
                                                selected
                                                @endif>
                                            Từ 2 - 4 triệu
                                        </option>
                                        <option value="4000000-7000000"
                                                @if(isset($_GET['price']) && $_GET['price'] == '4000000-7000000')
                                                selected
                                                @endif>
                                            Từ 4 - 7 triệu
                                        </option>

                                        <option value="7000000-13000000"
                                                @if(isset($_GET['price']) && $_GET['price'] == '7000000-13000000')
                                                selected
                                                @endif>
                                            Từ 7 - 13 triệu
                                        </option>
                                        <option value="13000000-1000000000000"
                                                @if(isset($_GET['price']) && $_GET['price'] == '13000000-1000000000000')
                                                selected
                                                @endif
                                        >
                                            Trên 13 triệu
                                        </option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <select class="form-control" name="address" id="cboCity">
                                        <option value="">Thành Phố</option>
                                        @foreach($address as $addres)
                                            <option value="{{ $addres->id }}"
                                                    @if(isset($_GET['address']) && $addres->id == $_GET['address'])
                                                    selected
                                                    @endif
                                            >
                                                {{ $addres->address }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <select id="cboArea" class="form-control" name="number_room"
                                            onchange="ChangeValue('Area', $(this).val());">
                                        <option value="">Phòng ngủ</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option
                                                    value="{{ $i }}"
                                                    @if(isset($_GET['number_room']) && $_GET['number_room'] == $i)
                                                    selected
                                                    @endif
                                            >
                                                {{ $i }}
                                            </option>
                                        @endfor

                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <select id="cboDistrict" name="number_bathroom" class="form-control"
                                            onchange="ChangeQuanhuyen($(this).val())">
                                        <option value="">Phòng tắm</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}"
                                                    @if(isset($_GET['number_bathroom']) && $_GET['number_bathroom'] == $i)
                                                    selected
                                                    @endif
                                            >
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <select id="cboPrice" name="month" class="form-control"
                                            onchange="ChangeValue('Price', $(this).val());">
                                        <option value="0-11111111111111111"
                                                @if(isset($_GET['month']) && $_GET['month'] == '0-1000000000000')
                                                selected
                                                @endif
                                        >
                                            Thời gian
                                        </option>
                                        <option value="0-2"
                                                @if(isset($_GET['month']) && $_GET['month'] == '0-2')
                                                selected
                                                @endif
                                        >
                                            Dưới 2 tháng
                                        </option>
                                        <option value="2-4"
                                                @if(isset($_GET['month']) && $_GET['month'] == '2-4')
                                                selected
                                                @endif
                                        >
                                            Từ 2 - 4 tháng
                                        </option>
                                        <option value="4-7"
                                                @if(isset($_GET['month']) && $_GET['month'] == '4-7')
                                                selected
                                                @endif
                                        >
                                            Từ 4 - 7 tháng
                                        </option>
                                        <option value="7000000-13000000"
                                                @if(isset($_GET['month']) && $_GET['month'] == '7-13')
                                                selected
                                                @endif
                                        >
                                            Từ 7 - 12 tháng
                                        </option>
                                        <option value="13-1000000000000"
                                                @if(isset($_GET['month']) && $_GET['month'] == '13-1000000000000')
                                                selected
                                                @endif
                                        >
                                            Trên 1 năm
                                        </option>
                                    </select>
                                </div>
                            </li>

                            <li>
                                <input type="submit" id="btnSearch" class="btn bg-green full-width fweight-bold"
                                       href="javascript:__doPostBack(&#39;ctl00$MainContent$BoxSearch$btnSearch&#39;,&#39;&#39;)"
                                       value="Tìm kiếm">
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('index.layout.footer')
</body>
</html>
