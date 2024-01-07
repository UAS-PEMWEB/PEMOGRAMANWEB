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

class ProfilePejabatStruktural extends Controller
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
        return view('admin.pages.profilepejabatstruktural.create', [
            'categories' => $categories,
            'types' => $types
        ]);
    }
    function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required',
            'category_id' => 'required',
        ]);
        $typeVisi = Type::where('name', 'Profile Pejabat Struktural')->first();
        $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('file'));
        $validatedData['type_id'] =  $typeVisi->id;
        $validatedData['user_id'] = Auth::user()->id;
        Content::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/profilepejabatstruktural');
    }


    function profilepejabatrstrukturalAdmin()
    {
        $categories = Category::all();
        $types = Type::all();
        $profilepejabatstruktural = Content::latest()
            ->with('type')
            ->whereHas('type', function ($query) {
                $query->where('name', 'Profile Pejabat Struktural');
            })->filter(request(['search']))
            ->paginate(5);
        return view('admin.pages.profilepejabatstruktural.index', [
            'data' => $profilepejabatstruktural,
            'categories' => $categories,
            'types' => $types
        ]);
    }

    function update(Request $request, $id)
    {
        $data = Content::find($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->file('file')) {
            $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
            $this->FirebaseMethods->deleteFile($fileName);
            $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('file'));
        }

        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/profilepejabatstruktural');
    }
    function edit($id){
        $categories = Category::all();
        $types = Type::all();
        $data = Content::find($id);
        return view('admin.pages.profilepejabatstruktural.edit', [
            'data' => $data,
            'categories'=>$categories,
            'types'=> $types 
        ]);
    }
    function destroy($id)
    {
        $data = Content::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/profilepejabatstruktural');
    }
}
