<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class select_controller extends Controller
{

    //
    public $id;
    public $books_all;
    public $book;

    public function definition($id){
        $this->id=$id;
    }

    public function detail_livre(){
        
        $book =select_controller::where('id',$this->id)->definition();
                
        return view('focus_livre{$id}', ['books' => $book,])->layout('views.focus_livre');

        
    }

    public function select_all_books()//SQL de selection de tout les livres & des éditeurs
    {
        $books_all = DB::select('
        select *,nom_editeur from books 
        INNER JOIN editeur_books 
        ON editeur_books.id=books.id_editeur ');
        //return view('welcome', ['books' => $books_all]);
        return $books_all;
        

    }
    public function focus_livre($id)//SQL de tri par id
    {
        $id = $_POST[':id'];

        $book = DB::select('
        select *,nom_editeur from books 
        INNER JOIN editeur_books 
        ON editeur_books.id=books.id_editeur where books.id=:id');
        //
    }


}