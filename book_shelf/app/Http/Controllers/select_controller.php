<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\id_Livre;
use App\Models\isbn_Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class select_controller extends Controller
{

    //
    public function select_all_books()//SQL de selection de tout les livres & des éditeurs
    {
        $books_all = DB::select('
        select *,nom_editeur from books 
        INNER JOIN editeur_books 
        ON editeur_books.id=books.id_editeur ');
        return $books_all;


    }

    public function select_book_id($livre_id){

    }
}