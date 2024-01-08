<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Services\FirebaseMethods;
use Illuminate\Support\Facades\Auth;
use App\Models\Type;

class GalleryController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }

    function index() {
        $data = Gallery::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.galleries.index', [
            'data' => $data
        ]);
    }

    function create() {
        $types = Type::where('name', 'foto')->orWhere('name', 'video')->get();
        return view('admin.pages.galleries.create', compact('types'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required',
            'types_id' => 'required|exists:types,id',
            'filegallery' => 'required',
        ]);
        $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('filegallery'));
        Gallery::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/galleries');
    }

    function edit($id) {
        $data = Gallery::find($id);
        $types = Type::all();
        return view('admin.pages.galleries.edit', [
            'data' => $data,
            'types' => $types
        ]);
    }

    function destroy($id) {
        $data = Gallery::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/galleries');
    }

    function update(Request $request, $id) {
        $data = Gallery::find($id);
        if ($request->file('filegallery')) {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'detail' => 'nullable',
                'types_id' => 'required|exists:types,id',
                'filegallery' => 'required',
            ]);
            $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
            $this->FirebaseMethods->deleteFile($fileName);
            $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('filegallery'));
        } else {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'nullable',
            'types_id' => 'required|exists:types,id',
        ]);
        }
        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/galleries');
    }
    public function indexpage(Request $request)
{
    $type = $request->input('type');

    $galleries = Gallery::latest()
        ->filterByType($type)
        ->paginate(8);

    $arus = Gallery::latest()
        ->with('type')
        ->whereHas('type', function ($query) {
            $query->where('name', 'arus');
        })
        ->filter(request(['search']))
        ->paginate(5);
        
    return view('galeri', [
        'galleries' => $galleries,
        'arus' => $arus
    ]);
}
}
