<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
session_start();

class DangkyController extends Controller
{
    public function add_user(Request $request){
        $data = array();
        $data['tentk'] = $request->tentk;
        $data['matkhau'] = md5($request->matkhau);
        $data_hv = array();
        $data_hv['tenhv']= $request->txtTenhv;
        $data_hv['diachi'] = $request->txtDiachi;
        $data_hv['email'] = $request->email;
        $data_hv['sdt'] = $request->txtSDT;
        $name =$request->tentk;
        $all_user = DB::table('tk_hocvien')->where('tentk',$name)->first();
        // echo '<pre>';
        // print_r($all_user) ;
        // echo '</pre>';
        if(!empty($all_user)){
            Session::put('thongbao','Tên tài khoản tồn tại, vui lòng thử lại');
            Session::put('tentk',$request->tentk);
            Session::put('matkhau',$request->matkhau);
            Session::put('email',$request->email);
            $all_user = null;
            return redirect('/dangnhap');
        }
        else{
            DB::table('tk_hocvien')->insert($data);
            $matk = DB::getPdo()->lastInsertId();
           $data_hv['matk'] = $matk;
            DB::table('hocvien')->insert($data_hv);
            Session::put('signupdone','Đăng ký thành công!');
            return redirect('/dangnhap');
        }
    }
    public function guimail(){
        $to_name = "Trung tam SHTP";
        $to_email = "vietvuit98@gmail.com";
        $data = array("name"=>"Trung tâm SHTP","body"=>"Mật khẩu mới của bạn là:123");
        Mail::send('bodymail', $data, function ($message) use($to_name,$to_email){
            $message->to($to_email)->subject('Mail mật khẩu ');
            $message->from($to_email,$to_name);
        });
        return redirect('/dangnhap');
    }
    public function recover_pass(Request $request){
        $data = $request->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Lấy lại mật khẩu".' '.$now;
        $taikhoan = ModelsTaikhoan::where('email','=',$data['email'])->get();
        $tentk = ModelsTaikhoan::where('tentk','=',$data['tentk'])->first();
        foreach($taikhoan as $key => $value){
            $matk = $value->matk;
        }
        if($taikhoan){
            $count_taikhoan = $taikhoan->count();
            if($count_taikhoan==0){
                return redirect()->back()->with('error','Thông tin nhập chưa đúng!');
            }
            else{
                $token_random = Str::random();
                $taikhoan = ModelsTaikhoan::find($matk);
                if($tentk == null){
                    return redirect()->back()->with('thongbao','Thông tin nhập chưa đúng!');
                }
                $taikhoan ->tk_token = $token_random;
                $taikhoan->save();
                $to_email = $data['email'];
                $link_reset_pass = url('/updatemk?email='.$to_email.'&token='.$token_random);
                $data = array("name"=>$title_mail,"body"=>$link_reset_pass,'email'=>$data['email']);
                Mail::send('forget_pass_notify', ['data'=>$data], function ($message) use ($title_mail,$data){
                    $message->to($data['email'])->subject($title_mail);
                    $message->from($data['email'],$title_mail);
                });
                return redirect()->back()->with('message','Gửi mail thành công, vui lòng vào email để reset password');
            }
        }
    }
    public function quenmk(){
    return view('/quen_mk');
}
}
