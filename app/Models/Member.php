<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // table name for model
    protected $table = 'members';

    // attributes
    protected $fillable = [
        'id',
        'name',
        'contact_information',
        'membership_package_id',
        'gender',
        'join_date',
        'status',
    ];

    // Define the relationship with MembershipPackage model
    //public function membershipPackage()
    //{
        //return $this->belongsTo(MembershipPackage::class, 'membership_package_id', 'id');
    //}
}
