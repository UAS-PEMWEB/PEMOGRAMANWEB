<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuggestionController extends Controller
{
    function index()
    {
        $data = Suggestion::latest()->filter(request(['message']))->paginate(5)->withQueryString();
        return view('admin.pages.suggestions.index', [
            'data' => $data
        ]);
    }

    function destroy($id) 
    {
        $data = Suggestion::find($id);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/suggestions');
    }

    function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'address' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ]);
    
        Suggestion::create($validatedData);
    
        Alert::success('SUCCESS', 'Kritik dan Saran berhasil terkirim');
        return redirect('/');
    }
}
