<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrimePlace extends Model
{
    use SoftDeletes;
    protected $table = "crime_places";

    protected $fillable = [

        "name","address","province","district",
        "tel","owner_name","owner_age","owner_identity",
        "owner_address_identity","manager_name","manager_age",
        "manager_identity","manager_address_identity",
        "manager_address_tel","manager_current_address",
        "manager_current_address_tel","place_desc","place_event",
        "place_note","user_deleted","user_created","place_crime_desc","lat","lng"

   ];


    public function deleted_by()
    {
        return $this->belongsTo(User::class, 'user_deleted', 'id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'user_created', 'id');
    }

}
