<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TentangPPIDController extends Controller
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
                $query->where('name', 'tentang ppid');
            })
            ->first();

        return view('tentang-ppid', [
            'data' => $data
        ]);
    }
    function tentangppidAdmin()
    {
        $categories = Category::all();
        $types = Type::all();
        $profile = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'tentang ppid');
            })
            ->first();
        return view('admin.pages.tentangppid.index', [
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
                'file' => '',
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
        return redirect('/admin/tentangppid');
    }
}
