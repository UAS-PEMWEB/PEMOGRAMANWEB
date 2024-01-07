<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BkbkkkController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }

    function index() {
        $bkbkkk = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'bkbkkk');
            })
            ->first();
        return view('bkbkkk', [
            'data' => $bkbkkk
        ]);
    }

    function bkbkkkAdmin()
    {
        $categories = Category::all();
        $types = Type::all();
        $bkbkkk = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'bkbkkk');
            })
            ->first();
        return view('admin.pages.bkbkkk.index', [
            'data' => $bkbkkk,
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
                'file' => 'required',
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
        return redirect('/admin/bkbkkk');
    }
}
