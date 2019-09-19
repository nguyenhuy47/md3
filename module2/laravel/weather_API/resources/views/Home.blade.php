<!DOCTYPE html>
<html>
<head>
    <title>Regular Weather Report Flat Responsive Widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Regular Weather Report template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <link href="js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--web font-->
    <link href='//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- //web font -->
    <!-- js -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="js/autoSuggest.js"></script>


    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 6,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [414, 4]

            });

        });
    </script>
    <!-- //js -->
</head>
<body onload="startTime()">
<!-- main -->
<div class="main">
    <h1>DỰ BÁO THỜI TIÊT</h1>
    <div>
        <form method="get" action="{{ route('index') }}">
            @csrf
            <div>
                <input type="text" id="search" class="search" name="cityName" placeholder="Nhập tỉnh thành">
                <button style="display: none;" type="submit">Xem</button>
            </div>
        </form>
    </div>
    <div class="main-wthree-row">
        <div class="agileits-top" style="background: url(../images/{{$imageName}}.jpg) no-repeat 0px 0px;">
            <div class="agileinfo-top-row">
                <div class="agileinfo-top-img">
                    <span> </span><br>
                </div>
                <h1>{{ "$cityName" }}</h1><br>
            </div>
            <div class="agileinfo-top-row">
                <h5>{{ $data->weather[0]->main }}</h5>
            </div>

        </div>
        <div class="w3ls-bottom">
            <h2>Thời tiết </h2>
            <div class="agileinfo-top-time">
                <div id="txt"></div>
                <div class="date">
                    <!-- Date-JavaScript -->
                    <script type="text/javascript">
                        var mydate = new Date()
                        var year = mydate.getYear()
                        if (year < 1000)
                            year += 1900
                        var day = mydate.getDay()
                        var month = mydate.getMonth()
                        var daym = mydate.getDate()
                        if (daym < 10)
                            daym = "0" + daym
                        var dayarray = new Array("Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7")
                        var montharray = new Array("Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12")
                        document.write("" + dayarray[day] + ", " + " " + daym + "," + montharray[month] + ", " + year + "")
                    </script>
                    <!-- //Date-JavaScript -->
                </div>
                <div class="agileinfo-top-row">
                <table>
                    <tr>
                        <td><h4>Nhiệt độ</h4></td>
                        <td><h4>{{ round($data->main->temp - 273.15) }}<sup class="degree">°</sup><span>C</span></h4>
                        </td>
                    </tr>
                    <tr>
                        <td><h4>Độ ẩm</h4></td>
                        <td><p>{{ $data->main->humidity }} <span>%</span></p></td>
                    </tr>
                    <tr>
                        <td><h4>Gió</h4></td>
                        <td><p>{{$data->wind->speed * 3.6}} <span>km/h</span></p></td>
                    </tr>
                </table>
                </div>
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="biseller-column">
                            <p>10AM</p>
                            <a class="lightbox" href="#">
                                <img src="images/1.png" alt=""/>
                            </a>
                            <p>20<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>11AM</p>
                            <a class="lightbox" href="#">
                                <img src="images/1.png" alt=""/>
                            </a>
                            <p>22<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>12PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/2.png" alt=""/>
                            </a>
                            <p>22<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>1PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/3.png" alt=""/>
                            </a>
                            <p>24<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>2PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/4.png" alt=""/>
                            </a>
                            <p>23<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p> 3PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/4.png" alt=""/>
                            </a>
                            <p>22<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>4PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/2.png" alt=""/>
                            </a>
                            <p>20<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>5PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/2.png" alt=""/>
                            </a>
                            <p>20<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>6PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/1.png" alt=""/>
                            </a>
                            <p>20<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>7PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/1.png" alt=""/>
                            </a>
                            <p>20<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>8PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/1.png" alt=""/>
                            </a>
                            <p>20<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>9PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/1.png" alt=""/>
                            </a>
                            <p>20<sup class="degree">°</sup></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="biseller-column">
                            <p>10PM</p>
                            <a class="lightbox" href="#">
                                <img src="images/1.png" alt=""/>
                            </a>
                            <p>20<sup class="degree">°</sup></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w3ls-bottom2">
                <div class="ac-container">
                    <input id="ac-1" name="accordion-1" type="checkbox"/>
                    <label for="ac-1" class="grid1"> Week</label>
                    <article class="ac-small">
                        <div class="wthree-grids">
                            <div class="wthree-grids-row">
                                <ul class="top">
                                    <li>Thứ 2</li>
                                    <li class="wthree-img"><img src="images/2.png" alt=""/></li>
                                    <li class="wthree-temp"> 25 <sup class="degree">°</sup></li>
                                    <li class="wthree-temp"> 20 <sup class="degree">°</sup></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="wthree-grids-row">
                                <ul>
                                    <li>Thứ 3</li>
                                    <li class="wthree-img"><img src="images/4.png" alt=""/></li>
                                    <li class="wthree-temp"> 27 <sup class="degree">°</sup></li>
                                    <li class="wthree-temp"> 18 <sup class="degree">°</sup></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="wthree-grids-row">
                                <ul>
                                    <li>Thứ 4</li>
                                    <li class="wthree-img"><img src="images/3.png" alt=""/></li>
                                    <li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
                                    <li class="wthree-temp"> 20 <sup class="degree">°</sup></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="wthree-grids-row">
                                <ul>
                                    <li>Thứ 5</li>
                                    <li class="wthree-img"><img src="images/3.png" alt=""/></li>
                                    <li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
                                    <li class="wthree-temp"> 18 <sup class="degree">°</sup></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="wthree-grids-row">
                                <ul>
                                    <li>Thứ 6</li>
                                    <li class="wthree-img"><img src="images/4.png" alt=""/></li>
                                    <li class="wthree-temp"> 31 <sup class="degree">°</sup></li>
                                    <li class="wthree-temp"> 19 <sup class="degree">°</sup></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="wthree-grids-row">
                                <ul>
                                    <li>Thứ 7</li>
                                    <li class="wthree-img"><img src="images/2.png" alt=""/></li>
                                    <li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
                                    <li class="wthree-temp"> 16 <sup class="degree">°</sup></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }
            ; // add zero in front of numbers < 10
            return i;
        }
    </script>
    <!-- //Time-JavaScript -->
</body>
</html>
