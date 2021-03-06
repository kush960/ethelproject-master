<?php

namespace App\Models\Medications;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class MedicationSchedule extends Model
{
    use HasFactory;
    use UsesUuid;

    protected $guarded = [];
}
