<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'Service';
    protected $primaryKey = 'service_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    public function Enseignant()
    {
        return $this->hasMany('App\Enseignant');
    }

    public function Matiere()
    {
        return $this->hasMany('App\Matiere');
    }

    public function Plage_Section()
    {
        return $this->hasMany('App\Plage Section');
    }
}
