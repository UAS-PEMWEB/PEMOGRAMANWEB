<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\ListVillage;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    function index()
    {
        $profile = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'profile');
            })
            ->first();
        $dataCarousel = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'banner');
            })
            ->paginate(5);
        $linkterkait = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'link terkait');
            })
            ->get();

        $announcements = Content::with(['type', 'user'])
            ->whereHas('type', function ($query) {
                $query->where('name', 'pengumuman');
            })
            ->latest()
            ->paginate(1);
    
        $dataProduct = Product::latest()->get();
        $galleries = Gallery::latest()
            ->with('type')
            ->whereHas('type', function ($query) {
                $query->where('name', 'Foto');
            })
            ->take(6)
            ->get();

        $locations = ListVillage::latest()->get();
        function removeDuplicateLocations($locations){
            $uniqueLocations = [];
            foreach ($locations as $location) {
                if (!in_array($location->location, $uniqueLocations)) {
                    $uniqueLocations[] = $location->location;
                }
            }
            return $uniqueLocations;
        }

        $locations = removeDuplicateLocations($locations);
        return view('index', [
            'carousels' => $dataCarousel,
            'data' => $profile,
            'products' => $dataProduct,
            'galleries' => $galleries,
            'announcements' => $announcements,
            'linkterkait' => $linkterkait, 
            'locations' => $locations
        ]);
    }

    public function detailPengumuman($id)
    {
    $announcement = Content::with('category')->find($id);
    return view('detail-pengumuman', compact('announcement'));
    }

    public function pengumuman()
    {
        $allannouncements = Content::with(['type', 'user'])
            ->whereHas('type', function ($query) {
                $query->where('name', 'pengumuman');
            })
            ->latest()
            ->filter(request(['search']))
            ->paginate(5);

        // Use the query builder instance for pagination
        $allannouncementpagination = Content::latest()
            ->with('type')
            ->whereHas('type', function ($query) {
                $query->where('name', 'pengumuman');
            })
            ->take(5)
            ->get();
    
        // Fetch categories for the sidebar
        $categories = DB::table('contents')
            ->join('categories', 'contents.category_id', '=', 'categories.id')
            ->join('types', 'contents.type_id', '=', 'types.id')
            ->where('types.name', 'pengumuman')
            ->select('categories.*')
            ->distinct()
            ->get();

        return view('pengumuman', [
            'allannouncements' => $allannouncements,
            'allannouncementpagination' => $allannouncementpagination,
            'categories' => $categories,
        ]);
    }


    public function agenda()
    {
    $allagendas = Content::with(['type', 'user'])
    ->whereHas('type', function ($query) {
        $query->where('name', 'agenda');
    })
    ->latest()
    ->filter(request(['search']))
    ->paginate(5);

     // Use the query builder instance for pagination
     $allagendapagination = Content::latest()
     ->with('type')
     ->whereHas('type', function ($query) {
         $query->where('name', 'agenda');
     })
     ->take(5)
     ->get();

    $categories = DB::table('contents')
        ->join('categories', 'contents.category_id', '=', 'categories.id')
        ->join('types', 'contents.type_id', '=', 'types.id')
        ->where('types.name', 'agenda')
        ->select('categories.*')
        ->distinct()
        ->get();

    return view('agenda', [
        'allagendas' => $allagendas,
        'allagendapagination' => $allagendapagination,
        'categories' => $categories,
    ]);
    }

    public function detailAgenda($id)
    {
    $agendases = Content::with('category')->find($id);
    return view('detail-agenda', compact('agendases'));
    }

    public function showByCategory($category)
    {
    $allannouncements = Content::latest()
        ->with('type')
        ->whereHas('type', function ($query) {
            $query->where('name', 'pengumuman');
        })
        ->whereHas('category', function ($query) use ($category) {
            $query->where('name', $category);
        })
        ->filter(request(['search']))
        ->paginate(5);

    $categories = DB::table('contents')
        ->join('categories', 'contents.category_id', '=', 'categories.id')
        ->join('types', 'contents.type_id', '=', 'types.id')
        ->where('types.name', 'pengumuman')
        ->select('categories.*')
        ->distinct()
        ->get();

    return view('pengumuman', [
        'allannouncements' => $allannouncements,
        'categories' => $categories,
    ]);
    }

    public function showByAgenda($category)
    {
    $allagendas = Content::latest()
        ->with('type')
        ->whereHas('type', function ($query) {
            $query->where('name', 'agenda');
        })
        ->whereHas('category', function ($query) use ($category) {
            $query->where('name', $category);
        })
        ->filter(request(['search']))
        ->paginate(5);

    $categories = DB::table('contents')
        ->join('categories', 'contents.category_id', '=', 'categories.id')
        ->join('types', 'contents.type_id', '=', 'types.id')
        ->where('types.name', 'agenda')
        ->select('categories.*')
        ->distinct()
        ->get();

    return view('agenda', [
        'allagendas' => $allagendas,
        'categories' => $categories,
    ]);
    }

    public function detailBidang($id)
    {
    $announcement = Content::with('category')->find($id);
    return view('detail-pengumuman', compact('announcement'));
    }

    public function BidangDPPKB()
    {
        $bidangdppkb = Content::with(['type', 'user'])
            ->whereHas('type', function ($query) {
                $query->where('name', 'BidangDPPKB');
            })
            ->latest()
            ->filter(request(['search']))
            ->paginate(5);
    
        // Use the query builder instance for pagination
        $bidangdppkbpagination = Content::latest()
            ->with('type')
            ->whereHas('type', function ($query) {
                $query->where('name', 'BidangDPPKB');
            })
            ->take(5)
            ->get();
        
        return view('BidangDPPKB', [
            'bidangdppkb' => $bidangdppkb,
            'bidangdppkbpagination' => $bidangdppkbpagination,
        ]);
    }
    

}
