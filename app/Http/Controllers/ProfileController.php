<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Type;
use App\Services\FirebaseMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    protected $FirebaseMethods;
    public function __construct(FirebaseMethods $FirebaseMethods)
    {
        $this->FirebaseMethods = $FirebaseMethods;
    }

    function profileAdmin()
    {
        $categories = Category::all();
        $types = Type::all();
        $profile = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'profile');
            })
            ->first();
        return view('admin.pages.profile.index', [
            'data' => $profile,
            'categories' => $categories,
            'types' => $types
        ]);
    }

    function bannerIndex(){
        $profilepejabatstruktural = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'banner');
            })->filter(request(['search']))
            ->paginate(5);
        return view('admin.pages.banner.index', [
            'data' => $profilepejabatstruktural
        ]);
    }

    function bannerCreate()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('admin.pages.banner.create', [
            'categories' => $categories,
            'types' => $types
        ]);
    }

    function bannerDestroy($id)
    {
        $data = Content::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/banner');
    }

    function bannerStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required',
            'file' => 'required',
        ]);
        $BannerCategoryId = Category::where('name', 'banner')->first()->id;
        $typeProfileId = Type::where('name', 'profile')->first()->id;
        $validatedData['type_id'] = $typeProfileId;
        $validatedData['category_id'] = $BannerCategoryId;
        $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('file'));
        $validatedData['user_id'] = Auth::user()->id;
        Content::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/banner');
    }

    function bannerEdit($id){
        $data = Content::find($id);
        return view('admin.pages.banner.edit', [
            'data' => $data
        ]);
    }

    function bannerUpdate(Request $request, $id)
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
                'detail' => 'required'
            ]);
        }
        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/banner');
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
        return redirect('/admin/profile');
    }

    function linkterkaitIndex(){
        $profilepejabatstruktural = Content::latest()
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', 'link terkait');
            })->filter(request(['search']))
            ->paginate(5);
        return view('admin.pages.linkterkait.index', [
            'data' => $profilepejabatstruktural
        ]);
    }

    function linkterkaitCreate()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('admin.pages.linkterkait.create', [
            'categories' => $categories,
            'types' => $types
        ]);
    }

    function linkterkaitDestroy($id)
    {
        $data = Content::find($id);
        $fileName = $this->FirebaseMethods->extractNameFromUrl($data->url_file);
        $this->FirebaseMethods->deleteFile($fileName);
        $data->delete();
        Alert::success('SUCCESS', 'Data berhasil dihapus');
        return redirect('/admin/linkterkait');
    }

    function linkterkaitStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required',
            'file' => 'required',
        ]);
        $BannerCategoryId = Category::where('name', 'link terkait')->first()->id;
        $typeProfileId = Type::where('name', 'profile')->first()->id;
        $validatedData['type_id'] = $typeProfileId;
        $validatedData['category_id'] = $BannerCategoryId;
        $validatedData['url_file'] = $this->FirebaseMethods->upload($request->file('file'));
        $validatedData['user_id'] = Auth::user()->id;
        Content::create($validatedData);
        Alert::success('SUCCESS', 'Data berhasil ditambahkan');
        return redirect('/admin/linkterkait');
    }

    function linkterkaitEdit($id){
        $data = Content::find($id);
        return view('admin.pages.linkterkait.edit', [
            'data' => $data
        ]);
    }

    function linkterkaitUpdate(Request $request, $id)
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
                'detail' => 'required'
            ]);
        }
        $data->update($validatedData);
        Alert::success('SUCCESS', 'Data berhasil diubah');
        return redirect('/admin/linkterkait');
    }
}
