<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
class ProfilePejabatController extends Controller
{
    function index()
    {
        $profiles = Content::oldest()
            ->with('type')
            ->whereHas('type', function ($query) {
                $query->where('name', 'Profile Pejabat Struktural');
            })
            ->paginate(5); // Menggunakan pagination dengan 5 item per halaman

        return view('profile-pejabat', [
            'profiles' => $profiles,
        ]);
    }
}
