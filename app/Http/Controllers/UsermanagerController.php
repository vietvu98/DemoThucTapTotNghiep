<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
use Spatie\Searchable\ModelSearchAspect;

class UsermanagerController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('matk_user');
        if($admin_id){
            return redirect('/user-manager');
        }
        else{
          return redirect('/gt')->send();
        }
    }

    public function index()
    {
        $this->AuthLogin();
        return view('welcome_user_manager');
    }
    public function update_infor()
    {
        $this->AuthLogin();
        $matk_user = Session::get('matk_user');
        $all_hv = DB::table('hocvien')->where('matk',$matk_user)->get();
        $manager_hv = view('user_manager.edit_infor_user')->with('all_hv',$all_hv);
        return view('welcome_user_manager')->with('user_manager.edit_infor_user',$manager_hv);
    }
    public function save_infor(Request $request)
    {
        $matk_user = Session::get('matk_user');
        $data_hv = array();
        $data_hv['tenhv']= $request->txtTenhv;
        $data_hv['diachi'] = $request->txtDiachi;
        $data_hv['email'] = $request->email;
        $data_hv['sdt'] = $request->txtSDT;
        $data_hv['matk'] = $matk_user;
        DB::table('hocvien')->where('matk',$matk_user)->update($data_hv);
        return redirect('/user-manager');
    }
    public function check_course()
    {
        $matk_user = Session::get('matk_user');
        $data_hv = DB::table('hocvien')->where('matk',$matk_user)->get();
        $mahv = $data_hv[0]->mahv;
        $data_dk = DB::table('dangky')->where('mahv',$mahv)->join('khoahoc','dangky.makh','=','khoahoc.makh')->get();
        $manager = view('user_manager.all_course_user')->with('all_dk',$data_dk);
        return view('welcome_user_manager')->with('user_manager.all_course_user',$manager);
    }
    public function change_password_user()
    {
        $this->AuthLogin();
        return view('user_manager.change_password_user');
    }
    public function update_password_user(Request $request)
    {
        $matk = Session::get('matk_user');
        $data_tk = DB::table('tk_hocvien')->where('matk',$matk)->get();
        $matkhaucu = $data_tk[0]->matkhau;
        $mk = MD5($request->txtMatkhaucu);
        if($mk == $matkhaucu){
            $tentk = $data_tk[0]->tentk;
            $data = array();
            $data['tentk'] = $tentk;
            $data['matkhau'] = MD5($request->txtMatkhaumoi);
            DB::table('tk_hocvien')->where('matk',$matk)->update($data);
            Session::put('message','Đỏi mật khẩu thành công');
            return redirect('/user-manager');
        }
        else{
            Session::put('message',"Mật khẩu cũ sai !");
            return redirect('/change-password-user');
        }


    }
}
