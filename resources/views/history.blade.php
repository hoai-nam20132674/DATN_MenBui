
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
                        <a href="#0">Lab 1</a>
                        <a href="#0">Số lượng ghế - 200</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->


    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                	<div class="">
	                    <div class="booking-summery bg-one ">
	                        <h4 class="title">Lịch sử đặt chỗ</h4>
	                        @foreach($regis as $re)
	                        <ul class="checkout-widget">
	                            <li>
	                                <h6 class="subtitle">Số ghế</h6>
	                                <span class="info">{{$re->name}}</span>
	                            </li>
	                            <li>
	                                <h6 class="subtitle"><span>Giờ vào</span><span>Giờ ra</span></h6>
	                                @php
	                                	Carbon\Carbon::setLocale('vi');
	                                	$time_in = \Carbon\Carbon::createFromTimestamp(strtotime($re->time_in))->toDayDateTimeString();
                                        $time_out = \Carbon\Carbon::createFromTimestamp(strtotime($re->time_out))->toDayDateTimeString();
                                        $now = \Carbon\Carbon::now();
	                                @endphp
	                                <div class="info"><span>{{$time_in}} - {{\Carbon\Carbon::createFromTimestamp(strtotime($re->time_in))->diffForHumans($now)}}</span> <span>{{$time_out}} - {{\Carbon\Carbon::createFromTimestamp(strtotime($re->time_out))->diffForHumans($now)}}</span></div>

	                            </li>
	                            @if($id == Auth::user()->id && $re->time_in > $now)
	                            <li style="text-align: center;">
	                            	<a href="#0" class="custom-button back-button change-booking" lab-id="{{$re->lab_id}}" regis-id="{{$re->id}}">THAY ĐỔI</a>
                                    <a href="#0" mssv="{{Auth::user()->mssv}}" regis-id="{{$re->id}}" class="custom-button back-button delete-booking" style="background-image: -webkit-linear-gradient(169deg, #ff0000  17%, #ff0000  63%, #ff0000  100%);">HỦY LỊCH</a>
	                            </li>
                                
                                @else
                                @endif
	                        </ul>
	                        @endforeach
	                    </div>
	                    
	                </div>
                </div>
            </div>
        </div>
    </div>

    
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
            <div class="page-title-area" style="margin-bottom: 25px;">
                <div class="row" style="width: 100%">
                    
                    <div class="col-md-12">
                        
                            <div class="row" style="width: 100%">

                                
                                    <div class="col-md-3">
                                        <span class="date">Ngày</span>
                                        <input type="date" onchange="seatRender2()" name="date">
                                    </div>
                                    <div class="col-md-3">
                                        <span class="date">Giờ vào</span>
                                        <input type="time" name="timeIn" onchange="seatRender2()" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
                                        
                                    </div>
                                    <div class="col-md-3">
                                        <span class="date">Giờ ra</span>
                                        <input type="time" name="timeOut" onchange="seatRender2()" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
                                        
                                    </div>
                                    <div class="col-md-3">
                                        <span class="date">Phòng lab</span>
                                        <select name="lab" onchange="seatRender2()" style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);">
                                            @foreach($labs as $lab)
                                                <option value="{{$lab->id}}">{{$lab->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                
                            </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class="screen-area">
                
                <h5 class="subtitle">KHU VỰC CHECK IN</h5>
                
                <div class="screen-wrapper" id="seat-area">
                    <ul class="seat-area" lab-id="">
                        
                        

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
                        <a href="#" class="custom-button change-booking-button" regis-id="">ĐỔI LỊCH</a>
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
            $(".page-title").hide();
            $(".seat-plan-section").hide();
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
        });

        $(document).on('click', '.change-booking', function(event) {
            event.preventDefault();
            $(".page-title").show();
            $(".seat-plan-section").show();
            var regis_id = $(this).attr('regis-id');
            $(".change-booking-button").attr('regis-id',regis_id);
            var lab_id = $(this).attr('lab-id');
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
            $('html, body').animate({
                scrollTop: $(".seat-plan-section").offset().top
            }, 2000);


        });

        $(document).on('click', '.change-booking-button', function(event) {
            event.preventDefault();
            var type_bk = 0;
            var user_id = $('#user').attr('user-id');
            var user_mssv = $('#user').attr('user-mssv');
            if(user_id !=0){
                if(type_bk == 0){
                    var regis_id = $(this).attr('regis-id');
                    var seatId = $('.seat-free[check=1]').attr('seat_id');
                    var date = $('input[name="date"]').val();
                    var timeIn = $('input[name="timeIn"]').val();
                    var timeOut = $('input[name="timeOut"]').val();
                    timeIn = date+' '+timeIn;
                    timeOut = date+' '+timeOut;
                    url = 'http://localhost:8000/user-change-booking/'+user_mssv+'/'+regis_id+'?seatId='+seatId+'&timeIn='+timeIn+'&timeOut='+timeOut;
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
                                  title: 'Đổi lịch thành công',
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
                                  title: 'Đổi lịch không thành công',
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
        $(document).on('click', '.delete-booking', function(event) {
            event.preventDefault();
            Swal.fire({
              title: 'Bạn có chắc muốn hủy lịch đặt không ?',
              text: "",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'OK, hủy lịch!'
            }).then((result) => {
              if (result.isConfirmed) {
                var mssv = $(this).attr('mssv');
                var regis_id = $(this).attr('regis-id');
                var url = 'http://localhost:8000/user-delete-booking/'+mssv+'/'+regis_id;
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'html',
                    success: function(data) {
                        if(data=='1'){
                            Swal.fire({
                              position: 'top-end',
                              icon: 'success',
                              title: 'Hủy thành công',
                              showConfirmButton: false,
                              timer: 1500
                            })
                            location.reload();

                        }
                        else{
                            Swal.fire(
                              'Lỗi hủy không thành công',
                              '',
                              'success'
                            )
                        }
                    }
                });
                
              }
            })

        });
    </script>
    <script type="text/javascript">
        function seatRender2(){
            var lab_id = $('select[name="lab"]').val();
            var date = $('input[name="date"]').val();
            var timeIn = $('input[name="timeIn"]').val();
            var timeOut = $('input[name="timeOut"]').val();
            if(timeIn==''||timeOut==''){

            }
            else{
                
                $(".ajaxload").show();
                // Swal.showLoading()
                var url = 'http://localhost:8000/seat-render/'+lab_id+'?timeIn='+date+' '+timeIn+'&timeOut='+date+' '+timeOut;
                console.log(url);
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