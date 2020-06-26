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
  return view('articles', ['article'=> (new ArticleController())->show()]);
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
  return view('news', ['now'=> (new nowostController())->show()]);
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

  public function getArticles(Request $request)
  {
  return (new ArticleController())->show();
  }



  public function search(Request $request)
  {

  $articles = (new ArticleController())->search($request->search_field);
  if (is_null($articles)){
    return 'Не найдено';
  }
    return view('articles', ['article'=> $articles]);
  }



//поиск в новостях
  // public function search2(Request $request)
  // {
  //
  // $nowosts = (new nowostController())->search2($request->search_field);
  // if (is_null($nowosts)){
  //   return 'Не найдено';
  // }
  //   return view('news', ['now'=> $nowosts]);
  // }

}
