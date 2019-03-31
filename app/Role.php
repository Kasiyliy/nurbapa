<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    public const ADMIN_ID = 1;
    public const MANAGER_ID = 2;
    public const CLIENT_ID = 3;

    protected $fillable = ['name'];


}
