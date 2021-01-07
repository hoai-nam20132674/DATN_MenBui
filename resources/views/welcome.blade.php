
<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">
<head>
    <meta charset="utf-8" />
    <title>CTT ĐÀO TẠO - ĐHBKHN</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
    
    <script src="https://ctt-daotao.hust.edu.vn/bundles/modernizr?v=jmdBhqkI3eMaPZJduAyIYBj7MpXrGd2ZqmHAOSNeYcg1"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://ctt-daotao.hust.edu.vn/Content/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://ctt-daotao.hust.edu.vn/Content/themes_base_jquery-ui.css" rel="stylesheet" />
    <script src="https://ctt-daotao.hust.edu.vn/Scripts/jquery-1.12.4.js"></script>
    <script src="https://ctt-daotao.hust.edu.vn/Scripts/jquery-ui.js"></script>
    <link href="https://ctt-daotao.hust.edu.vn/Content/Site.css" rel="stylesheet" />
    <link href="https://ctt-daotao.hust.edu.vn/Content/style.css" rel="stylesheet" />
    
 


</head>

<body style="margin: 0 0 100px;">
    <header style="background-image: url(../Images/new-header.svg)">
        <div class="container" style="padding-bottom: 10px">
            <div class="row">
                <div class="col-md-6">
                    <a href="https://ctt-daotao.hust.edu.vn/">
                        <img class="img-responsive" src="https://ctt-daotao.hust.edu.vn/Images/logo.png" alt="CTTBK2016" style="padding-top:10px" />
                    </a>
                    <dir class="university">
                    <p class="u-name">TRƯỜNG ĐẠI HỌC BÁCH KHOA HÀ NỘI</p>
                    <p class="site-name">CỔNG THÔNG TIN SINH VIÊN</p>
                </dir>
                </div>
                <div class="col-md-3">
                    <div id="nav-search" role="search" style="top:30px;">
                        <form action="/DisplayWeb/SearchBaiViet" method="post" id="search-form" accept-charset="UTF-8">
                            <input title="Search string" class="input-medium" placeholder="Tìm kiếm..." type="text" id="search-field" name="strSearch" size="15" maxlength="128">
                            <button id="search-btn" type="submit" name="submit" aria-label="Search" formmethod="post">
                                <img src="https://ctt-daotao.hust.edu.vn/Images/search.jpg"></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3" style="top:30px;">
                    @if(Auth::user())
                    <a href="{{URL::route('logout')}}">
                        <p class="header-loginSubmit-button">Đăng xuất</p>
                    </a>
                    @else
                    <a href="{{URL::route('login')}}">
                        <p class="header-loginSubmit-button">Đăng nhập</p>
                    </a>
                    @endif
                    
                </div>
            </div>
        </div>
        
    </header>
    <div class="container-fluid">
        <div class="navbar navbar-default">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="https://ctt-daotao.hust.edu.vn/">Trang chủ</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=3">Đ&#224;o tạo Đại học <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=18">Quy định - Quy chế</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=19">C&#225;c ng&#224;nh đ&#224;o tạo</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=20">Kế hoạch học tập</a></li>
                                                <li><a href="http://ctt-qlp.hust.edu.vn">Quản l&#253; ph&#242;ng học</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=46">Tin tức - Th&#244;ng b&#225;o</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=55">Tuyển sinh</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=30">Th&#244;ng tin văn bằng 2</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=31">Biểu mẫu - Hướng dẫn</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=32">Li&#234;n hệ</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=4">Đ&#224;o tạo Sau đại học <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=47">Tuyển sinh</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=48">Đ&#224;o tạo</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=41">Mẫu văn bản giấy tờ</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=42">Văn bản - Quy chế</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=43">Th&#244;ng tin văn bằng</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=44">Trang th&#244;ng tin c&#225; nh&#226;n</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=45">Li&#234;n hệ</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=5">C&#244;ng t&#225;c Sinh vi&#234;n <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=7">Th&#244;ng b&#225;o</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=9">Hỏi - Đ&#225;p</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=53">Học ph&#237;</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=11">Học bổng t&#224;i trợ</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=12">Việc l&#224;m</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=13">Biểu mẫu v&#224; quy định</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=54">Cựu sinh vi&#234;n</a></li>
                                                <li><a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=15">Li&#234;n hệ</a></li>
                                </ul>
                            </li>
                        <li><a href="{{URL::route('booking',1)}}">Đăng ký phòng lab</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

