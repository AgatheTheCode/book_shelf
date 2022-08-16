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



    public function render_details_livre(Request $request, $id)
    {
        $livre = select_controller::select_all_books();
        $id = DB::table('Books')->get();

        $uri = $request->path();
        $input = $request->only(['id']);

dd($request->input('id'));
        dd($uri,$input,);

        return View('livre_details', ['livre'=> $livre,
                                'id'=>$id]. request('id'));
    }

}

