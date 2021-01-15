@php
    $count = count($seats);
@endphp
@for($i=0;$i<$count/14;$i++)
<li class="seat-line" lastPage="{{$i+1}}">
    
    <ul class="seat--area">
        <li class="front-seat">
            <ul>
                @for($j=0;$j<4;$j++)

                @php
                    if($i*14+$j >= $count){
                        break;
                    }
                    else{
                        $checkSeatFree=App\Http\Controllers\Controller::checkSeatFree($seats[$i*14+$j]->id,$timeIn,$timeOut);
                    }
                @endphp
                @if($checkSeatFree ==0)
                
                    <li class="single-seat" check="0" seat-free="{{$checkSeatFree}}" seat_id="{{$seats[$i*14+$j]->id}}" title="Chỗ ngồi đã có được đặt">
                        <img src="{{asset('images/seat01.png')}}" alt="seat">
                        <span class="sit-num">{{$seats[$i*14+$j]->name}}</span>
                    </li>
                @else
                    <li class="single-seat seat-free" check="0" seat-free="{{$checkSeatFree}}" seat_id="{{$seats[$i*14+$j]->id}}" title="Chỗ ngồi trống">
                        <img src="{{asset('images/seat01-free.png')}}" alt="seat">
                        <span class="sit-num">{{$seats[$i*14+$j]->name}}</span>
                    </li>
                @endif
                @endfor
            </ul>
        </li>
        <li class="front-seat">
            <ul>
                @for($j=4;$j<10;$j++)
                @php
                    if($i*14+$j >= $count){
                        break;
                    }
                    else{
                        $checkSeatFree=App\Http\Controllers\Controller::checkSeatFree($seats[$i*14+$j]->id,$timeIn,$timeOut);
                    }
                @endphp
                @if($checkSeatFree ==0)
                
                    <li class="single-seat" check="0" seat-free="{{$checkSeatFree}}" seat_id="{{$seats[$i*14+$j]->id}}" title="Chỗ ngồi đã có được đặt">
                        <img src="{{asset('images/seat01.png')}}" alt="seat">
                        <span class="sit-num">{{$seats[$i*14+$j]->name}}</span>
                    </li>
                @else
                    <li class="single-seat seat-free" check="0" seat-free="{{$checkSeatFree}}" seat_id="{{$seats[$i*14+$j]->id}}" title="Chỗ ngồi trống">
                        <img src="{{asset('images/seat01-free.png')}}" alt="seat">
                        <span class="sit-num">{{$seats[$i*14+$j]->name}}</span>
                    </li>
                @endif
                @endfor
            </ul>
        </li>
        <li class="front-seat">
            <ul>
                @for($j=10;$j<14;$j++)
                @php
                    if($i*14+$j >= $count){
                        break;
                    }
                    else{
                        $checkSeatFree=App\Http\Controllers\Controller::checkSeatFree($seats[$i*14+$j]->id,$timeIn,$timeOut);
                    }
                @endphp
                @if($checkSeatFree ==0)
                
                    <li class="single-seat" check="0" seat-free="{{$checkSeatFree}}" seat_id="{{$seats[$i*14+$j]->id}}" title="Chỗ ngồi đã có được đặt">
                        <img src="{{asset('images/seat01.png')}}" alt="seat">
                        <span class="sit-num">{{$seats[$i*14+$j]->name}}</span>
                    </li>
                @else
                    <li class="single-seat seat-free" check="0" seat-free="{{$checkSeatFree}}" seat_id="{{$seats[$i*14+$j]->id}}" title="Chỗ ngồi trống">
                        <img src="{{asset('images/seat01-free.png')}}" alt="seat">
                        <span class="sit-num">{{$seats[$i*14+$j]->name}}</span>
                    </li>
                @endif
                @endfor
            </ul>
        </li>
    </ul>
    
</li>

@endfor
<script src="{{asset('js/booking/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript">
    $(".seat-line").each(function(){
        var lastpage = $(this).attr('lastpage');
        // console.log(lastpage);
        if(lastpage%2 == 1){
            $(this).children().children('.front-seat').addClass('table-seat-0');
        }
        else{
            $(this).children().children('.front-seat').addClass('table-seat-1');
        }
    });
</script>