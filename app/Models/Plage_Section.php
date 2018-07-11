<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plage_Section extends Model
{
    protected $table = 'Plage_Section';
    protected $primaryKey = 'plage_section_id';
    public $timestamps = true;

    public $fillable = [
        'semaine_début',
        'semaine_fin',
        'section_id',
        'niveau_id',
        'plage_horaire'
    ];

    public function Section()
    {
        return $this->belongsTo('App\Section');
    }

    public function Niveau()
    {
        return $this->belongsTo('App\Niveau');
    }

    public function Plage_Matiere()
    {
        return $this->hasMany('App\Plage_Matiere');
    }

    public function Plage_Horaire()
    {
        return $this->hasOne('App\Plage_Horaire');
    }
}
