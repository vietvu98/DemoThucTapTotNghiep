<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

session_start();


class gioithieucontroller extends Controller
{
    
    public function trangchu()
    {
        $data = DB::table('daotao')->get();   
        return view('userpages.trangchu')->with('all_daotao',$data);

    }
    public function gioithieu()
    {
        $data = DB::table('daotao')->get(); 
        return view('userpages.gioithieu')->with('all_daotao',$data);
    }
    public function dangnhap()
    {
       
        return view('userpages.dangnhapuser');
    }

    public function dangnhaptc(Request $request)
    {
        $tentk = $request->tentk;
        $matkhau = md5($request->matkhau);

        $result = DB::table('tk_hocvien')->where('tentk', $tentk)->where('matkhau', $matkhau)->first();

        if ($result) {
            Session::put('tentk_user', $result->tentk);
            Session::put('matk_user', $result->matk);
         
            return redirect('/gt');
           
          
        } else {
            Session::put('message', 'Mật khẩu tài khoản bị sai. Vui lòng nhập lại!');
            return redirect('/dangnhap');
        }
    }
    public function dangxuat()
    {
        Session::put('tentk_user', null);
        Session::put('matk_user', null);
        return redirect('/gt');
    }
}
