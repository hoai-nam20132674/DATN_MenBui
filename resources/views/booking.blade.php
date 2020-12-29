
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

    <link rel="shortcut icon" href="http://pixner.net/boleto/demo/assets/images/favicon.png" type="image/x-icon">

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
                        <img src="http://pixner.net/boleto/demo/assets/images/logo/logo.png" alt="logo">
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
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="./assets/images/banner/banner04.jpg">
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
			                	
			                		<div class="col-md-4">
			                			<span class="date">Ngày</span>
										<input type="date" name="date">
			                		</div>
			                		<div class="col-md-4">
			                			<span class="date">Giờ vào</span>
			                			<select class="" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
					                        <option value="sc1">09:40</option>
					                        <option value="sc2">13:45</option>
					                        <option value="sc3">15:45</option>
					                        <option value="sc4">19:50</option>
					                    </select>
			                		</div>
			                		<div class="col-md-4">
			                			<span class="date">Giờ ra</span>
			                			<select class="" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
					                        <option value="sc1">09:40</option>
					                        <option value="sc2">13:45</option>
					                        <option value="sc3">15:45</option>
					                        <option value="sc4">19:50</option>
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
                            <span>G</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>G</span>
                        </li>
                        <li class="seat-line">
                            <span>f</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f7</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f9</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f10</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f11</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>f</span>
                        </li>
                    </ul>
                </div>
                <h5 class="subtitle">LỐI ĐI</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area couple">
                        <li class="seat-line">
                            <span>e</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>e</span>
                        </li>
                        <li class="seat-line">
                            <span>d</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-booked.png" alt="seat">
                                            <span class="sit-num">D7 D8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
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
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">f11 f12</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
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
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">b7 b8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>b</span>
                        </li>
                        <li class="seat-line">
                            <span>a</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">a1 a2</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">a3 a4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">a5 a6</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">a7 a8</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">a9 a10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">a11</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="http://pixner.net/boleto/demo/assets/images/movie/seat02-free.png" alt="seat">
                                            <span class="sit-num">a12</span>
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
                        <h3 class="title">d9, d10</h3>
                    </div>
                    <div class="book-item">
                        <span>Số lượng</span>
                        <h3 class="title">2</h3>
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
            <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left">
                        <p>Copyright © 2020.All Rights Reserved By <a href="#0">Boleto </a></p>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#0">About</a>
                        </li>
                        <li>
                            <a href="#0">Terms Of Use</a>
                        </li>
                        <li>
                            <a href="#0">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#0">FAQ</a>
                        </li>
                        <li>
                            <a href="#0">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->


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
</body>

</html>