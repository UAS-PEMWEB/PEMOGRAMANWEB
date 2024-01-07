<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MisiController extends Controller
{
    function create()
    {
        return view('admin.pages.misi.create');
    }
    function index()
    {
        $data = Content::latest()->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'misi');
            })->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.misi.index', [
            'data' => $data
        ]);
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required',
        ]);
        $typeMisi = Type::where('name', 'profile')->first();
        $categoryMisi = Category::where('name', 'misi')->first();
        $validatedData['type_id'] =  $typeMisi->id;
        $validatedData['category_id'] =  $categoryMisi->id;
        $validatedData['user_id'] = Auth::user()->id;
        Content::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/misi');
    }

    function destroy($id)
    {
        $data = Content::find($id);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/misi');
    }

    function edit($id)
    {
        $data = Content::find($id);
        return view('admin.pages.misi.edit', [
            'data' => $data
        ]);
    }

    function update(Request $request, $id)
    {

        $data = Content::find($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required'
        ]);

        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/misi');
    }
}
