<?php

namespace App\Http\Controllers;
use App\nowost;
use Illuminate\Http\Request;

class nowostController extends Controller
{
  public function show()
  {
    return nowost::all();
  }

  // public function search2($title)
  // {
  //   return nowost::where('title', 'like', '%' .$title. '%')->get();
  // }
}
