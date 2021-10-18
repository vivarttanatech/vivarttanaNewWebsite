<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    
    public function studentLoginAuthenticate(Request $request){
        $validator = $this->rules($request->all());
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();   
        }else{
            $credentials=$request->only('email','password');
            if(Auth::attempt($credentials)==true){
                    
                return redirect()->intended('student/dashboard/');
            }else{
                return redirect('student/login')->with('error', 'Ops! Wrong Password/Username');
            }
        }
    }

        public function rules($data){
            $messages = [
                'email.required'        => 'Please enter email ',
                'email.exists'          => 'Email not registered',
                'email.email'           => 'Please enter valid email ',
                "password.required"     => "Password is required",
                "password.min"          => "Password must be at least 6 characters"
            ]; 
        
            $validator = Validator::make($data, [
                'email'             =>'required|email|exists:users',
                'password'      =>'required'
            ], $messages);
        
            return $validator;
        }

        public function trainerLoginIndex(){
            return view('crm.auth.trainer.login');
        }
        
        public function trainerLoginAuthenticate(Request $request){
            $validator = $this->rules($request->all());
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();   
            }else{
                $credentials=$request->only('email','password');
                if(Auth::attempt($credentials)==true){
                        
                    return redirect()->intended('trainer/dashboard/');
                }else{
                    return redirect('trainer/login')->with('error', 'Ops! Wrong Password/Username');
                }
            }
        }

        public function adminLoginIndex(){
            return view('crm.auth.admin.login');
        }
        
        public function adminLoginAuthenticate(Request $request){
            $validator = $this->rules($request->all());
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();   
            }else{
                $credentials=$request->only('email','password');
                if(Auth::attempt($credentials)==true){
                        
                    return redirect()->intended('admin/dashboard/');
                }else{
                    return redirect('admin/login')->with('error', 'Ops! Wrong Password/Username');
                }
            }
        }
        
}
