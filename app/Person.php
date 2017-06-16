<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "persons";

    protected $fillable = ["name","surname","prefix","identity","details","pic_path","type_id","user_id"];

    public function type(){
        return $this->belongsTo(PersonType::class,'type_id','id');
    }

}
