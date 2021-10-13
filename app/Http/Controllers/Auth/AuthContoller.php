<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthContoller extends Controller
{
    public function studentRegisterIndex(){
        return view('crm.auth.student.register');
    }
    public function studentRegisterSave(Request $request){
        $request->validate([
            'name'=>'required|string|regex:/^[a-zA-Z ]{3,16}/i',
            'email'=>'required|unique:users|regex:/(.+)@(.+)\.(.+)/i',
            'phone_no'=>'required|size:10|unique:users',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'sometimes|required_with:password',
        ]);
        $users = new User([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone_no'=>$request->get('phone'),
            'password'=>Hash::make($request->get('password')),
        ]);
        $users->save();
        return redirect()->intended('student/login');
    }
    public function studentLoginIndex(){
        return view('crm.auth.student.login');
    }
    
    public function studentAuthenticate(Request $request){
            // $request->validate([
            //     'email'=>'required|email|string',
            //     'password'=>'required|min:6'
            // ]);
            $validator = $this->rules($request->all());
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();   
            }else{
                $credentials=$request->only('email','password');
                if(Auth::attempt($credentials)==true){
                    if (Auth::user()->created_at >='2021-04-18 12:42:16') {
                        if (Auth::user()->email_verified_at == null) {
                            Auth::logout();
                            return redirect('student/login')->with('error', 'Please Verify Your Email Id to Login');
                        }else if(Auth::user()->activated == '2'){
                            Auth::logout();
                            return redirect('student/login')->with('error', 'You have disabled your Account! please contact whizzcorps Support team.');
                        }
                    }
                   
                    
                    $u_agent = $request->header('User-Agent');
                    $operating_system = 'Unknown Operating System';
                    //Get the operating_system name
                    if (preg_match('/linux/i', $u_agent)) {
                        $operating_system = 'Linux';
                    } elseif (preg_match('/macintosh|mac os x|mac_powerpc/i', $u_agent)) {
                        $operating_system = 'Mac';
                    } elseif (preg_match('/windows|win32|win98|win95|win16/i', $u_agent)) {
                        $operating_system = 'Windows';
                    } elseif (preg_match('/ubuntu/i', $u_agent)) {
                        $operating_system = 'Ubuntu';
                    } elseif (preg_match('/iphone/i', $u_agent)) {
                        $operating_system = 'IPhone';
                    } elseif (preg_match('/ipod/i', $u_agent)) {
                        $operating_system = 'IPod';
                    } elseif (preg_match('/ipad/i', $u_agent)) {
                        $operating_system = 'IPad';
                    } elseif (preg_match('/android/i', $u_agent)) {
                        $operating_system = 'Android';
                    } elseif (preg_match('/blackberry/i', $u_agent)) {
                        $operating_system = 'Blackberry';
                    } elseif (preg_match('/webos/i', $u_agent)) {
                        $operating_system = 'Mobile';
                    }
                    // $UserDevices = new UserDevices([
                    //     'user_id'=>Auth::user()->id,
                    //     'os_name'=>$operating_system,
                    //     'loggedin_at'=>Carbon::now('Asia/Kolkata'),
                    //     'created_at'=>Carbon::now('Asia/Kolkata'),
                    //     'updated_at'=>Carbon::now('Asia/Kolkata')
                    // ]);
                    $UserDevices->save();        
                   // ActivityLog::InsertToLogs('(Student User) with id '.Auth::user()->id.' Logged in using password');        
                    return redirect()->intended('student/dashboard/user');
                }else{
                    return redirect('student/login')->with('error', 'Ops! Wrong Password/Username');
                    //return redirect()->back()->withErrors('error', 'Ops! Sorry You have entered the Wrong credentials')->withInput();
                }
            }
        }
        
}
