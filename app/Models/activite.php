<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class activite extends Model
{
    protected $table ='activites';
    protected $fillable = ['nom','description'];
}
