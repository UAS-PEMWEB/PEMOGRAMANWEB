<?php

namespace App\Http\Controllers;
use App\Services\FirebaseMethods; // Add this line
use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class TugasPokokdanFungsiController extends Controller
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
                $query->where('name', 'tugas pokok dan fungsi');
            })
            ->first();

        return view('tugas-pokok-fungsi', [
            'data' => $data
        ]);
    }

    function tugaspokokdanfungsiAdmin()
    {
    $categories = Category::all();
    $types = Type::all();
    $profile = Content::latest()
        ->with('category')
        ->whereHas('category', function ($query) {
            $query->where('name', 'tugas pokok dan fungsi');
        })
        ->first();

    return view('admin.pages.tugaspokokdanfungsi.index', [
        'data' => $profile ?? null, // Check if $profile is null and provide a default value
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
        return redirect('/admin/tugaspokokdanfungsi');
    }
}