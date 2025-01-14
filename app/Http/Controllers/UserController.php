<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Inertia\Inertia;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    function LoginPage(){
        return Inertia::render('LoginPage');
    }

    function RegistrationPage(){
        return Inertia::render('RegistrationPage');
    }

    function ResetPasswordPage(){
        return Inertia::render('ResetPasswordPage');
    }

    function SendOtpPage(){
        return Inertia::render('SendOtpPage');
    }

    function VerifyOtpPage(){
        return Inertia::render('VerifyOtpPage');
    }

    function ProfilePage(){
        return Inertia::render('ProfilePage');
    }



    //user-registration==================
    function userRegistraion(Request $request){
        try{
            $name=$request->input('name');
            $email=$request->input('email');
            $mobile=$request->input('mobile');
            $password=$request->input('password');

            User::create([
                'name'=>$name,
                'email'=>$email,
                'mobile'=>$mobile,
                'password'=>$password,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'User Registration Successfully'
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'status' => 'faild',
                'message' => 'User Registration Faild'
            ]);
        }


    }

    //User-login=========================
    function userLogin(Request $request){
        $count=User::where('email','=',$request->input('email'))
            ->where('password','=',$request->input('password'))
            ->select('id')->first();

        if($count!==null){
            $token=JWTToken::CreateToken($request->input('email'),$count->id);
            return response()->json([
                'status' => 'Success',
                'message' => 'User Login Successfull',
                'token' => $token,
            ])->cookie('token',$token,time()+60*24*30);
        }
        else{
            return response()->json([
                'status' => 'Faild',
                'message' => 'Unauthorized'
            ]);
        }
    }


    //User-logout======================
    function UserLogout(){
        return redirect('/')->cookie('token','',-1);
    }

    //Sendotp=============
    function SendOtpCode(Request $request){

        $email=$request->input('email');
        $otp=rand(1000,9999);
        $count=USer::where('email','=',$email)->count();

        if($count==1){
            Mail::to($email)->send(new OTPMail($otp));

            USer::where('email','=',$email)->update(['otp'=>$otp]);

            return response()->json([
                'status' => 'Success',
                'message' => "4 Digit {$otp} Code has been send to your email!"
            ]);
        }
        else{
            return response()->json([
                'status' => 'Faild',
                'message' => 'Unauthorized'
            ]);
        }

    }

    //verify-otp================
    function VerifyOtp(Request $request){
        $email=$request->input('email');
        $otp=$request->input('otp');

        $count=USer::where('email','=',$email)
            ->where('otp','=',$otp)->count();

        if($count==1){
            USer::where('email','=',$email)->update(['otp'=>'0']);
            $token=JWTToken::CreateTokenForSetPassword($request->input('email'));

            return response()->json([
                'status' => 'Success',
                'message' => 'OTP Verification Successfull',
                'token' => $token
            ])->cookie('token',$token,60*24*30);

        }
        else{
            return response()->json([
                'status' => 'Faild',
                'message' => 'Unauthorized'
            ]);
        }

    }


    function ResetPassword(Request $request){
        try{
            $email=$request->header('email');
            $password=$request->input('password');
            User::where('email','=',$email)->update(['password'=>$password]);

            return response()->json([
                'status' => 'Success',
                'message' => 'Request Successfull'
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'status' => 'Faild',
                'message' => 'Something Went Wrong'
            ]);
        }
    }


    function UserProfile(Request $request){
        $email=$request->header('email');
        $user=User::where('email','=',$email)->first();

        return response()->json([
            'status' => 'Success',
            'message' => 'Request Successfull',
            'data' => $user
        ]);
    }

    function UpdateProfile(Request $request){
        try{
            $email=$request->header('email');
            $name=$request->input('name');
            $mobile=$request->input('mobile');
            $password=$request->input('password');

            User::where('email','=',$email)->update([
                'name'=>$name,
                'email'=>$email,
                'mobile'=>$mobile,
                'password'=>$password,
            ]);

            return response()->json([
                'status' => 'Success',
                'message' => 'User Update Successfull'
            ]);
        }
        catch(Exception $exception){
            return response()->json([
                'status' => 'Fail',
                'message' => 'Something Went Wrong'
            ]);
        }
    }




}
