<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Product;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }
    function index() {
        $data = Product::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.products.index', [
            'data' => $data
        ]);
    }

    function create() {
        return view('admin.pages.products.create');
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'filegallery' => 'required',
        'url_link' => 'required',
    ]);

    $validatedData['image'] = $this->FirebaseMethods->upload($request->file('filegallery'));
    $validatedData['user_id'] = auth()->user()->id; // Tambahkan user_id ke data yang akan disimpan
    Product::create($validatedData);

    Alert::success('SUCCESS', 'Data berhasil ditambahkan');
    return redirect('/admin/products');
    }


    function edit($id) {
        $data = Product::find($id);
        return view('admin.pages.products.edit', [
            'data' => $data
        ]);
    }

    function destroy($id) 
    {
        $data = Product::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->image);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/products');
    }

    public function update(Request $request, $id) 
    {
    $data = Product::find($id);

    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'filegallery' => 'image|mimes:jpeg,png,jpg,gif,svg',
        'url_link' => 'required',
    ]);

    if ($request->file('filegallery')) {
        // Hapus gambar lama di Firebase
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->image);
        $this->FirebaseMethods->deleteFile($fileName);

        // Upload gambar baru ke Firebase
        $validatedData['image'] = $this->FirebaseMethods->upload($request->file('filegallery'));
    }

    $data->update($validatedData);
    Alert::success('SUCCESS', 'Data berhasil diubah');
    return redirect('/admin/products');
    }

    
}
