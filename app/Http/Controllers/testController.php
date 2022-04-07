<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    


public function index(){
$users = DB::select('select * from `railway`.`test`');
return view('test',['users'=>$users]);
}
}
