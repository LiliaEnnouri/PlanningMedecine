<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table = 'Matiere';
    protected $primaryKey = 'matiere_id';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'code',
        'semestre',
        'niveau_id',
        'section_id',
        'service_id'
    ];

    public function Niveau()
    {
        return $this->belongsTo('App\Niveau');
    }

    public function Section()
    {
        return $this->belongsTo('App\Section');
    }

    public function Service()
    {
        return $this->belongsTo('App\Service');
    }

    public function Pathologie()
    {
        return $this->hasMany('App\Pathologie');
    }

    public function Plage_Matiere()
    {
        return $this->hasMany('App\Plage_Matiere');
    }

}
