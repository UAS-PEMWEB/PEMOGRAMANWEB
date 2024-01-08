<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use App\Models\ListVillage;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
class ListVillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $data = ListVillage::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.list-villages.index', [
            'data' => $data
        ]);
    }

    function FetchData(){
        $data = ListVillage::all();
        return response()->json([
            'data'=> $data
        ]);
    }

    function FetchDataLokasi($lokasi){
        $data = ListVillage::where('location', $lokasi)->get();
        return response()->json([
            'data'=> $data
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.list-villages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'location' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        ListVillage::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/list-villages');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    function edit($id)
    {
        $data = ListVillage::find($id);
        return view('admin.pages.list-villages.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    function update(Request $request, $id)
    {
       
        $data = ListVillage::find($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'location' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        $data->update($validatedData);

        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/list-villages');
    }

    /**
     * Remove the specified resource from storage.
     */
    function destroy($id)
    {
        $data = ListVillage::find($id);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/list-villages');
    }
}
