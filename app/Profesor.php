<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
  protected $table = 'profesores';
    protected $primariKey= 'id';
    public $guarded= ['id'];

  
    public function profesor()
 {
    return $this->belongsTo('App\Profesor');
 }
}
