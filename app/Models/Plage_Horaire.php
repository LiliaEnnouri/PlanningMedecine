<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plage_Horaire extends Model
{
    protected $table = 'Plage_Horaire';
    protected $primaryKey = 'plage_horaire_id';
    public $timestamps = true;

    public $fillable = [
        'jour',
        'heure_debut',
        'heure_fin'
    ];

    public function Plage_Matiere()
    {
        return $this->belongsTo('App\Plage_Matiere');
    }

    public function Plage_Section()
    {
        return $this->belongsTo('App\Plage_Section');
    }
}
