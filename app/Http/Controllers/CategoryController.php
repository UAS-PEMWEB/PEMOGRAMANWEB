<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Category;
use App\Services\FirebaseMethods;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }
    function index() {
        $data = Category::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.categories.index', [
            'data' => $data
        ]);
    }

    function create() {
        return view('admin.pages.categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|max:255',
            'fileicon' => 'nullable',
        ]);
        if ($request->hasFile('fileicon')) {
            $validatedData['icon'] = $this->FirebaseMethods->upload($request->file('fileicon'));
        }        Category::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/categories');
    }

    function edit($id) {
        $data = Category::find($id);
        return view('admin.pages.categories.edit', [
            'data' => $data
        ]);
    }
    
    function destroy($id) {
        $data = Category::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->icon);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/categories');
    }

    function update(Request $request, $id) {
        $data = Category::find($id);
        if ($request->file('fileicon')) {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'desc' => 'required|max:255',
                'fileicon' => 'nullable',
            ]);
            $fileName = $this->FirebaseMethods->extractNameFromUrl($data->icon);
            $this->FirebaseMethods->deleteFile($fileName);
            $validatedData['icon'] = $this->FirebaseMethods->upload($request->file('fileicon'));
        } else {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|max:255',
        ]); 
        }
        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/categories');
    }
}