<input id="tabvalue" hidden />
<div class="container" style="margin-bottom: 20px">
    <h2 class="page-header" style="font-size:25px;">Kế hoạch</h2>
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <div id="tabs-daotao" style="margin-top: 10px;">
                <ul>
                    <li class="col-xs-12 col-md-2"><a href="#tabs-5">TỔNG HỢP</a></li>
                    <li class="col-xs-12 col-md-3"><a href="#tabs-6">ĐÀO TẠO ĐẠI HỌC</a></li>
                    <li class="col-xs-12 col-md-3"><a href="#tabs-7">ĐÀO TẠO SAU ĐẠI HỌC</a></li>
                    <li class="col-xs-12 col-md-3"><a href="#tabs-8">CÔNG TÁC SINH VIÊN </a></li>
                </ul>
                <div id="tabs-5">
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 01</p>
                                </div>
                                <div class="ngayThi">
                                    <p>03</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25108">
                                        <p><b>[ĐTĐH]</b> Kế hoạch mở đăng k&#253; lớp học kỳ 2 năm học 2020-2021 (20202)</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>10H00 03/01/2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 12</p>
                                </div>
                                <div class="ngayThi">
                                    <p>14</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25107">
                                        <p><b>[ĐTĐH]</b> Kế hoạch thu học ph&#237; kỳ 20201 - đợt 2</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>14/12/2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 10</p>
                                </div>
                                <div class="ngayThi">
                                    <p>06</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25097">
                                        <p><b>[ĐTĐH]</b> Lịch mở đăng k&#253; kế hoạch học tập (đăng k&#253; học phần) học kỳ 2 năm học 2020-2021 (20201)</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>18h00 ng&#224;y 06/10/2020</p>
                                </div>
                            </div>
                        </div>
                    <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=5">2</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=3&amp;tabID=5">3</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=4&amp;tabID=5">4</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=5&amp;tabID=5">5</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=6&amp;tabID=5">6</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=7&amp;tabID=5">7</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=8&amp;tabID=5">8</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=9&amp;tabID=5">9</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=10&amp;tabID=5">10</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToNext"><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=5" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="https://ctt-daotao.hust.edu.vn/?page=47&amp;tabID=5">»»</a></li></ul></div>
                </div>
                <div id="tabs-6">
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 01</p>
                                </div>
                                <div class="ngayThi">
                                    <p>03</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25108">
                                        <p>Kế hoạch mở đăng k&#253; lớp học kỳ 2 năm học 2020-2021 (20202)</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>10H00 03/01/2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 12</p>
                                </div>
                                <div class="ngayThi">
                                    <p>14</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25107">
                                        <p>Kế hoạch thu học ph&#237; kỳ 20201 - đợt 2</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>14/12/2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 10</p>
                                </div>
                                <div class="ngayThi">
                                    <p>06</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25097">
                                        <p>Lịch mở đăng k&#253; kế hoạch học tập (đăng k&#253; học phần) học kỳ 2 năm học 2020-2021 (20201)</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>18h00 ng&#224;y 06/10/2020</p>
                                </div>
                            </div>
                        </div>
                    <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=6">2</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=3&amp;tabID=6">3</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=4&amp;tabID=6">4</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=5&amp;tabID=6">5</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=6&amp;tabID=6">6</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=7&amp;tabID=6">7</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=8&amp;tabID=6">8</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=9&amp;tabID=6">9</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=10&amp;tabID=6">10</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToNext"><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=6" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="https://ctt-daotao.hust.edu.vn/?page=37&amp;tabID=6">»»</a></li></ul></div>
                </div>
                <div id="tabs-7">
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 04</p>
                                </div>
                                <div class="ngayThi">
                                    <p>18</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=14036">
                                        <p>Tư vấn tuyển sinh Sau đại học năm 2018</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>18/04/2018</p>
                                </div>
                            </div>
                        </div>
                    <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li></ul></div>
                </div>
                <div id="tabs-8">
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 11</p>
                                </div>
                                <div class="ngayThi">
                                    <p>28</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25104">
                                        <p>Job Fair 2020 - Ng&#224;y hội việc l&#224;m, tuyển dụng, thực tập của 20 doanh nghiệp</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>Thời gian: 7h s&#225;ng Thứ bảy ng&#224;y 28/11/2020, tại Hội trường C2</p>
                                </div>
                            </div>
                        </div>
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 11</p>
                                </div>
                                <div class="ngayThi">
                                    <p>17</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25103">
                                        <p>Hội thảo tuyển dụng kỹ sư của C&#244;ng ty LG Display Việt Nam Hải Ph&#242;ng</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>Thời gian: 8h30 đến 17h00, Thứ Ba ng&#224;y 17/11/2020 tại ph&#242;ng Hội thảo C2</p>
                                </div>
                            </div>
                        </div>
                        <div class="lichThi">
                            <div class="timeThi">
                                <div class="thangThi">
                                    <p>THÁNG 07</p>
                                </div>
                                <div class="ngayThi">
                                    <p>20</p>
                                </div>
                            </div>
                            <div class="contentThi">
                                <div class="textThi">
                                    <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayKehoach?kehoach=25093">
                                        <p>Kế hoạch tổ chức đ&#225;nh gi&#225; kết quả r&#232;n luyện của sinh vi&#234;n kỳ 20192</p>
                                    </a>
                                </div>
                                <div class="gioThi">
                                    <p>20/07/2020</p>
                                </div>
                            </div>
                        </div>
                    <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=8">2</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=3&amp;tabID=8">3</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=4&amp;tabID=8">4</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=5&amp;tabID=8">5</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=6&amp;tabID=8">6</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=7&amp;tabID=8">7</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=8&amp;tabID=8">8</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=9&amp;tabID=8">9</a></li><li class="PagedList-skipToNext"><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=8" rel="next">»</a></li></ul></div>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-md-4 text-center" style="background-color: #f2f1eb; margin-top: 15px">
            @if(Auth::user())
                <div class="row text-center">

                  <!--Grid column-->
                  <div class="col-md-12 mb-4">
                    <br>

                    <img class="rounded-circle" width="55%" alt="100x100" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/37246826_2149507762004258_1857216825989791744_n.jpg?_nc_cat=102&ccb=2&_nc_sid=174925&_nc_ohc=kSnxjJTZ1RoAX8CPDk0&_nc_ht=scontent.fhan2-1.fna&oh=850c2af9efab66cbe491dab2430d45e4&oe=601BA47E"
                      data-holder-rendered="true" style="box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19)!important;border-radius: 50%!important;">

                  </div>
                  <!--Grid column-->

                  

                </div>
                <!-- <br>
                <p style="color: #8c1515; text-align:center; font-size:24px;">ĐĂNG NHẬP</p>
                <br> -->
                <br>
                <a href="#">
                    <p class="loginSubmit-button" style="line-height:2;">{{Auth::user()->name}} - MSSV: {{Auth::user()->mssv}}</p>
                    <!-- <p class="loginSubmit-button" style="line-height:2;">MSSV: 20166461</p> -->
                </a>
                <!-- <a href="http://sdh.hust.edu.vn/dkh/Login.aspx">
                    <p class="loginSubmit-button" style="line-height:2;">Dành cho Học viên Cao học</p>
                </a> -->
                <!-- <div class="loginSubmit-button">
                    <button onclick="document.getElementById('id01').style.display='block'" style="background: none; line-height: 1.8; border: none; ">Dành cho Quản trị</button>
                </div> -->
            @else

                <br>
                <p style="color: #8c1515; text-align:center; font-size:24px;">ĐĂNG NHẬP</p>
                <br>
                <a href="{{URL::route('login')}}">
                    <p class="loginSubmit-button" style="line-height:2;">Dành cho Giảng viên/Học Sinh/Sinh viên</p>
                </a>
                <!-- <a href="http://sdh.hust.edu.vn/dkh/Login.aspx">
                    <p class="loginSubmit-button" style="line-height:2;">Dành cho Học viên Cao học</p>
                </a> -->
                <div class="loginSubmit-button">
                    <button onclick="document.getElementById('id01').style.display='block'" style="background: none; line-height: 1.8; border: none; ">Dành cho Quản trị</button>
                </div>
            @endif
            
        </div>
        
    </div>
