<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        #menangkap input
        $input = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ];

        #menginput ke table user
        $user = User::create($input);

        #kasih pesan
        $data = [
            'message'=>'User sukses dibuat',
        ];

        #kembalikan ke data Json
        return response()->json($data, 200);
    }
    public function login(Request $request){
        #menangkap inputan user
        $input = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        #mengambil data user di dalam database
        $user = User::where('email',$input['email'])->first();

        #membandingkan input user dengan data user
        $isLoginSuccesfully = ($input['email'] == $user->email && Hash::check($input['password'],$user->password));

        #jika sudah berhasil login maka membuat token
        if($isLoginSuccesfully){
            #membuat token
            $token = $user->createToken('auth_token');

            $data = [
                'message'=>'Login Sukses',
                'token'=>$token->plainTextToken,
            ];

            return response()->json($data, 200);
        }else{
            $data=[
                'message'=>'Email or Password salah',
            ];
        }
        return response()->json($data,401);
        #lUpj5Vo7ep6G3bPtuNqevYaNsQXWiQyy85MpCyCU
    }
}
