<?php

namespace App\Http\Controllers;

use App\Models\ListVillage;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Type;
use App\Models\Product;
use App\Models\Content;
use App\Models\Member;
use Illuminate\Support\Facades\DB; 
class IndexPageAdminController extends Controller
{
    public function indexAdminPage()
    {
        $listVillagesCount = ListVillage::count();
        $galleryCount = Gallery::count();
        $productcount = Product::count();
        $memberCount = Member::count();
        $pengumumanContent = Content::latest()->with(['type'])
            ->whereHas('type', function ($query) {
                $query->where('name', 'pengumuman');
            })
            ->take(5)
            ->get();
        $artikelContent = Content::latest()->with(['type'])
            ->whereHas('type', function ($query) {
                $query->where('name', 'Artikel');
            })
            ->take(5)
            ->get();    
        $allContent = Content::latest()->with(['type', 'category'])
            ->take(10)
            ->get();
        return view('admin.index_admin', [
            'listVillagesCount' => $listVillagesCount,
            'galleryCount' => $galleryCount,
            'memberCount' => $memberCount,
            'productcount' => $productcount,
            'pengumumanContent' => $pengumumanContent,
            'allContent' => $allContent,
            'artikelContent' => $artikelContent
        ]);
    }
}

