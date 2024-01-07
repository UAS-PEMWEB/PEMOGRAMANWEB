<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Member;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    protected $FirebaseMethods;

    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }

    public function index()
    {
        $data = Member::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.members.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('admin.pages.members.create');
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'full_name' => 'required|max:255',
        'email' => 'required|max:255',
        'position' => 'required|max:255',
        'periode' => 'required|max:255',
        'nip' => 'required|max:255',
        'filegallery' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $validatedData['photo'] = $this->FirebaseMethods->upload($request->file('filegallery'));
    $validatedData['periode'] = $request->input('periode');
    $validatedData['user_id'] = auth()->user()->id;

    Member::create($validatedData);

    Alert::success('SUCCESS', 'Data berhasil ditambahkan');
    return redirect('/admin/members');
    }

    public function edit($id)
    {
        $data = Member::find($id);
        return view('admin.pages.members.edit', [
            'data' => $data
        ]);
    }

    function destroy($id) {
        $data = Member::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->photo);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/members');
    }


    public function update(Request $request, $id)
    {
        $data = Member::find($id);

        $validatedData = $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|max:255',
            'position' => 'required|max:255',
            'periode' => 'required|max:255',
            'nip' => 'required|max:255',
            'filegallery' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->file('filegallery')) {
            $fileName = $this->FirebaseMethods->extractNameFromUrl($data->photo);
            $this->FirebaseMethods->deleteFile($fileName);
            $validatedData['photo'] = $this->FirebaseMethods->upload($request->file('filegallery'));
        }

        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/members');
    }

    public function dataPegawai(Request $request)
{
    $search = $request->input('search');
    $dataPegawai = Member::where('full_name', 'like', '%' . $search . '%')
        ->orWhere('email', 'like', '%' . $search . '%')
        ->orWhere('position', 'like', '%' . $search . '%')
        ->orWhere('periode', 'like', '%' . $search . '%')
        ->orWhere('nip', 'like', '%' . $search . '%')
        ->paginate(5);

    return view('data-pegawai', compact('dataPegawai'));
}

}
