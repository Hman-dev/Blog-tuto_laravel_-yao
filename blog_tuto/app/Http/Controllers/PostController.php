<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

// ici on créer par défaut toutes les méthodes du CRUD d'articles avec la cmde Php artisan pour notre controlles ...
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Cmt faire pour envoyer les mêmes données quel que soit l'url qui envoyer pour faire appelle à la racine ou pour lister les articles simples et celles 
        qui sont dans notre bdd etc . pour cela on aura plus besoin dela variable $posts */
        $posts = Post::orderby('id','asc')->pagination(10);
        return view('acceuil', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*les articles seront créer ici.les points 
        correspondent à la navigation dans à l'aborescence des vues dans laravel*/
        return view('posts.back.create'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // pour stocker un article en bdd et créer un nouvel article 
        $post = Post::create($request->all());
        return redirect('home')->with('status','Votre article a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
