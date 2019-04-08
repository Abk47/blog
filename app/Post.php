<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // How to rename Table Name, default name = Posts
    protected $table = 'posts';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
