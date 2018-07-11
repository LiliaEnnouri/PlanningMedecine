<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $table = 'Niveau';
    protected $primaryKey = 'niveau_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    public function Etudiant()
    {
        return $this->hasMany('App\Etudiant');
    }

    public function Matiere()
    {
        return $this->hasMany('App\Matiere');
    }

    public function Plage_Section()
    {
        return $this->hasMany('App\Plage_Section');
    }
}
