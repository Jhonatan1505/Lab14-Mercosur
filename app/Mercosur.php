<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercosur extends Model
{
    //
    protected $fillable = ['nombre', 'paisA',
'paisB','tipo','producto','descripcion'];
}
