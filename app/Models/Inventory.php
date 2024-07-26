<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function brand():BelongsTo{
        return $this->belongsTo(Brand::class, 'brand_id','id');
    }

    public function unit():BelongsTo{
        return $this->belongsTo(Unit::class, 'unit_id','id');
    }

    public function device_type():BelongsTo{
        return $this->belongsTo(DeviceType::class, 'device_type_id','id');
    }
}
