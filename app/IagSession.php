<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IagSession extends Model
{
    protected $table = "nug.sessions";

    protected $primaryKey = "ID";

    public $timestamps = false;

    protected $fillable = ['ActiveSession'];

    public function iaguser(){

        $this->belongsTo( IagUser::class,'ID', 'userId' );

    }


    // protected $connection = 'mysql';



}