</div>
<div class="container-fluid" style="background-color: #ddd; margin-bottom: 100px">
    <div class="container" style="margin-bottom: 100px">
        <h2 class="page-header" style="font-size:25px;">Tin tức</h2>
        <div id="tabs">
            <ul>
                <li class="col-xs-12 col-md-2"><a href="#tabs-1" class="text-center">TỔNG HỢP</a></li>
                <li class="col-xs-12 col-md-2"><a href="#tabs-2">ĐÀO TẠO ĐẠI HỌC</a></li>
                <li class="col-xs-12 col-md-2"><a href="#tabs-3">ĐÀO TẠO SAU ĐẠI HỌC</a></li>
                <li class="col-xs-12 col-md-2"><a href="#tabs-4">CÔNG TÁC SINH VIÊN</a></li>
            </ul>
            <div id="tabs-1">
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36982">
                            <h3><b>[ĐTSĐH]</b> Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh Trịnh Xu&#226;n Yến</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">7/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36981">
                            <h3><b>[ĐTSĐH]</b> Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh L&#234; T&#249;ng Anh</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">6/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36897">
                            <h3><b>[ĐTĐH]</b> Lịch thi giữa kỳ v&#224; cuối kỳ 20201</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">6/1/2021</i>
                        <p>Sinh vi&#234;n ch&#250; &#253; theo d&#245;i lịch thi 20201 (cập nhật ng&#224;y 06/01/2021)</p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36980">
                            <h3><b>[ĐTSĐH]</b> Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh  Lương Minh Tuấn</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36979">
                            <h3><b>[ĐTSĐH]</b> Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh  Ho&#224;ng Văn Tuấn</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=1">2</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=3&amp;tabID=1">3</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=4&amp;tabID=1">4</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=5&amp;tabID=1">5</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=6&amp;tabID=1">6</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=7&amp;tabID=1">7</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=8&amp;tabID=1">8</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=9&amp;tabID=1">9</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=10&amp;tabID=1">10</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToNext"><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=1" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="https://ctt-daotao.hust.edu.vn/?page=371&amp;tabID=1">»»</a></li></ul></div>
            </div>
            <div id="tabs-2">
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36897">
                            <h3>Lịch thi giữa kỳ v&#224; cuối kỳ 20201</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">6/1/2021</i>
                        <p>Sinh vi&#234;n ch&#250; &#253; theo d&#245;i lịch thi 20201 (cập nhật ng&#224;y 06/01/2021)</p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36977">
                            <h3>Một số lưu &#253; d&#224;nh cho K62 khi đăng k&#253; học phần Đồ &#225;n tốt nghiệp kỳ 20202</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p>Sinh vi&#234;n K62 lưu &#253; th&#244;ng tin trước khi đăng k&#253; học phần Đồ &#225;n tốt nghiệp kỳ 20202.</p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=96">
                            <h3>Biểu mẫu xin nghỉ, xin th&#244;i học, xin tiếp nhận trở lại, chuyển trường</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">28/12/2020</i>
                        <p>Biểu mẫu xin nghỉ học d&#224;i hạn, xin th&#244;i học r&#250;t hồ sơ, xin tiếp nhận trở lại, xin chuyển ng&#224;nh học</p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36959">
                            <h3>Kết quả x&#233;t tốt nghiệp đợt 20201-A v&#224; đăng k&#253; bổ sung</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">17/12/2020</i>
                        <p>SInh vi&#234;n đ&#227; đăng k&#253; x&#233;t tốt nghiệp kỳ 20201-A v&#224; xem kết quả.</p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36955">
                            <h3>Kế hoạch thu học ph&#237; kỳ 20201 - đợt 2</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">14/12/2020</i>
                        <p>Sinh vi&#234;n ch&#250; &#253; thời gian thu học ph&#237; đợt 2 kỳ 20201 (cập nhật ng&#224;y 14/12)</p>
                    </div>
                <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=2">2</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=3&amp;tabID=2">3</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=4&amp;tabID=2">4</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=5&amp;tabID=2">5</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=6&amp;tabID=2">6</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=7&amp;tabID=2">7</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=8&amp;tabID=2">8</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=9&amp;tabID=2">9</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=10&amp;tabID=2">10</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToNext"><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=2" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="https://ctt-daotao.hust.edu.vn/?page=62&amp;tabID=2">»»</a></li></ul></div>
            </div>
            <div id="tabs-3">
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36982">
                            <h3>Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh Trịnh Xu&#226;n Yến</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">7/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36981">
                            <h3>Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh L&#234; T&#249;ng Anh</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">6/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36980">
                            <h3>Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh  Lương Minh Tuấn</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36979">
                            <h3>Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh  Ho&#224;ng Văn Tuấn</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36978">
                            <h3>Bảo vệ luận &#225;n Tiến sĩ  cấp Trường cho nghi&#234;n cứu sinh  Nguyễn Ngọc L&#226;n</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=3">2</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=3&amp;tabID=3">3</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=4&amp;tabID=3">4</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=5&amp;tabID=3">5</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=6&amp;tabID=3">6</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=7&amp;tabID=3">7</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=8&amp;tabID=3">8</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=9&amp;tabID=3">9</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=10&amp;tabID=3">10</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToNext"><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=3" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="https://ctt-daotao.hust.edu.vn/?page=108&amp;tabID=3">»»</a></li></ul></div>
            </div>
            <div id="tabs-4">
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36976">
                            <h3>Th&#244;ng b&#225;o mua Bảo hiểm y tế (BHYT) đợt 2 năm 2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">4/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36972">
                            <h3>Danh s&#225;ch sinh vi&#234;n nhận học bổng t&#224;i trợ của Ng&#226;n h&#224;ng BIDV chi nh&#225;nh H&#224; Th&#224;nh năm học 2020-2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">30/12/2020</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36968">
                            <h3>KẾT QUẢ X&#201;T CẤP HỌC BỔNG KKHT HỌC KỲ I NĂM HỌC 2020-2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">30/12/2020</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36948">
                            <h3>Danh s&#225;ch sinh vi&#234;n nhận học bổng t&#224;i trợ của C&#244;ng ty Nhật Minh năm học 2020-2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">9/12/2020</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayBaiViet?baiviet=36947">
                            <h3>Danh s&#225;ch sinh vi&#234;n nhận học bổng t&#224;i trợ của Quỹ Posco TJ Park Foundation năm học 2020-2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">9/12/2020</i>
                        <p></p>
                    </div>
                <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=4">2</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=3&amp;tabID=4">3</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=4&amp;tabID=4">4</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=5&amp;tabID=4">5</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=6&amp;tabID=4">6</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=7&amp;tabID=4">7</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=8&amp;tabID=4">8</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=9&amp;tabID=4">9</a></li><li><a href="https://ctt-daotao.hust.edu.vn/?page=10&amp;tabID=4">10</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToNext"><a href="https://ctt-daotao.hust.edu.vn/?page=2&amp;tabID=4" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="https://ctt-daotao.hust.edu.vn/?page=202&amp;tabID=4">»»</a></li></ul></div>
            </div>
            </>
        </div>
    </div>
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var tabid = 1;
            if ($('#tabvalue').val() > 1) {
                tabid = $('#tabvalue').val() - 1;
            }
            else {
                tabid = 0;
            }
            $("#tabs").tabs();
            $("#tabs-daotao").tabs();
            $("#tabs-login").tabs();
            $("#tabs-daotao").tabs({ active: tabid });
            $("#tabs").tabs({ active: tabid });
        });
    </script>
