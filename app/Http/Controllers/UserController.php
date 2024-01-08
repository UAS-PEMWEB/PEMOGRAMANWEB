<?php

namespace App\Http\Controllers;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {
        $data = User::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.users.index', [
            'data' => $data
        ]);
    }

    function create()
    {
        return view('admin.pages.users.create');
    }

    public function store(Request $request)
    {
        // User::create($request->all());
        $validatedData = $request->validate([
            'full_name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'phone_number' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/users');
    }

    function edit($id)
    {
        $data = User::find($id);
        return view('admin.pages.users.edit', [
            'data' => $data
        ]);
    }

    function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/users');
    }

    function update(Request $request, $id)
    {
        $data = User::find($id);
        if ($request->password) {
            $validatedData = $request->validate([
                'full_name' => 'required|max:255',
                'phone_number' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            $validatedData = $request->validate([
                'full_name' => 'required|max:255',
                'phone_number' => 'required',
                'email' => 'required|email',
            ]);
        }
        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/users');
    }
}
