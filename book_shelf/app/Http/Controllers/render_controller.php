<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class render_controller extends select_controller
{
    //
    public function render_all_books(){
        $books_all = select_controller::select_all_books();
        return View('welcome', ['books' => $books_all]);
    }

    public function render_this_book($id){
        // $books_all = select_controller::with('focus_livre')->findOrFail($id);
        // return view('focus_livre{$id}', ['books' => $books_all,]);
        return view('focus_livre.id', ['Id'=> $id]);
    }
}
