<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Seat;
use App\Lab;
use App\Registration;
use DateTime;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return redirect()->route('booking',1);
    }
    public function booking($id, Request $request){
        $timeIn = new Carbon($request->timeIn);
        $timeOut = new Carbon($request->timeOut);
        $seats = Seat::where('lab_id',$id)->get();
        $labs = Lab::select()->get();
        $la = Lab::where('id',$id)->get()->first();
    	return view('booking', compact('seats','id','timeIn','timeOut','labs','la'));

    }
    public function history($id){
        $labs = Lab::select()->get();
        $regis = Registration::join('seats','registrations.seat_id','seats.id')->where('registrations.user_id',$id)->select('registrations.*','seats.name','seats.lab_id AS lab_id')->orderBy('registrations.time_in','DESC')->get();
        return view('history', compact('regis','id','labs'));
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
