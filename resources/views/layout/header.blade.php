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
                            @foreach($labs as $lab)
                            <li>
                                <a href="{{URL::route('booking',$lab->id)}}">{{$lab->name}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </li>
                    @if(Auth::user())
                    <li>
                        <a href="{{URL::route('history',Auth::user()->id)}}">Lịch sử</a>
                        
                    </li>
                    @else
                    @endif
                    
                    
                    <li>
                        <a href="#">Tin tức</a>
                        
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                    @if(Auth::user())
                        <li class="header-button pr-0" id="user" user-mssv="{{Auth::user()->mssv}}" user-id="{{Auth::user()->id}}">
                            <a href="#">{{Auth::user()->name}}</a>
                        </li>
                    @else
                        <li class="header-button pr-0" id="user" user-id="0">
                            <a href="{{URL::route('login')}}">Đăng nhập</a>
                        </li>
                    @endif
                    
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>