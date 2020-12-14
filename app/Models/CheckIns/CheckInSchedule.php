<?php

namespace App\Models\CheckIns;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class CheckInSchedule extends Model
{
    use HasFactory;
    use UsesUuid;

    protected $guarded = [];
}
