<?php

namespace App\Http\Model\QM;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    protected  $table='test';
    protected  $primaryKey='id';
    public $timestamps=false;
    protected $guarded=[];
}
