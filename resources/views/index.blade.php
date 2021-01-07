@extends('layout.layout')

@section('content')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">TRANG CHỦ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login')}}">GIẢNG VIÊN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login')}}">SINH VIÊN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('booking',1)}}">ĐẶT CHỖ</a>
        </li>    
      </ul>
    </div>   
  </div>
</nav>
<div class="main-banner">
  <img class="gwt-Image" src="https://storage.googleapis.com/hust-files/images/hust-banner-01_1.2m.png" style="width: 100%;">
</div>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Dịch vụ dành cho giảng viên</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>Dịch vụ dành cho sinh viên</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <h2>Dịch vụ dành cho doanh nghiệp</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>
<div class="container-fluid" style="background-color: #ddd; margin-bottom: 100px">
    <div class="container" style="margin-bottom: 100px">
        <h2 class="page-header" style="font-size:25px;">Tin tức</h2>
        <div id="tabs" class="ui-tabs ui-corner-all ui-widget ui-widget-content">
            <ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
                <li class="col-xs-12 col-md-2 ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="text-center ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">TỔNG HỢP</a></li>
                <li class="col-xs-12 col-md-2 ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2">ĐÀO TẠO ĐẠI HỌC</a></li>
                <li class="col-xs-12 col-md-2 ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#tabs-3" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3">ĐÀO TẠO SAU ĐẠI HỌC</a></li>
                <li class="col-xs-12 col-md-2 ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab" tabindex="-1" aria-controls="tabs-4" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false"><a href="#tabs-4" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4">CÔNG TÁC SINH VIÊN</a></li>
            </ul>
            <div id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false" style="display: block;">
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36982">
                            <h3><b>[ĐTSĐH]</b> Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh Trịnh Xuân Yến</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">7/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36981">
                            <h3><b>[ĐTSĐH]</b> Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh Lê Tùng Anh</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">6/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36897">
                            <h3><b>[ĐTĐH]</b> Lịch thi giữa kỳ và cuối kỳ 20201</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">6/1/2021</i>
                        <p>Sinh viên chú ý theo dõi lịch thi 20201 (cập nhật ngày 06/01/2021)</p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36980">
                            <h3><b>[ĐTSĐH]</b> Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh  Lương Minh Tuấn</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36979">
                            <h3><b>[ĐTSĐH]</b> Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh  Hoàng Văn Tuấn</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="/?page=2&amp;tabID=1">2</a></li><li><a href="/?page=3&amp;tabID=1">3</a></li><li><a href="/?page=4&amp;tabID=1">4</a></li><li><a href="/?page=5&amp;tabID=1">5</a></li><li><a href="/?page=6&amp;tabID=1">6</a></li><li><a href="/?page=7&amp;tabID=1">7</a></li><li><a href="/?page=8&amp;tabID=1">8</a></li><li><a href="/?page=9&amp;tabID=1">9</a></li><li><a href="/?page=10&amp;tabID=1">10</a></li><li class="disabled PagedList-ellipses"><a>…</a></li><li class="PagedList-skipToNext"><a href="/?page=2&amp;tabID=1" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="/?page=371&amp;tabID=1">»»</a></li></ul></div>
            </div>
            <div id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36897">
                            <h3>Lịch thi giữa kỳ và cuối kỳ 20201</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">6/1/2021</i>
                        <p>Sinh viên chú ý theo dõi lịch thi 20201 (cập nhật ngày 06/01/2021)</p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36977">
                            <h3>Một số lưu ý dành cho K62 khi đăng ký học phần Đồ án tốt nghiệp kỳ 20202</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p>Sinh viên K62 lưu ý thông tin trước khi đăng ký học phần Đồ án tốt nghiệp kỳ 20202.</p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=96">
                            <h3>Biểu mẫu xin nghỉ, xin thôi học, xin tiếp nhận trở lại, chuyển trường</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">28/12/2020</i>
                        <p>Biểu mẫu xin nghỉ học dài hạn, xin thôi học rút hồ sơ, xin tiếp nhận trở lại, xin chuyển ngành học</p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36959">
                            <h3>Kết quả xét tốt nghiệp đợt 20201-A và đăng ký bổ sung</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">17/12/2020</i>
                        <p>SInh viên đã đăng ký xét tốt nghiệp kỳ 20201-A và xem kết quả.</p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36955">
                            <h3>Kế hoạch thu học phí kỳ 20201 - đợt 2</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">14/12/2020</i>
                        <p>Sinh viên chú ý thời gian thu học phí đợt 2 kỳ 20201 (cập nhật ngày 14/12)</p>
                    </div>
                <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="/?page=2&amp;tabID=2">2</a></li><li><a href="/?page=3&amp;tabID=2">3</a></li><li><a href="/?page=4&amp;tabID=2">4</a></li><li><a href="/?page=5&amp;tabID=2">5</a></li><li><a href="/?page=6&amp;tabID=2">6</a></li><li><a href="/?page=7&amp;tabID=2">7</a></li><li><a href="/?page=8&amp;tabID=2">8</a></li><li><a href="/?page=9&amp;tabID=2">9</a></li><li><a href="/?page=10&amp;tabID=2">10</a></li><li class="disabled PagedList-ellipses"><a>…</a></li><li class="PagedList-skipToNext"><a href="/?page=2&amp;tabID=2" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="/?page=62&amp;tabID=2">»»</a></li></ul></div>
            </div>
            <div id="tabs-3" aria-labelledby="ui-id-3" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36982">
                            <h3>Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh Trịnh Xuân Yến</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">7/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36981">
                            <h3>Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh Lê Tùng Anh</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">6/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36980">
                            <h3>Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh  Lương Minh Tuấn</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36979">
                            <h3>Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh  Hoàng Văn Tuấn</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36978">
                            <h3>Bảo vệ luận án Tiến sĩ  cấp Trường cho nghiên cứu sinh  Nguyễn Ngọc Lân</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">5/1/2021</i>
                        <p></p>
                    </div>
                <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="/?page=2&amp;tabID=3">2</a></li><li><a href="/?page=3&amp;tabID=3">3</a></li><li><a href="/?page=4&amp;tabID=3">4</a></li><li><a href="/?page=5&amp;tabID=3">5</a></li><li><a href="/?page=6&amp;tabID=3">6</a></li><li><a href="/?page=7&amp;tabID=3">7</a></li><li><a href="/?page=8&amp;tabID=3">8</a></li><li><a href="/?page=9&amp;tabID=3">9</a></li><li><a href="/?page=10&amp;tabID=3">10</a></li><li class="disabled PagedList-ellipses"><a>…</a></li><li class="PagedList-skipToNext"><a href="/?page=2&amp;tabID=3" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="/?page=108&amp;tabID=3">»»</a></li></ul></div>
            </div>
            <div id="tabs-4" aria-labelledby="ui-id-4" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;">
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36976">
                            <h3>Thông báo mua Bảo hiểm y tế (BHYT) đợt 2 năm 2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">4/1/2021</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36972">
                            <h3>Danh sách sinh viên nhận học bổng tài trợ của Ngân hàng BIDV chi nhánh Hà Thành năm học 2020-2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">30/12/2020</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36968">
                            <h3>KẾT QUẢ XÉT CẤP HỌC BỔNG KKHT HỌC KỲ I NĂM HỌC 2020-2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">30/12/2020</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36948">
                            <h3>Danh sách sinh viên nhận học bổng tài trợ của Công ty Nhật Minh năm học 2020-2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">9/12/2020</i>
                        <p></p>
                    </div>
                    <div class="assetContent">
                        <a href="/DisplayWeb/DisplayBaiViet?baiviet=36947">
                            <h3>Danh sách sinh viên nhận học bổng tài trợ của Quỹ Posco TJ Park Foundation năm học 2020-2021</h3>
                        </a>
                        <i style="color: #bbb; font-size: 13px;">9/12/2020</i>
                        <p></p>
                    </div>
                <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="/?page=2&amp;tabID=4">2</a></li><li><a href="/?page=3&amp;tabID=4">3</a></li><li><a href="/?page=4&amp;tabID=4">4</a></li><li><a href="/?page=5&amp;tabID=4">5</a></li><li><a href="/?page=6&amp;tabID=4">6</a></li><li><a href="/?page=7&amp;tabID=4">7</a></li><li><a href="/?page=8&amp;tabID=4">8</a></li><li><a href="/?page=9&amp;tabID=4">9</a></li><li><a href="/?page=10&amp;tabID=4">10</a></li><li class="disabled PagedList-ellipses"><a>…</a></li><li class="PagedList-skipToNext"><a href="/?page=2&amp;tabID=4" rel="next">»</a></li><li class="PagedList-skipToLast"><a href="/?page=202&amp;tabID=4">»»</a></li></ul></div>
            </div>
            
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
          <img src="../Images/new-footer.png" style="max-width:100%;bottom:0;">
        </center>
        </div>
      </div>
        </div>
    </footer>

    <script src="/bundles/jquery?v=bh2_I_H4Zkc_dufGmH-uBxhlaJbkqICTOJW2XqQgs5s1"></script>

    


</div>
@endsection()
