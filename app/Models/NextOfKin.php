<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth',
        'gender', 'employee_id'
    ];
    // public function employee(){
    //     return $this->belongsTo(Employee::class);
    // }
}
