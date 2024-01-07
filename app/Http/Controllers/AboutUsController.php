<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function index()
    {
        $profile = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'profile');
            })
            ->first();
        $visi = Content::latest()
        ->with('category')
        ->whereHas('category', function ($query) {
            $query->where('name', 'visi');
        })
        ->get();
        $misi = Content::latest()
        ->with('category')
        ->whereHas('category', function ($query) {
            $query->where('name', 'misi');
        })
        ->get();

        return view('about-us', [
            'data' => $profile,
            'visi' => $visi,
            'misi' => $misi
        ]);
    }
}
