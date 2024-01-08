<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ListContentControllrer extends Controller
{
    
    public function index()
    {
        $artikels = Content::latest()
        ->with('type')
        ->whereHas('type', function ($query) {
            $query->whereIn('name', ['Artikel', 'Pengumuman', 'Agenda']);
        })
        ->filter(request(['search']))
        ->paginate(5);

        $artikelpagination = Content::latest()
        ->with('type')
        ->whereHas('type', function ($query) {
            $query->whereIn('name', ['Artikel', 'Pengumuman', 'Agenda']);
        })
        ->take(5)
        ->get();

        $categories = DB::table('contents')
            ->join('categories', 'contents.category_id', '=', 'categories.id')
            ->join('types', 'contents.type_id', '=', 'types.id')
            ->whereIn('types.name', ['Artikel', 'Pengumuman', 'Agenda'])
            ->select('categories.*')
            ->distinct()
            ->get();

        return view('list-content', [
            'artikels' => $artikels,
            'artikelpagination' => $artikelpagination,
            'categories' => $categories
        ]);
    }

    public function showByCategory($category)
    {
        $artikels = Content::latest()
            ->with('type')
            ->whereHas('type', function ($query) {
                $query->whereIn('name', ['Artikel', 'Pengumuman', 'Agenda']);
            })
            ->whereHas('category', function ($query) use ($category) {
                $query->where('name', $category);
            })
            ->filter(request(['search']))
            ->paginate(5);
            
        $artikelpagination = Content::latest()
            ->with('type')
            ->whereHas('type', function ($query) {
                $query->whereIn('name', ['Artikel', 'Pengumuman', 'Agenda']);
            })
            ->take(5)
            ->get();    
        $categories = DB::table('contents')
            ->join('categories', 'contents.category_id', '=', 'categories.id')
            ->join('types', 'contents.type_id', '=', 'types.id')
            ->whereIn('types.name', ['Artikel', 'Pengumuman', 'Agenda'])
            ->select('categories.*')
            ->distinct()
            ->get();

        return view('list-content', [
            'artikels' => $artikels,
            'artikelpagination' => $artikelpagination,
            'categories' => $categories
        ]);
    }
}
