<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    public function index()
    {
        $items = DB::table('people')->get();
        return view('hello.hello', ['items' => $items]);
    }
}
