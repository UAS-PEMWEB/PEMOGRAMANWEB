<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    function index() {
        $data = Type::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.types.index', [
            'data' => $data
        ]);
    }

    function create() {
        return view('admin.pages.types.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|max:255',
        ]);
    
        Type::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/types');
    }

    function edit($id) {
        $data = Type::find($id);
        return view('admin.pages.types.edit', [
            'data' => $data
        ]);
    }

    function destroy($id) {
        $data = Type::find($id);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/types');
    }

    function update(Request $request, $id) {
        $data = Type::find($id);
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required',
        ]); 
        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/types');
    }
}
