<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

session_start();


class UserController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return redirect('/admin');
        }
        else{
          return redirect('/loginadmin')->send();
        }
    }
    public function them_user()
    {
        $this->AuthLogin();
        return view('adminpages.add_user');
    }
    public function save_user(Request $request)
    {
        $this->AuthLogin();
        $tentkk = $request->txtUser;
        $kiemtra = DB::table('tk_quanly')->where('tentk',$tentkk)->first();
        if($kiemtra){
            Session::put('message',"User này đã tồn tại");
            return redirect('/all-user');
        }
        else {
            $data = array();
            $data['tentk'] = $request->txtUser;
            $data['matkhau'] = $request->txtPassword;
            DB::table('tk_quanly')->insert($data);
            Session::put('message',"Thêm thành công");
            return redirect('/all-user');
        }
        
    }

    public function all_user(Request $request)
    {
        $this->AuthLogin();
        $data_user = DB::table('tk_quanly')->get();
        
        return view('adminpages.all_user')->with('all_user',$data_user);

    }
    public function delete_user($matk)
    {
        $this->AuthLogin();
        DB::table('tk_quanly')->where('matk',$matk)->delete();
        Session::put('message',"Xoá thành công");
        return view('adminpages.all_user');
    }

}
