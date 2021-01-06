<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // il faut le configurer tous les Models.Par les Models ont une variable 
    /*qui est protected. elle va contenir un tableau qui va contenir tous les champs modifiable par l'utilisateur 
    si on le fait ça va poser enormemont des pbs. c'est variable
    s'appelle en général $fillable.
    user_id relation one to many.un model peut avoir plusieur autre model mais ce model sera lié qu'a un seul utilisateur.
    exemple l'article pourra avoir plusieurs commentaires. Mais un commentaire ne pourra appartenir qu'à un seul utilisateur
    un utilisiteur pourra avoir plusieurs posts. mais un postne peut appartenir qu'a un seul utilisateur*/
   
    protected $fillable= [
        'title',
        'content',
        'image',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
