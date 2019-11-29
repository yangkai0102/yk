<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('admin/login/login');
    }

    public function loginDo(){
        $post=request()->except('_token');
        $where=[
            ['admin_name','=',$post['admin_name']],
            ['admin_pwd','=',$post['admin_pwd']]
        ];
        $res=Admin::where($where)->first();
        if($res){
            session(['admin'=>$res]);
            return redirect('admin/admin/index');
        }
    }
}
