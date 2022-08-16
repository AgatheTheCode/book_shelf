<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class render_controller extends select_controller
{
    //
    public function render_all_books(){
        $books_all = select_controller::select_all_books();
        return View('welcome', ['books' => $books_all]);
    }
    public function render_details_livre(){
        $livre = select_controller::select_all_books();
        $id = DB::table('Books')->get();

        // dd($id, $livre);

        return View('livre_details', ['books'=> $livre,
                                'id'=>$id]);
    }

}

