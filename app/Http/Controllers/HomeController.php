<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
$groups = DB::table('groups')->where('locale', '=', 'en')->get();

//        $groups = Category::where([
//            ['locale', '=', 'en'],
//        ])->get();




return view('pages.home', ['groups' => $groups]);
    }

}
