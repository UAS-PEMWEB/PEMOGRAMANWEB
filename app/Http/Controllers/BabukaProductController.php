<?php

namespace App\Http\Controllers;

use App\Models\Babuka;
use App\Models\ListVillage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Services\FirebaseMethods;
use Illuminate\Support\Facades\Auth;
class BabukaProductController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }
    public function index()
    {
        $data = Babuka::latest()->filter(request(['search']))->paginate(5)->withQueryString();
        return view('admin.pages.babukaproducts.index', [
            'data' => $data
        ]);
    }
    public function approvedpage()
    {
        $data = Babuka::latest()->filter(request(['search']))->where('status', 'approve')->paginate(5)->withQueryString();
        return view('admin.pages.babukaproducts.approved', [
            'data' => $data
        ]);
    }
    public function pendingpage()
    {
        $data = Babuka::latest()->filter(request(['search']))->where('status', 'pending')->paginate(5)->withQueryString();
        return view('admin.pages.babukaproducts.pending', [
            'data' => $data
        ]);
    }

    public function indexPage()
    {
        $data = Babuka::latest()->filter(request(['search']))->where('status', 'approve')->paginate(5)->withQueryString();
        return view('data-babuka', [
            'data' => $data
        ]);
    }

    public function showKampung($id)
    {
        $data = Babuka::latest()
        ->filter(request(['search']))
        ->where('village_id', $id)
        ->where('status', 'approve')
        ->paginate(5)
        ->withQueryString();

        $nameVillage = ListVillage::find($id);

        return view('data-babuka-kampung', [
            'data' => $data,
            'nameVillage' => $nameVillage
        ]);
    }

    function show($id)
    {
        $data = Babuka::where('status', 'approve')->find($id);
        return view('data-babuka-detail', [
           'data' => $data
        ]);
    }

    function destroy($id){
        $data = Babuka::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->image);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/babukaproducts');
    }

    function create()
    {
        $listvillages = ListVillage::all();
        return view('daftar-babuka', [
            'listvillages' => $listvillages
        ]);
    }
    function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'product_name' => 'required',
            'product_detail' => 'required',
            'phone_number' => 'required',
            'village_id' => 'required',
            'file' => 'required',
        ]);
        $validatedData['image'] = $this->FirebaseMethods->upload($request->file('file'));
        Babuka::create($validatedData);
        Alert::success('SUCCESS', 'Pendaftaran Babuka Berhasil');
        return redirect('/daftar-babuka');
    }
    public function approveProduct($id)
    {
        $product = Babuka::find($id);

        if (!$product) {
            return redirect('/admin/babukaproducts')->with('error', 'Product not found.');
        }

        if (request()->has('confirmation')) {
            $confirmation = request('confirmation');

            if ($confirmation === 'yes') {
                // Perform the approval action
                $product->status = 'approve';
                $product->save();
                Alert::success('SUCCESS', 'Data Berhasil Di-Approve');
                return redirect('/admin/babukaproducts');
            } elseif ($confirmation === 'no') {
                Alert::danger('GAGAL', 'Data Gagal Di-Approve');
                return redirect('/admin/babukaproducts');
            }
        }

        return redirect('/admin/babukaproducts')->with('error', 'Invalid confirmation.');
    }
    public function unapproveProduct($id)
    {
        $product = Babuka::find($id);

        if (!$product) {
            return redirect('/admin/babukaproducts')->with('error', 'Product not found.');
        }

        if (request()->has('confirmation')) {
            $confirmation = request('confirmation');

            if ($confirmation === 'yes') {
                $product->status = 'pending';
                $product->save();
                Alert::success('SUCCESS', 'Data Berhasil Di-Unapprove');
                return redirect('/admin/babukaproducts');
            } elseif ($confirmation === 'no') {
                Alert::danger('GAGAL', 'Data Gagal Di-Unapprove');
                return redirect('/admin/babukaproducts');
            }
        }
        return redirect('/admin/babukaproducts');
    }

}
