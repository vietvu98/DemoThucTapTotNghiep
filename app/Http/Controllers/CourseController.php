<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CourseController extends Controller
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
   public function index_admin()
   {
       $this->AuthLogin();
       return view('welcome');
   }


    public function loginadmin()
    {

        return view('adminpages.loginadmin');
    }
    public function Login(Request $request)
    {
        $tentk = $request->txtTenTK;
        $matkhau = MD5($request->txtMK);
        $result = DB::table('tk_quanly')->where('tentk',$tentk)->where('matkhau',$matkhau)->first();
        if($result){
            Session::put('admin_id',$result->matk);
            Session::put('tentk',$tentk);
            return redirect('/admin');
        }
        else {
            Session::put('message','Sai thông tin tài khoản. Nhập lại!');
            return redirect('/loginadmin');
        }
    }
    public function change_password()
    {
        $this->AuthLogin();
        return view('adminpages.changepassword');
    }
    public function update_password(Request $request)
    {
        $this->AuthLogin();
        $matk = Session::get('admin_id');
        $data_tk = DB::table('tk_quanly')->where('matk',$matk)->get();
        $matkhaucu = $data_tk[0]->matkhau;
        $mk = MD5($request->txtMatkhaucu);
        if($mk == $matkhaucu){
            $tentk = $data_tk[0]->tentk;
            $data = array();
            $data['tentk'] = $tentk;
            $data['matkhau'] = MD5($request->txtMatkhaumoi);
            DB::table('tk_quanly')->where('matk',$matk)->update($data);
            Session::put('message','Đỏi mật khẩu thành công');
            return redirect('/admin');
        }
        else{
            Session::put('message',"Mật khẩu cũ sai !");
            return redirect('/change-password');
        }


    }
    public function Logout()
    {
        Session::put('admin_id',null);
        Session::put('tentk',null);
        return redirect('/loginadmin');
    }

    public function add_course()
    {
        $this->AuthLogin();
        $data_daotao = DB::table('daotao')->get();
        $manage_daotao = view('adminpages.addcourse')->with('all_daotao',$data_daotao);
        return view('welcome')->with('adminpages.addcourse',$manage_daotao);
    }
    public function save_course(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['tenkh'] = $request->txtTenkhoahoc;
        $data['muctieukh'] = $request->txtMuctieu;
        $data['noidunggiangday'] = $request->txtNoidung;
        $data['soluonghv'] = $request->txtSoluonghv;
        $data['lichkhaigiang'] = $request->dtLichKG;
        $data['Thoiluonghoc']= $request->txtThoiluonghoc;
        $data['hocphi'] = $request->txtHocphi;
        $data['madaotao'] = $request->slDaotao;

        $get_image = $request->file('imgKhoaHoc');
        if($get_image){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('d-m-y--h-i-s');
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $date.'_'.$name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/courseimage',$new_image);
            $data['anhdaidien']=$new_image;

            DB::table('khoahoc')->insert($data);
            Session::put('message',"Đã thêm !");
            return redirect('/all-course');
        }else {
            $data['anhdaidien'] = null;

            DB::table('khoahoc')->insert($data);
            Session::put('message',"Đã thêm !");
            return redirect('/all-course');
        }

    }
    public function edit_course($makh){
        $this->AuthLogin();
        $edit_course = DB::table('khoahoc')->where('makh',$makh)->get();
        $data_daotao = DB::table('daotao')->get();
        return view('adminpages.editcourse')->with('edit_course',$edit_course)->with('all_daotao',$data_daotao);
    }
    public function all_course(){
        $this->AuthLogin();
        $all_course = DB::table('khoahoc')->get();
        $manager_course = view('adminpages.allcourse')->with('all_course',$all_course);
        return view('welcome')->with('adminpages.allcourse',$manager_course);
    }
    public function update_course(Request $request, $makh){
        $this->AuthLogin();
        $data = array();
        $data['tenkh'] = $request->txtTenkhoahoc;
        $data['muctieukh'] = $request->txtMuctieu;
        $data['noidunggiangday'] = $request->txtNoidung;
        $data['soluonghv'] = $request->txtSoluonghv;
        $data['lichkhaigiang'] = $request->dtLichKG;
        $data['Thoiluonghoc']= $request->txtThoiluonghoc;
        $data['hocphi'] = $request->txtHocphi;
        $data['madaotao'] = $request->slDaotao;
        $get_image = $request->file('imgKhoaHoc');
        if($get_image){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('d-m-y--h-i-s');
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $date.'_'.$name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/courseimage',$new_image);
            $data['anhdaidien']= $new_image;
            DB::table('khoahoc')->where('makh',$makh)->update($data);
            Session::put('message',"Đã sửa !");
            return redirect('/all-course');
        }
        else{
            DB::table('khoahoc')->where('makh',$makh)->update($data);
            Session::put('message',"Đã sửa !");
            return redirect('/all-course');
        }
    }
    public function delete_course($makh)
    {
        $this->AuthLogin();
        DB::table('khoahoc')->where('makh',$makh)->delete();
        Session::put('message',"Đã xoá !");
        return redirect('/all-course');

    }
    public function them_daotao()
    {
        $this->AuthLogin();
        return view('adminpages.add_daotao');
    }
    public function save_daotao(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['tendaotao'] = $request->txtTendaotao;
        DB::table('daotao')->insert($data);
        Session::put('message',"Thêm thành công");
        return redirect('/all-daotao');
    }
    public function all_daotao()
    {
        $this->AuthLogin();
        $data = DB::table('daotao')->get();
        $manage_daotao = view('adminpages.all_daotao')->with('all_daotao',$data);
        return view('welcome')->with('adminpages.all_daotao',$manage_daotao);
    }
    public function edit_daotao($madaotao)
    {
        $this->AuthLogin();
        $data = DB::table('daotao')->where('madaotao',$madaotao)->get();
        $manage_daotao = view('adminpages.edit_daotao')->with('all_daotao',$data);
        return view('welcome')->with('adminpages.edit_daotao',$manage_daotao);
    }

    public function update_daotao(Request $request, $madaotao)
    {
        $this->AuthLogin();
        $data = array();
        $data['tendaotao'] = $request->txtTendaotao;
        DB::table('daotao')->where('madaotao',$madaotao)->update($data);
        Session::put('message',"Sửa thành công");
        return redirect('/all-daotao');
    }
    public function delete_daotao($madaotao)
    {
        $this->AuthLogin();
        DB::table('daotao')->where('madaotao',$madaotao)->delete();
        Session::put('message',"Đã xoá !");
        return redirect('/all-daotao');

    }
}
