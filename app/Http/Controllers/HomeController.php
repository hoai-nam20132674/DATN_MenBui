<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lab;
use App\User;
use App\Registration;
use App\Http\Requests\addLabRequest;
use App\Http\Requests\addUserRequest;
use Hash;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('admin.index');
    }

    // User custom
    public function users(Request $request){
        $users = User::select()->paginate(15);
        return view('admin.users',['users'=>$users,'request'=>$request]);
    }
    public function addUser(){
        return view('admin.addUser');
    }
    public function postAddUser(addUserRequest $request){
        $item = new User;
        $item -> add($request);
        if($item-> add($request)){
            return redirect()->route('users')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
        }
        else{
            return redirect()->route('users')->with(['flash_level'=>'danger','flash_message'=>'Thêm không thành công']);
        }

    }
    public function editUser($id){
        $user = User::where('id',$id)->get()->first();
        return view('admin.editUser',['user'=>$user]);
    }
    public function postEditUser(editUserRequest $request, $id){
        
        $item = new User;
        $item->edit($request,$id);
        if($item-> edit($request,$id)){
            return redirect()->route('editUser',$id)->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
        }
        else{
            return redirect()->route('editUser',$id)->with(['flash_level'=>'danger','flash_message'=>'Sửa không thành công']);
        }
    }
    public function postEditPassword(editPasswordRequest $request, $id){
        $item = new User;
        $item->editPassword($request,$id);
        if($item-> editPassword($request,$id)){
            return redirect()->route('editUser',$id)->with(['flash_level'=>'success','flash_message'=>'Sửa mật khẩu thành công']);
        }
        else{
            return redirect()->route('editUser',$id)->with(['flash_level'=>'danger','flash_message'=>'Sửa mật khẩu không thành công']);
        }

    }
    // End User Custom
    // user booking
    public function userBooking($id, Request $request){
        $regis = new Registration;
        $regis ->user_id = $id;
        $regis ->seat_id = $request->seatId;
        $regis ->time_in = new Carbon($request->timeIn);
        $regis ->time_out = new Carbon($request->timeOut);
        $regis ->save();
        echo 1;

    }
    // end user booking


    
    // public function index()
    // {
    //     return view('labs.listLab');
    // }

    //Lab

    // public function listLab(){
    //     $labs = Lab::select()->get();
    //     return view('labs.listLab',['labs'=>$labs]);
    // }

    // public function addLab(){
    //     $labs = Lab::select()->get();
    //     return view('labs.addLab',['labs'=>$labs]);
    // }

    // public function postAddLab(addLabRequest $request){
    //     $lab = new Lab;
    //     $lab->name = $request->name;
    //     $lab->type = $request->type;
    //     $lab->seat = $request->seat;
    //     $lab->save();
    //     return redirect()->route('listLab')->with(['flash_level'=>'success','flash_message'=>'Thêm phòng Lab thành công']);
    // }

    //User

    // public function listUser(){
    //     $users = User::select()->get();
    //     return view('users.listUser',['users'=>$users]);
    // }

    // public function addUser(){
    //     $users = User::select()->get();
    //     return view('users.addUser',['users'=>$users]);
    // }

    // public function postAddUser(addUserRequest $request){
    //     $user = new User;
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->role = $request->role;
    //     $user->save();
    //     return redirect()->route('listUser')->with(['flash_level'=>'success','flash_message'=>'Tạo tài khoản thành công']);
    // }
}
