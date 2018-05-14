<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IagSession extends Model
{
    protected $table = "nug.sessions";

    protected $primaryKey = "ID";

    public $timestamps = false;

     protected $fillable = ['ActiveSession'];


    // protected $connection = 'mysql';

}
