<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrganitationController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }
    function index()
    {
        $data = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'organitations');
            })
            ->first();

        return view('struktur-organisasi', [
            'data' => $data
        ]);
    }

    function oraganitationAdmin()
    {
        $data = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'organitations');
            })
            ->first();
        return view('admin.pages.organitations.index', [
            'data' => $data,
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
        return redirect('/admin/organitations/');
    }
}
