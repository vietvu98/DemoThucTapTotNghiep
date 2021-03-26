<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HocvienController extends Controller
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
    public function all_hocvien()
    {
        $this->AuthLogin();
        $all_hv = DB::table('hocvien')->join('dangky','dangky.mahv','=','hocvien.mahv')->join('khoahoc','khoahoc.makh','=','dangky.makh')->orderBy('hocvien.mahv','DESC')->get();
        $manage_hv = view('adminpages.all_hocvien')->with('all_hv',$all_hv);
        return view('welcome')->with('adminpages.all_hocvien',$manage_hv);
    }
}
