<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'Section';
    protected $primaryKey = 'section_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    public function Enseignant()
    {
        return $this->belongsTo('App\Enseignant');
    }

    public function Matiere()
    {
        return $this->hasMany('App\Matiere');
    }

}
