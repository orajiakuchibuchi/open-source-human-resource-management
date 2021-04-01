<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nextOfKin extends Model
{
    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'user_id');
    }
}
