<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';

    protected $fillable = [
        'title', 'detail', 'types_id', 'url_file', 'user_id',
    ];

    protected static function boot()
    {
        parent::boot();

        if (!app()->runningInConsole()) {
            static::creating(function ($gallery) {
                if (Auth::check()) {
                    $gallery->user_id = Auth::id();
                }
            });
        }
    }

    public function scopeFilter($query, $filters)
    {
        if (!empty($filters['search'])) {
            $query->where('title', 'like', '%' . $filters['search'] . '%');
        }
        return $query;
    }
    public function scopeFilterByType($query, $type)
    {
        if ($type) {
            $query->whereHas('type', function ($q) use ($type) {
                $q->where('name', $type);
            });
        }
        return $query;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'types_id');
    }
}