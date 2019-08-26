<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Student extends Model
{
  use SoftDeletes;
  protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
