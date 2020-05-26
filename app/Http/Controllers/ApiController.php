<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction(Request $request)
  {
  return view('index');
  }

  public function geoAction(Request $request)
  {
  return view('geo');
  }

  public function aboutAction(Request $request)
  {
  return view('about');
  }

  public function articlesAction(Request $request)
  {
  return view('articles');
  }

  public function confirmAction(Request $request)
  {
  return view('confirm');
  }

  public function loginAction(Request $request)
  {
  return view('login');
  }

  public function newsAction(Request $request)
  {
  return view('news');
  }

  public function questionAction(Request $request)
  {
  return view('question');
  }

  public function regAction(Request $request)
  {
  return view('reg');
  }

  public function welcomeAction(Request $request)
  {
  return view('welcome');
  }

}
