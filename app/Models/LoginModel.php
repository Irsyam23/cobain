<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = 'tbl_login';
    protected $primaryKey = 'id_login';
    public $timestamps = false;
}