<script type="text/javascript">
    $(function () {
        function ChangeUrl(page, url) {
            if (typeof (history.pushState) != "undefined") {
                var obj = { Page: page, Url: url };
                history.pushState(null, obj.Page, obj.Url);
            } else {
                alert("Browser does not support HTML5.");
            }
        }

        $('#tabs').on('click', '#tabs-1 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-1').html($($.parseHTML(result)).find('#tabs-1'));
                }
            });
        });
        $('#tabs').on('click', '#tabs-1 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            alert(url);
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-1').html($($.parseHTML(result)).find('#tabs-1'));
                }
            });
        });
        $('#tabs').on('click', '#tabs-2 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-2').html($($.parseHTML(result)).find('#tabs-2'));
                }
            });
        });
        $('#tabs').on('click', '#tabs-3 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-3').html($($.parseHTML(result)).find('#tabs-3'));
                }
            });
        });
        $('#tabs').on('click', '#tabs-4 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-4').html($($.parseHTML(result)).find('#tabs-4'));
                }
            });
        });
        $('#tabs-daotao').on('click', '#tabs-5 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-5').html($($.parseHTML(result)).find('#tabs-5'));
                }
            });
        });
        $('#tabs-daotao').on('click', '#tabs-6 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-6').html($($.parseHTML(result)).find('#tabs-6'));
                }
            });
        });
        $('#tabs-daotao').on('click', '#tabs-7 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-7').html($($.parseHTML(result)).find('#tabs-7'));
                }
            });
        });
        $('#tabs-daotao').on('click', '#tabs-8 .pagination a', function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            console.log(url);
            $.ajax({
                url: url,
                success: function (result) {
                    ChangeUrl('index', url);
                    $('#tabs-8').html($($.parseHTML(result)).find('#tabs-8'));
                }
            });
        });

    });
                </script>

    <footer class="footer" style="position: absolute;">
        <div class="container" style="padding-bottom: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <p>Bản quyền thuộc về Trường Đại học Bách Khoa Hà Nội</p>
                        <p class="normal">Địa chỉ: Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <center>
                    <img src="https://ctt-daotao.hust.edu.vn/Images/new-footer.png" style="max-width:100%;bottom:0;"/>
                </center>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ctt-daotao.hust.edu.vn/bundles/jquery?v=bh2_I_H4Zkc_dufGmH-uBxhlaJbkqICTOJW2XqQgs5s1"></script>

    
</body>
</html>
