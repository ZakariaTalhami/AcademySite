<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NBook extends Model
{
    //Table Name
    protected $table = 'n_books';
    //ptimary key
    public $primarykey = 'id';

    public  $timestamps = true;

}
