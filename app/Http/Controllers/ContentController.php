<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }
    function create()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('admin.pages.contents.create', [
            'categories' => $categories,
            'types' => $types
        ]);
    }
    function index()
    {
        $data = Content::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.contents.index', [
            'data' => $data
        ]);
    }
    function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required',
            'file' => '',
            'type_id' => 'required',
            'category_id' => 'required',
        ]);
        $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('file'));
        $validatedData['user_id'] = Auth::user()->id;
        Content::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/contents');
    }
    function destroy($id)
    {
        $data = Content::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/contents');
    }
    function edit($id){
        $categories = Category::all();
        $types = Type::all();
        $data = Content::find($id);
        return view('admin.pages.contents.edit', [
            'data' => $data,
            'categories'=>$categories,
            'types'=> $types 
        ]);
    }

    function update(Request $request, $id)
    {
       
        $data = Content::find($id);
       
        if ($request->file('file')) {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'detail' => 'required',
                'file' => 'required',
                'type_id' => 'required',
                'category_id' => 'required',
            ]);
            $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
            $this->FirebaseMethods->deleteFile($fileName);
            $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('file'));
        } else {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'detail' => 'required',
                'type_id' => 'required',
                'category_id' => 'required',
            ]);
        }
        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/contents');
    }
    public function artikelpage()
    {
        $artikels = Content::latest()
        ->with('type')
        ->whereHas('type', function ($query) {
            $query->where('name', 'Artikel');
        })
        ->filter(request(['search']))
        ->paginate(5);

        $artikelpagination = Content::latest()
        ->with('type')
        ->whereHas('type', function ($query) {
            $query->where('name', 'Artikel');
        })
        ->take(5)
        ->get();

        $categories = DB::table('contents')
            ->join('categories', 'contents.category_id', '=', 'categories.id')
            ->join('types', 'contents.type_id', '=', 'types.id')
            ->where('types.name', 'Artikel')
            ->select('categories.*')
            ->distinct()
            ->get();

        return view('artikel', [
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
                $query->where('name', 'Artikel');
            })
            ->whereHas('category', function ($query) use ($category) {
                $query->where('name', $category);
            })
            ->filter(request(['search']))
            ->paginate(5);
            
        $artikelpagination = Content::latest()
            ->with('type')
            ->whereHas('type', function ($query) {
                $query->where('name', 'Artikel');
            })
            ->take(5)
            ->get();    
        $categories = DB::table('contents')
            ->join('categories', 'contents.category_id', '=', 'categories.id')
            ->join('types', 'contents.type_id', '=', 'types.id')
            ->where('types.name', 'Artikel')
            ->select('categories.*')
            ->distinct()
            ->get();

        return view('artikel', [
            'artikels' => $artikels,
            'artikelpagination' => $artikelpagination,
            'categories' => $categories
        ]);
    }
    public function showartikel($id)
    {
        $article = Content::with('type', 'category')->findOrFail($id);
        return view('artikel-detail', ['article' => $article]);
    }
}
