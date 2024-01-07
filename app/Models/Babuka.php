<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Babuka extends Model
{
    protected $fillable = [
        'name',
        'product_name',
        'product_detail',
        'phone_number',
        'village_id',
        'image',
    ];

    public function scopeFilter($query, $filters)
    {
        if (!empty($filters['search'])) {
            $query->where('product_name', 'like', '%' . $filters['search'] . '%');
        }
        return $query;
    }
    public function village()
    {
        return $this->belongsTo(ListVillage::class, 'village_id');
    }
}