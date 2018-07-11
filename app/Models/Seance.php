<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $table = 'Seance';
    protected $primaryKey = 'seance_id';
    public $timestamps = true;

    public $fillable = [
        'type',
        'heure_debut',
        'heure_fin',
        'date',
        'enseignant_id',
        'plage_matiere_id',
        'pathologie_id'
    ];

    public function Enseignant()
    {
        return $this->belongsTo('App\Enseignant');
    }

    public function Plage_Matiere()
    {
        return $this->belongsTo('App\Plage_Matiere');
    }

    public function Pathologie()
    {
        return $this->belongsTo('App\Pathologie');
    }

}
