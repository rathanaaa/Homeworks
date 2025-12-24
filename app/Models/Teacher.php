<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'tbl_teacher';
    protected $primaryKey = 'cid';
    protected $fillable = ['name'];
    public $timestamps = false;

}
