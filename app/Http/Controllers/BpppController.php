<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BpppController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }

    function index() {
        $bppp = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'bppp');
            })
            ->first();
        return view('bppp', [
            'data' => $bppp
        ]);
    }

    function bpppAdmin()
    {
        $categories = Category::all();
        $types = Type::all();
        $bppp = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'bppp');
            })
            ->first();
        return view('admin.pages.bppp.index', [
            'data' => $bppp,
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
        return redirect('/admin/bppp');
    }
}
