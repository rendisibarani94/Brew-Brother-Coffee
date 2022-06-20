<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginAdminController extends Controller
{
    use LoginController;
    protected $guard='adminMiddle';
    protected $redirectTo='admin/home';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function guard(){
        return auth()->guard('adminMiddle');
    }

    public function loginForm()
    {
        if(auth()->guard('adminMiddle')->user()){
            return back();
        }
        return view('back.auth.login');
    }
}
