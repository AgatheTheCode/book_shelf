<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\render_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    // Récupère les données GET sur l'URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = 0;
    }

    // Convertit l'identifiant en entier
    $id = intval($id);

var_dump($id);


////////////////////////////////////
Route::get('/', [render_controller::class, 'render_all_books']);

Route::get('livre_details/{id}', [ render_controller::class, 'render_details_livre'])->name('livre_detail.php?id={id}');