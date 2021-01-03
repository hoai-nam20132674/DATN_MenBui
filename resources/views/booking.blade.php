
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/booking/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking/main.css')}}">

    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTORaQqYrfLbfYj_YpqQcmbeyOkkE-S6hztGA&usqp=CAU" type="image/x-icon">

    <title>ĐẶT LỊCH GIỮ CHỖ</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="https://www.hust.edu.vn/hust-theme/images/logoEn.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="#0">Trang chủ</a>
                        
                    </li>
                    <li>
                        <a href="#0" class="active">Phòng lab</a>
                        <ul class="submenu">
                            <li>
                                <a href="movie-grid.html">Lab 1</a>
                            </li>
                            <li>
                                <a href="movie-list.html">Lab 2</a>
                            </li>
                            <li>
                                <a href="movie-details.html">Lab 3</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Đặt chỗ</a>
                        <ul class="submenu">
                            <li>
                                <a href="events.html">Đặt chỗ</a>
                            </li>
                            <li>
                                <a href="event-details.html">Lịch sử đặt chỗ</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="#0">Tin tức</a>
                        <ul class="submenu">
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="blog-details.html">Blog Single</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Liên hệ</a>
                    </li>
                    <li class="header-button pr-0">
                        <a href="sign-up.html">Đăng nhập</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="https://image.bnews.vn/MediaUpload/Org/2020/08/27/dai-hoc-bach-khoa.jpg">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">ĐẶT LỊCH GIỮ CHỖ</h3>
                    <div class="tags">
                        <a href="#0">Lab 1</a>
                        <a href="#0">Số lượng ghế - 200</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
            	<div class="row" style="width: 100%">
            		<!-- <div class="col-md-3">
		                <div class="item md-order-1">
		                    <a href="movie-ticket-plan.html" class="custom-button back-button">
		                        <i class="flaticon-double-right-arrows-angles"></i>Quay lại
		                    </a>
		                </div>
		            </div> -->
		            <div class="col-md-12">
		                
		                	<div class="row" style="width: 100%">

			                	
			                		<div class="col-md-3">
			                			<span class="date">Ngày</span>
										<input type="date" onchange="consolelogvalue()" name="date">
			                		</div>
			                		<div class="col-md-3">
			                			<span class="date">Giờ vào</span>
                                        <input type="time" name="timeIn" onchange="consolelogvalue()" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
			                			<!-- <select class="timeIn" name="timeIn" onchange="timeInFunction()" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
					                        <option value="8">08:00</option>
					                        <option value="9">09:00</option>
					                        <option value="10">10:00</option>
					                        <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                            <option value="13">13:00</option>
                                            <option value="14">14:00</option>
                                            <option value="15">15:00</option>
                                            <option value="16">16:00</option>
                                            <option value="17">17:00</option>
                                            
					                    </select> -->
			                		</div>
			                		<div class="col-md-3">
			                			<span class="date">Giờ ra</span>
                                        <input type="time" name="timeOut" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
			                			<!-- <select class="timeOut" name="timeOut" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
					                        
                                            <option value="9">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                            <option value="13">13:00</option>
                                            <option value="14">14:00</option>
                                            <option value="15">15:00</option>
                                            <option value="16">16:00</option>
                                            <option value="17">17:00</option>
                                            <option value="18">18:00</option>
					                    </select> -->
			                		</div>
                                    <div class="col-md-3">
                                        <span class="date">Hình thức</span>
                                        <select name="type" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
                                            <option value="0">Đặt cá nhân</option>
                                            <option value="1">Đặt theo nhóm</option>
                                        </select>
                                    </div>
			                	
			                </div>
		                
		            </div>
	            	<!-- <div class="col-md-3">
		                <div class="item">
		                    <h5 class="title">05:00</h5>
		                    <p>Mins Left</p>
		                </div>
		            </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">CỬA VÀO LAB 1</h4>
                <div class="screen-thumb">
                    <img src="http://pixner.net/boleto/demo/assets/images/movie/screen-thumb.png" alt="movie">
                </div>
                <h5 class="subtitle">KHU VỰC CHECK IN</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <span>h</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h1</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h2</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h3</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h5</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h6</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h7</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h9</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h11</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h12</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h13</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">h14</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>h</span>
                        </li>
                        <li class="seat-line">
                            <span>f</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g1</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g2</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g3</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g5</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g6</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g7</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g9</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g11</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g12</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g13</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">g14</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>g</span>
                        </li>
                        <li class="seat-line">
                            <span>f</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f1</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f2</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f3</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f5</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f6</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f7</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f9</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f11</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f12</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f13</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f14</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>f</span>
                        </li>
                        <li class="seat-line">
                            <span>e</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e1</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e2</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e3</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e5</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e6</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e7</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e9</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e11</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e12</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e13</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">e14</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>e</span>
                        </li>
                    </ul>
                </div>
                <h5 class="subtitle">LỐI ĐI</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area ">
                        
                        <li class="seat-line">
                            <span>d</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d1</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d2</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d3</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d5</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d6</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d7</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d9</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d11</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d12</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d13</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">d14</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>d</span>
                        </li>
                        <li class="seat-line">
                            <span>c</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c1</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c2</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c3</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c5</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c6</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c7</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c11</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c12</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c13</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">c14</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>c</span>
                        </li>
                        <li class="seat-line">
                            <span>b</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b1</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b2</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b3</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b5</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b6</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b7</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b11</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b12</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b13</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">b14</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>a</span>
                        </li>
                        <li class="seat-line">
                            <span>a</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a1</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a2</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a3</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a5</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a6</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a7</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a8</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free" check="0" >
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a11</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a12</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a13</span>
                                        </li>
                                        <li class="single-seat seat-free" check="0">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">a14</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>a</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="proceed-book bg_img" data-background="./assets/images/movie/movie-bg-proceed.jpg">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span>GHẾ BẠN ĐÃ CHỌN</span>
                        <h3 class="title seat-name"></h3>
                    </div>
                    <div class="book-item">
                        <span>Số lượng</span>
                        <h3 class="title seat-count"></h3>
                    </div>
                    <div class="book-item">
                        <a href="movie-checkout.html" class="custom-button">ĐẶT LỊCH GIỮ CHỖ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="newslater-section padding-bottom">
            <div class="container">
                <div class="newslater-container bg_img" data-background="./assets/images/newslater/newslater-bg01.jpg">
                    <div class="newslater-wrapper">
                        <h5 class="cate">HÒM THƯ GÓP Ý</h5>
                        <h3 class="title">MỌI PHẢN HỒI VUI LÒNG GỬI VỀ HÒM THƯ</h3>
                        <form class="newslater-form">
                        	<textarea></textarea>
                            <input type="text" name="email" placeholder="Your Email Address">
                            <button type="submit" style="position: relative;">GỬI THƯ GÓP Ý</button>
                        </form>
                        <p>Chúng tôi tôn trọng quyền riêng tư của bạn, vì vậy chúng tôi không bao giờ chia sẻ thông tin của bạn</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="logo">
                    <a href="index-1.html">
                        <img src="http://pixner.net/boleto/demo/assets/images/footer/footer-logo.png" alt="footer">
                    </a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('js/booking/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/booking/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/booking/plugins.js')}}"></script>
    <script src="{{asset('js/booking/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/booking/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/booking/magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/booking/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/booking/wow.min.js')}}"></script>
    <script src="{{asset('js/booking/countdown.min.js')}}"></script>
    <script src="{{asset('js/booking/odometer.min.js')}}"></script>
    <script src="{{asset('js/booking/viewport.jquery.js')}}"></script>
    <script src="{{asset('js/booking/nice-select.js')}}"></script>
    <script src="{{asset('js/booking/main.js')}}"></script>
    <script type="text/javascript">
        function timeInFunction(){
            var timeIn = $('select[name="timeIn"]').val();
            $('.timeOut > option').each(function(){
                var a = this.value;

                if(a>timeIn){
                    // $(this).attr('disabled');
                    console.log(a);
                }
                // alert(this.text + ' ' + this.value);
            });
            // console.log(timeIn);
        }
        function consolelogvalue(){
            var date = $('input[name="timeIn"]').val();
            console.log(date);
        }

    </script>
</body>

</html>