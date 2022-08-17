<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class render_controller extends select_controller
{

    //
    public function render_all_books()
    {
        $books_all = select_controller::select_all_books();
        return View('welcome', ['books' => $books_all]);
        echo url()->current();
    }



    public function render_details_livre($id)
    {

        $livre = select_controller::select_all_books()->findOrFail($id);
        return View::make('welcome.detail', compact($livre));
    }

}