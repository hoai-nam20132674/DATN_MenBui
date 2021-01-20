
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
    <style type="text/css">
        #loader {
            bottom: 0;
            height: 175px;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            width: 175px;
        }
        #loader {
            bottom: 0;
            height: 175px;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            width: 175px;
        }
        #loader .dot {
            bottom: 0;
            height: 100%;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            width: 87.5px;
        }
        #loader .dot::before {
            border-radius: 100%;
            content: "";
            height: 87.5px;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transform: scale(0);
            width: 87.5px;
        }
        #loader .dot:nth-child(7n+1) {
            transform: rotate(45deg);
        }
        #loader .dot:nth-child(7n+1)::before {
            animation: 0.8s linear 0.1s normal none infinite running load;
            background: #00ff80 none repeat scroll 0 0;
        }
        #loader .dot:nth-child(7n+2) {
            transform: rotate(90deg);
        }
        #loader .dot:nth-child(7n+2)::before {
            animation: 0.8s linear 0.2s normal none infinite running load;
            background: #00ffea none repeat scroll 0 0;
        }
        #loader .dot:nth-child(7n+3) {
            transform: rotate(135deg);
        }
        #loader .dot:nth-child(7n+3)::before {
            animation: 0.8s linear 0.3s normal none infinite running load;
            background: #00aaff none repeat scroll 0 0;
        }
        #loader .dot:nth-child(7n+4) {
            transform: rotate(180deg);
        }
        #loader .dot:nth-child(7n+4)::before {
            animation: 0.8s linear 0.4s normal none infinite running load;
            background: #0040ff none repeat scroll 0 0;
        }
        #loader .dot:nth-child(7n+5) {
            transform: rotate(225deg);
        }
        #loader .dot:nth-child(7n+5)::before {
            animation: 0.8s linear 0.5s normal none infinite running load;
            background: #2a00ff none repeat scroll 0 0;
        }
        #loader .dot:nth-child(7n+6) {
            transform: rotate(270deg);
        }
        #loader .dot:nth-child(7n+6)::before {
            animation: 0.8s linear 0.6s normal none infinite running load;
            background: #9500ff none repeat scroll 0 0;
        }
        #loader .dot:nth-child(7n+7) {
            transform: rotate(315deg);
        }
        #loader .dot:nth-child(7n+7)::before {
            animation: 0.8s linear 0.7s normal none infinite running load;
            background: magenta none repeat scroll 0 0;
        }
        #loader .dot:nth-child(7n+8) {
            transform: rotate(360deg);
        }
        #loader .dot:nth-child(7n+8)::before {
            animation: 0.8s linear 0.8s normal none infinite running load;
            background: #ff0095 none repeat scroll 0 0;
        }
        #loader .lading {
            background-image: url("../images/loading.gif");
            background-position: 50% 50%;
            background-repeat: no-repeat;
            bottom: -40px;
            height: 20px;
            left: 0;
            position: absolute;
            right: 0;
            width: 180px;
        }
        @keyframes load {
        100% {
            opacity: 0;
            transform: scale(1);
        }
        }
        @keyframes load {
        100% {
            opacity: 0;
            transform: scale(1);
        }
        }

    </style>

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
    @include('layout.header')
    <!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="https://image.bnews.vn/MediaUpload/Org/2020/08/27/dai-hoc-bach-khoa.jpg">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">ĐẶT LỊCH GIỮ CHỖ</h3>
                    <div class="tags">
                        <a href="#0">{{$la->name}}</a>
                        <a href="#0">Số lượng ghế - {{count($seats)}}</a>
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
										<input type="date" onchange="seatRender()" name="date">
			                		</div>
			                		<div class="col-md-3">
			                			<span class="date">Giờ vào</span>
                                        <input type="time" name="timeIn" onchange="seatRender()" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
			                			
			                		</div>
			                		<div class="col-md-3">
			                			<span class="date">Giờ ra</span>
                                        <input type="time" name="timeOut" onchange="seatRender()" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
			                			
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
	            	
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->
    <div class="container ajaxload">
        <div class="row">
            <div id="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="lading"></div>
            </div>
        </div>
    </div>

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">CỬA VÀO LAB 1</h4>
                <div class="screen-thumb">
                    <img src="http://pixner.net/boleto/demo/assets/images/movie/screen-thumb.png" alt="movie">
                </div>
                <h5 class="subtitle">KHU VỰC CHECK IN</h5>
                
                <div class="screen-wrapper" id="seat-area">
                    <ul class="seat-area" lab-id="{{$id}}">
                        
                        

                    </ul>
                </div>

                <h5 class="subtitle">LỐI ĐI</h5>
                
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
                        <a href="#" class="custom-button seat-booking-button">ĐẶT LỊCH GIỮ CHỖ</a>
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
                        <img src="https://www.hust.edu.vn/hust-theme/images/logoEn.png" alt="footer">
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
        $(document).ready(function(){
            $(".ajaxload").hide();
            var lab_id = $('.seat-area').attr('lab-id');
            var date = $('input[name="date"]').val();
            var timeIn = $('input[name="timeIn"]').val();
            var timeOut = $('input[name="timeOut"]').val();
            var url = 'http://localhost:8000/seat-render/'+lab_id+'?timeIn='+date+' '+timeIn+'&timeOut='+date+' '+timeOut;
            console.log(url);
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data) {
                    $('.seat-area').html(data);

                }
            });
            var seat_line = $(".seat-area").attr('lab-id');
            console.log(seat_line);
            

        });
        $(document).on('click', '.seat-booking-button', function(event) {
            event.preventDefault();
            var type_bk = $('select[name="type"]').val();
            var user_id = $('#user').attr('user-id');
            var user_mssv = $('#user').attr('user-mssv');
            if(user_id !=0){
                if(type_bk == 0){
                    var seatId = $('.seat-free[check=1]').attr('seat_id');
                    var date = $('input[name="date"]').val();
                    var timeIn = $('input[name="timeIn"]').val();
                    var timeOut = $('input[name="timeOut"]').val();
                    timeIn = date+' '+timeIn;
                    timeOut = date+' '+timeOut;
                    url = 'http://localhost:8000/user-booking/'+user_mssv+'?seatId='+seatId+'&timeIn='+timeIn+'&timeOut='+timeOut;
                    console.log(url);
                    $.ajax({
                        type: 'GET',
                        url: url,
                        dataType: 'html',
                        success: function(data) {
                            if(data=='1'){
                                Swal.fire({
                                  position: 'top-end',
                                  icon: 'success',
                                  title: 'Đặt chỗ thành công',
                                  showConfirmButton: false,
                                  timer: 1000
                                })
                                $('html, body').animate({
                                    scrollTop: $(".screen-area").offset().top
                                }, 2000);

                            }
                            else{
                                Swal.fire({
                                  position: 'top-end',
                                  icon: 'error',
                                  title: 'Đặt chỗ không thành công',
                                  showConfirmButton: false,
                                  timer: 1000
                                })
                            }
                        }
                    });
                    // console.log(url)
                }
                else{
                    var seatName = [];
                    var steps = [];
                    var seatId = [];
                    var date = $('input[name="date"]').val();
                    var timeIn = $('input[name="timeIn"]').val();
                    var timeOut = $('input[name="timeOut"]').val();
                    timeIn = date+' '+timeIn;
                    timeOut = date+' '+timeOut;
                    var i=0;
                    $('.seat-free[check=1]').each(function()
                    {
                        var name = $(this).children(".sit-num").text();
                        seatName[i] = {title:name, text:"Điền mã số sinh viên cho ghế "+name};
                        steps[i] = i+1;
                        seatId[i] = $(this).attr('seat_id');
                        i++;
                    });
                    // console.log(seatName);
                    Swal.mixin({
                      input: 'text',
                      confirmButtonText: 'Next &rarr;',
                      showCancelButton: true,
                      progressSteps: steps
                    }).queue(
                        seatName
                    ).then((result) => {
                      if (result.value) {
                        const answers = JSON.stringify(result.value)
                        // Swal.fire({
                        //   title: 'All done!',
                        //   html: `
                        //     Your answers:
                        //     <pre><code>${answers}</code></pre>
                        //   `,
                        //   confirmButtonText: 'Lovely!'
                        // })
                        var mssv = result.value;
                        // console.log(mssv);
                        Swal.fire({
                          title: 'Bạn muốn đặt '+steps.length+' ghế cho '+answers,
                          showDenyButton: true,
                          showCancelButton: true,
                          confirmButtonText: `Đặt ngay`,
                          denyButtonText: `Hủy đặt`,
                        }).then((result) => {
                          /* Read more about isConfirmed, isDenied below */
                          if (result.isConfirmed) {
                            var j=0;
                            var success = 0;
                            $('.seat-free[check=1]').each(function()
                            {
                                var url = 'http://localhost:8000/user-booking/'+mssv[j]+'?seatId='+seatId[j]+'&timeIn='+timeIn+'&timeOut='+timeOut;
                                j++;
                                $.ajax({
                                    type: 'GET',
                                    url: url,
                                    dataType: 'html',
                                    success: function(data) {
                                        if(data=='1'){
                                            success++;

                                        }
                                        else{
                                            
                                        }
                                    }
                                });


                            });
                            Swal.fire('Saved!', 'Đặt chỗ thành công', 'success')
                          } else if (result.isDenied) {
                            Swal.fire('Changes are not saved', '', 'info')
                          }
                        })
                      }
                    })
                    // Swal.mixin({
                    //   input: 'text',
                    //   confirmButtonText: 'Next &rarr;',
                    //   showCancelButton: true,
                    //   progressSteps: ['1', '2', '3']
                    // }).queue([
                    //   {title:"Question 1", text:"Chaining swal2 modals is easy"},
                    //   'Question 2',
                    //   'Question 3'
                    // ]).then((result) => {
                    //   if (result.value) {
                    //     const answers = JSON.stringify(result.value)
                    //     Swal.fire({
                    //       title: 'All done!',
                    //       html: `
                    //         Your answers:
                    //         <pre><code>${answers}</code></pre>
                    //       `,
                    //       confirmButtonText: 'Lovely!'
                    //     })
                    //   }
                    // })
                    


                }
            }
            else{
                Swal.fire({
                  icon: 'error',
                  title: 'VUI LÒNG ĐĂNG NHẬP',
                  text: '',
                  footer: ''
                })
            }
        });
    </script>
    <script type="text/javascript">
        function seatRender(){
            var lab_id = $('.seat-area').attr('lab-id');
            var date = $('input[name="date"]').val();
            var timeIn = $('input[name="timeIn"]').val();
            var timeOut = $('input[name="timeOut"]').val();
            if(timeIn==''||timeOut==''||date ==''){

            }
            else{
                
                $(".ajaxload").show();
                $(".seat-name").text('');
                $(".seat-count").text('');
                var url = 'http://localhost:8000/seat-render/'+lab_id+'?timeIn='+date+' '+timeIn+'&timeOut='+date+' '+timeOut;
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'html',
                    success: function(data) {
                        $('.seat-area').html(data);
                        $(".ajaxload").hide();
                        var count = (data.match(/seat-free="1"/g) || []).length;
                        Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Có '+count+' chỗ còn trống',
                          showConfirmButton: false,
                          timer: 1000
                        })
                        $('html, body').animate({
                            scrollTop: $(".screen-area").offset().top
                        }, 2000);
                    }
                });
            }
        }
    </script>
</body>

</html>