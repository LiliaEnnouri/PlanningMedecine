<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pathologie extends Model
{
    protected $table = 'Enseignant';
    protected $primaryKey = 'enseignant_id';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'prenom',
        'CIN',
        'email',
        'qr_code',
        'password',
        'passwordDecrypt',
        'privilege_id',
        'section_id',
        'service_id'
    ];

    public function Privilege()
    {
        return $this->belongsTo('App\Privilege');
    }

    public function Section()
    {
        return $this->hasOne('App\Section');
    }

    public function Service()
    {
        return $this->belongsTo('App\Service');
    }

    public function seance()
    {
        return $this->hasMany('App\Seance');
    }
}
