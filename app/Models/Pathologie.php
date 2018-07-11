<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pathologie extends Model
{
    protected $table = 'Pathologie';
    protected $primaryKey = 'pathologie';
    public $timestamps = true;

    public $fillable = [
        'libelle',
        'matiere_id'
    ];

    public function Matiere()
    {
        return $this->belongsTo('App\Matiere');
    }

    public function Seance()
    {
        return $this->hasMany('App\Seance');
    }
}
