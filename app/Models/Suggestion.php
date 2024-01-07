<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function scopeFilter($query, $filters)
    {
        if (!empty($filters['message'])) {
            $query->where('message', 'like', '%' . $filters['message'] . '%');
        }

        // Tambahkan filter lain jika diperlukan

        return $query;
    }
}
