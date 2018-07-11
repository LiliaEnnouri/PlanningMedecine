<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plage_Matiere extends Model
{
    protected $table = 'Plage_Matiere';
    protected $primaryKey = 'plage_matiere_id';
    public $timestamps = true;

    public $fillable = [
        'matiere_id',
        'plage_section_id',
        'plage_horaire'
    ];

    public function Matiere()
    {
        return $this->belongsTo('App\Matiere');
    }

    public function Plage_Section()
    {
        return $this->belongsTo('App\Plage_Section');
    }

    public function Seance()
    {
        return $this->hasMany('App\Seance');
    }

    public function Plage_Horaire()
    {
        return $this->hasOne('App\Plage_Horaire');
    }
}
