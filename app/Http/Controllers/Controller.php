<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Seat;
use App\Registration;
use DateTime;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function booking($id, Request $request){
        $timeIn = new Carbon($request->timeIn);
        $timeOut = new Carbon($request->timeOut);
    	$seats = Seat::where('lab_id',$id)->get();
    	return view('booking', compact('seats','id','timeIn','timeOut'));
    	// dd($seats[15]);

    }
    public function seatRender($id, Request $request){
    	$timeIn = new Carbon($request->timeIn);
    	$timeOut = new Carbon($request->timeOut);
    	$seats = Seat::where('lab_id',$id)->get();
    	return view('render.seatRender', compact('seats','timeIn','timeOut'));
    	
    }
    public static function checkSeatFree($id, $timeIn, $timeOut){
    	$registration = Registration::where('seat_id',$id)->get();
    	if(count($registration) == 0){
    		return 1;
    	}
    	else{
    		$i=1;
    		foreach($registration as $rg){
    			
    			if($timeIn>=$rg->time_out || $timeOut<=$rg->time_in){
    				
    			}
    			else{
    				$i=0;
    				break;
    			}

    		}
    		return $i;
    	}

    }
}
