@extends('admin.layout.default')
@section('css')
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/fontawesome.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/simple-line-icons.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2-bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/pace-theme-minimal.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.mCustomScrollbar.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker3.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/spectrum.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.fancybox.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-editable.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/table.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/booking/main.css')}}">
@endsection
@section('content')
<div class="page-content ">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active">Quản lý phòng lab</li>
    </ol>


    <div class="clearfix"></div>
    <div id="main">
        <div class="table-wrapper">
            
            <div class="portlet light bordered portlet-no-padding">
                <div class="portlet-title">
                    <div class="caption" style="width: 100%">
                        <div class="wrapper-action">
                            <div class="container">
                            	<div class="row">
                            		<div class="col-md-4">
                            			<input type="date" onchange="seatRender()" name="date">
                            		</div>
                            		<div class="col-md-4">
                            			<input type="time" onchange="seatRender()" name="timeIn">
                            		</div>
                            		<div class="col-md-4">
                            			<input type="time" onchange="seatRender()" name="timeOut">
                            		</div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive  table-has-actions   table-has-filter ">
                        <div id="table-users_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" style="width: 100%;">
                            
                            <!-- test -->
                            <div class="seat-plan-section padding-bottom padding-top">
						        <div class="container">
						            <div class="screen-area">
						                <h4 class="screen" style="color: #000;">CỬA VÀO LAB 1</h4>
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
						                        <span>SỐ LƯỢNG GHẾ</span>
						                        <h3 class="title seat-name"></h3>
						                    </div>
						                    <div class="book-item">
						                        <span>ĐÃ ĐẶT</span>
						                        <h3 class="title seat-count"></h3>
						                    </div>
						                    <div class="book-item">
						                        <a href="#" class="custom-button seat-booking-button">CÒN TRỐNG</a>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						    <!-- ==========Movie-Section========== -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-confirm-delete" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title"><i class="til_img"></i><strong>Xác nhận xóa</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body with-padding">
                        <div>Bạn có chắc chắn muốn xóa bản ghi này?</div>
                    </div>

                    <div class="modal-footer">
                        <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                        <button class="float-right btn btn-danger delete-crud-entry">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
        <div class="modal fade delete-many-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title"><i class="til_img"></i><strong>Xác nhận xóa</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body with-padding">
                        <div>Do you really want to delete selected record(s)?</div>
                    </div>

                    <div class="modal-footer">
                        <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                        <button class="float-right btn btn-danger delete-many-entry-button">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
        <div class="modal fade modal-bulk-change-items" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title"><i class="til_img"></i><strong>Bulk changes</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body with-padding">
                        <div><div class="modal-bulk-change-content"></div></div>
                    </div>

                    <div class="modal-footer">
                        <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                        <button class="float-right btn btn-info confirm-bulk-change-button" data-load-url="">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
    </div>
</div>
@endsection
@section('js')
    <script src="{{asset('js/admin/respond.min.js')}}"></script>
    <script src="{{asset('js/admin/excanvas.min.js')}}"></script>
    <script src="{{asset('js/admin/ie8.fix.min.js')}}"></script>
    <script src="{{asset('js/admin/modernizr.min.js')}}"></script>
    <script src="{{asset('js/admin/select2.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/admin/core.js')}}"></script>
    <script src="{{asset('js/admin/toastr.min.js')}}"></script>
    <script src="{{asset('js/admin/pace.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('js/admin/jquery.stickytableheaders.js')}}"></script>
    <script src="{{asset('js/admin/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/spectrum.js')}}"></script>
    <script src="{{asset('js/admin/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-editable.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/admin/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap3-typeahead.min.js')}}"></script>
    <script src="{{asset('js/admin/table.js')}}"></script>
    <script src="{{asset('js/admin/filter.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // $(".ajaxload").hide();
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
            if(timeIn==''||timeOut==''){

            }
            else{
                
                $(".ajaxload").show();
                // Swal.showLoading()
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
@endsection