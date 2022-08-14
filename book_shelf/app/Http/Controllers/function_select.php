<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class function_select extends Controller
{
    //

    public function select_all_books()
    {
        $books_all = DB::select('
        select *,nom_editeur from books 
        INNER JOIN editeur_books 
        ON editeur_books.id=books.id_editeur ');
        return view('welcome', ['books' => $books_all]);

        //
    }
    public function focus_livre($id)
    {
        $id = $_POST[':id'];

        $book = DB::select('
        select *,nom_editeur from books 
        INNER JOIN editeur_books 
        ON editeur_books.id=books.id_editeur where books.id=:id');


        
        return view('focus_livre', ['books' => $book,]);

        //
    }
}