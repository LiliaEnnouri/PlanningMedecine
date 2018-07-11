<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = 'Privilege';
    protected $primaryKey = 'privilege_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    public function Enseignant()
    {
        return $this->hasMany('App\Enseignant');
    }

}
