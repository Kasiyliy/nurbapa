<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'name', 'judicial_address', 'current_address', 'bin', 'served'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
