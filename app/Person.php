<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Person extends Model
{

    use SoftDeletes;
    protected $table = "persons";

    protected $fillable = ["type_person","fullname","identity","pic_path","user_deleted",
        'type_identity','age','job','workplace1','workplace1_tel','workplace2',
        'workplace2_tel','current_address','current_address_tel','origin_address',
        'origin_address_tel','father_name','father_age','father_status','father_address',
    'father_address_tel','father_job','father_workplace','father_workplace_tel',
    'mother_name','mother_age','mother_status','mother_address','mother_address_tel',
    'mother_job','mother_workplace','mother_workplace_tel','spouse_name','spouse_age',
    'spouse_status','spouse_address','spouse_address_tel','spouse_job','spouse_workplace',
    'spouse_workplace_tel','child1_name','child1_age','child1_job','child1_workplace',
    'child1_tel','child2_name','child2_age','child2_job','child2_workplace','child2_tel',
    'child3_name','child3_age','child3_job','child3_workplace','child3_tel','vehicle1',
    'vehicle2','family_member1_name','family_member1_age','family_member1_identity',
    'family_member1_job','family_member1_workplace','family_member1_workplace_tel',
    'family_member1_address','family_member2_name','family_member2_age','family_member2_identity',
    'family_member2_job','family_member2_workplace','family_member2_workplace_tel',
    'family_member2_address','family_member3_name','family_member3_age','family_member3_identity',
    'family_member3_job','family_member3_workplace','family_member3_workplace_tel',
    'family_member3_address','employee1_name','employee1_age','employee1_identity',
    'employee1_address','employee2_name','employee2_age','employee2_identity',
    'employee2_address','others','user_created','time_at'

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
