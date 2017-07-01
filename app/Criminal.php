<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Criminal extends Model
{
    use SoftDeletes;
    protected $table = "criminals";

    protected $fillable = ["type_person","fullname","identity","pic_path","user_deleted","user_created",
        'type_identity','age','job','nickname1','nickname2',
        'workplace_name','workplace_address','workplace_tel','current_address','current_address_tel','origin_address',
        'origin_address_tel','education','father_name','father_age','father_status','father_address',
    'father_address_tel','father_job','father_workplace','father_workplace_tel',
    'mother_name','mother_age','mother_status','mother_address','mother_address_tel',
    'mother_job','mother_workplace','mother_workplace_tel','spouse_name','spouse_age',
    'spouse_status','spouse_address','spouse_address_tel','spouse_job','spouse_workplace',
    'spouse_workplace_tel','child_name','child_age','child_status','child_job','child_workplace','child_workplace_tel',
        'child_address','child_address_tel',
    'child_tel','height','shape','teeth','skin','hair','head','face','eyebrow','eye','ear','nose','mouse',
        'chin','beard','scar','pronunciation','noteable','behavior','favor_place','previous_crime',
        'weapon','vehicle','crime_related','crime_desc','others','time_at'


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
