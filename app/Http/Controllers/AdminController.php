<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function main()
    {
        return view('admin.app');
    }
    public function login()
    {
        return view('admin.login');
    }

    public function create_blogs()
    {
        return view('admin.blogs.create_blogs');
    }
    public function check_login(Request $request)
    {
        
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
       
        $user = User::where('email', $validated['email'])->first();
        // if ($user) {
        //     if (Hash::check($validated['password'], $user->password)) {
        //         Auth::login($user);
        //         return redirect()->route('admin.index');
        //     } else {
        //         return back()->withErrors(['password' => 'Mật khẩu không chính xác.']);
        //     }
        // } else {
        //     return back()->withErrors(['email' => 'Email không tồn tại.']);
        // }
        if ($user) {
            
                Auth::login($user);
                return redirect()->route('admin.index');
        
        } else {
            return back()->withErrors(['email' => 'Email không tồn tại.']);
        }
    }
    public function register()
    {
        return view('admin.register');
    }
    public function check_register()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
    
        $data = request()->all('email', 'name');
        $data['password'] = Hash::make(request('password')); 
        User::create($data); 
        return redirect()->route('admin.login');
    }
    public function logout()
{
    Auth::logout(); 
    return redirect()->route('admin.login'); 
}
}
