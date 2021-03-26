<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
 public $timestamps = false;
 protected $fillable = [
          'tentk', 'matkhau','email','tk_token'];
 protected $primaryKey = 'matk';
 protected $table = 'tk_hocvien';
}
