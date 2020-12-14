<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class EventSchedule extends Model
{
    use HasFactory;
    use UsesUuid;

    protected $guarded = [];
}
