<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'photo', 'code', 'name', 'status', 'gender', 'date_of_birth',
        'date_of_joining', 'number','qualification', 'emergency_number',
        'pan_number', 'current_address', 'permanent_address',
        'formalities', 'offer_acceptance', 'probation_period', 'date_of_confirmation',
        'department', 'salary', 'account_number', 'bank_name', 'ifsc_code',
        'pf_account_number', 'un_number', 'pf_status', 'date_of_resignation',
        'notice_period', 'last_working_day', 'full_final'
    ];

    public function userrole()
    {
        return $this->hasOne('App\Models\UserRole', 'user_id', 'id');
    }

    public function employeeLeaves()
    {
        return $this->hasMany('App\EmployeeLeaves', 'user_id', 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function nextOfKin(){
    //     return $this->hasOne('App\Models\NextOfKin', 'kin_id', 'id');
    // }
}
