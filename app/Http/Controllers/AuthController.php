<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

// Авторизация

    public function auth(Request $request)
    {


      $user = User::where([['login',  $request->login], ['password', $request->password]])->first();
      if (is_null($user)){
        return "неверный логин или пароль";
      }

      Auth::login($user);
      return redirect('/index');

    }


// выход

      public function logout(Request $request)
      {

          Auth::logout();
          return back()->withinput();
      }

// регистрация
      public function reg(Request $request)
      {

//проверка почты
          // $user =  User::where('email_address',$request ->email_address)->get();
          // if (!is_null($user)){
          //   return "такая почта уже существует";
          // }



    $user = User::create([
          'login' => $request ->login,
            'email_address'=> $request ->email_address,
          'password'=> md5($request ->password),
          'status'=> 1,
        ]);
        if (is_null($user)){
          return "ошибка";
        }
        Auth::login($user);
        return "Успешная авторизация";
      }

}
