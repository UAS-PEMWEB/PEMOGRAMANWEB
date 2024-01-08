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

class DaftarInformasiPublikController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }
    public function index()
    {
        $data = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'daftar informasi publik');
            })
            ->first();

        return view('daftar-info-public', [
            'data' => $data
        ]);
    }
    function daftarinformasipublikAdmin()
    {
        $categories = Category::all();
        $types = Type::all();
        $profile = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'daftar informasi publik');
            })
            ->first();
        return view('admin.pages.daftarinformasipublik.index', [
            'data' => $profile,
            'categories' => $categories,
            'types' => $types
        ]);
    }
    
    function update(Request $request, $id)
    {

        $data = Content::find($id);

        if ($request->file('file')) {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'detail' => 'required',
            ]);
            $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
            $this->FirebaseMethods->deleteFile($fileName);
            $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('file'));
        } else {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'detail' => 'required',
            ]);
        }
        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/daftarinformasipublik');
    }
}
