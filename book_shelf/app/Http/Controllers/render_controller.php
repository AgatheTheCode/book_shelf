<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class render_controller extends select_controller
{
    //
    public function render_all_books(){
        $books_all = select_controller::select_all_books();
        return view('welcome', ['books' => $books_all]);
    }
}
