<?php

namespace App\Models\Vitals;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class VitalResponse extends Model
{
    use UsesUuid;
    use HasFactory;
}
