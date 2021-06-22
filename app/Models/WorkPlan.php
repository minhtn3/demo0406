<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPlan extends Model
{
    public function jobAssigned()
    {
        return $this->belongsTo(JobAssign::class);
    }
}
