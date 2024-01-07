<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
       'name', 'image', 'url_link', 'user_id',
    ];

    protected static function boot()
    {
        parent::boot();

        // Mengecek apakah aplikasi sedang berjalan dalam lingkungan CLI (Artisan)
        if (!app()->runningInConsole()) {
            static::creating(function ($products) {
                // Mengisi 'user_id' jika pengguna telah login
                if (Auth::check()) {
                    $products->user_id = Auth::id();
                }
            });
        }
    }

    public function scopeFilter($query, $filters)
    {
        if (!empty($filters['search'])) {
            $query->where('name', 'like', '%' . $filters['search'] . '%');
        }

        // Tambahkan filter lain jika diperlukan

        return $query;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

