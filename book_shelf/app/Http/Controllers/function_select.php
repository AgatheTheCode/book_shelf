<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class function_select extends Controller
{
    //

    public function select_all_books()
    {
        $books_all = DB::select('select * from books');
        return view('welcome', ['books' => $books_all]);

        //
    }
}
