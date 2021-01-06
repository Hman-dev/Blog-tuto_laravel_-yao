<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('posts/acceuil');
});

// Par cette Route::resource on va créer toutes les rédirections 
// lorsque l'utilisateur va clicker sur l'édition d'un article màj etc
// càd toute les routes du CRUD de notre controller "posts" c'estla table dans notre bdd
// Laravel va prendre en compte toutes les routes relatives aux posts
/** Pour le vérifier aller dans le terminal et tapez php arisan route:list */
Route::resource('posts','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
