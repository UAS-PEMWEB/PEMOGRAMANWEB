<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BkbkkkController;
use App\Http\Controllers\BpppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilePejabatController;
use App\Http\Controllers\TentangPPIDController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ListContentControllrer;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\OrganitationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePejabatStruktural;
use App\Http\Controllers\DaftarInformasiPublikController;
use App\Http\Controllers\DaftarInformasiDikecualikanController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\ListVillageController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\IndexPageAdminController;
use App\Http\Controllers\TugasPokokdanFungsiController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BabukaProductController;
use App\Http\Controllers\MovieController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/', [LandingPageController::class, 'index'])->name('ladingPage');
    Route::get('/gallery/{id}', [LandingPageController::class, 'show'])->name('gallery.show');
    Route::post('/suggestions', [SuggestionController::class, 'store'])->name('suggestion.store');
    Route::get('/artikel', [ContentController::class, 'artikelpage'])->name('artikel.index');
    Route::get('/artikel/{category}', [ContentController::class, 'showByCategory'])->name('artikel.category');
    Route::get('/artikel-detail/{id}', [ContentController::class, 'showartikel'])->name('artikel.showartikel');

    Route::get('/announcement/{id}', 'LandingPageController@showannouncement')->name('announcement.show');
    Route::get('/pengumuman', [LandingPageController::class, 'pengumuman'])->name('pengumuman.index');
    Route::get('/detail_pengumuman/detail/{id}', [LandingPageController::class, 'detailPengumuman'])->name('detail-pengumuman');
    Route::get('/pengumuman/{category}', [LandingPageController::class, 'showByCategory'])->name('pengumuman.category');
    Route::get('/agenda', [LandingPageController::class, 'agenda'])->name('agenda.index');
    Route::get('/detail_agenda/detail/{id}', [LandingPageController::class, 'detailAgenda'])->name('detail-agenda');
    Route::get('/agenda/{category}', [LandingPageController::class, 'showByAgenda'])->name('agenda.category');
    Route::get('/admin/members', [MemberController::class, 'index']);
    Route::get('/data-pegawai', [MemberController::class, 'dataPegawai']);
    Route::get('/struktur-organisasi', [OrganitationController::class, 'index'])->name('struktur-organisasi');

    Route::get('/error-404', function () {
        return view('error-404');
    })->name('error-404');
    Route::get('/error-500', function () {
        return view('error-500');
    })->name('error-500');
    Route::get('/reset-password', function () {
        return view('reset-password');
    })->name('reset-password');
    Route::get('/password-recovery', function () {
        return view('password-recovery');
    })->name('password-recovery');
    Route::get('/categories', function () {
        return view('categories');
    })->name('categories');
    Route::get('/types', function () {
        return view('types');
    })->name('types');
    Route::get('/blank-page', function () {
        return view('blank-page');
    })->name('blank-page');

    Route::get('/about-us', [AboutUsController::class, 'index'])->name('about_us');
    Route::get('/tentang-ppid', [TentangPPIDController::class, 'index'])->name('tentang_ppid');
    Route::get('/daftar-info-public', [DaftarInformasiPublikController::class, 'index'])->name('daftarinformasipublic');
    Route::get('/tugas-pokok-fungsi', [TugasPokokdanFungsiController::class, 'index'])->name('tugaspokokdanfungsi');
    Route::get('/daftar-info-kecuali', [DaftarInformasiDikecualikanController::class, 'index'])->name('daftarinformasikecuali');

    Route::get('/profile-pejabat', [ProfilePejabatController::class, 'index'])->name('profile_pejabat');

    Route::get('/data-babuka', [BabukaProductController::class, 'indexPage'])->name('babuka.index');
    Route::get('/data-babuka/{id}', [BabukaProductController::class, 'show'])->name('babuka.show');
    Route::get('/data-babuka/kampungkb/{id}', [BabukaProductController::class, 'showKampung'])->name('babuka.kampungkb');
    Route::post('/daftar-babuka', [BabukaProductController::class, 'store'])->name('babuka.store');
    Route::get('/daftar-babuka', [BabukaProductController::class, 'create'])->name('babuka.create');

    Route::get('/galeri', [GalleryController::class, 'indexpage'])->name('galeri.indexpage');

    Route::get('/movie', [MovieController::class, 'indexpage'])->name('movie.indexpage');
    Route::get('/bidangDPPKB', [LandingPageController::class, 'BidangDPPKB'])->name('bidangDPPKB.indexpage');

    Route::get('/layanan/bppp', [BpppController::class, 'index'])->name('bppp');

    Route::get('/dokumen', function () {
        return view('dokumen');
    })->name('dokumen');

    Route::get('/layanan/bkbkkk', [BkbkkkController::class, 'index'])->name('bkbkkk');

    Route::get('/hub-kami', function () {
        return view('hub-kami');
    })->name('hub-kami');

    Route::get('/list-content', [ListContentControllrer::class, 'index'])->name('list-content');
    Route::get('/list-content/{category}', [ListContentControllrer::class, 'showByCategory'])->name('list-content.category');
});


Route::post('/auth/login', [AuthController::class, 'authenticate'])->name('authenticate_login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('authenticate_logout');
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/bppp', [BpppController::class, 'bpppAdmin'])->name('bppp_admin');
        Route::put('/bppp/{id}', [BpppController::class, 'update'])->name('bppp_update_admin');

        Route::get('/bkbkkk', [BkbkkkController::class, 'bkbkkkAdmin'])->name('bkbkkk_admin');
        Route::put('/bkbkkk/{id}', [BkbkkkController::class, 'update'])->name('bkbkkk_update_admin');

        Route::get('/profile', [ProfileController::class, 'profileAdmin'])->name('profile_admin');
        Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile_update_admin');
        Route::get('/tentangppid', [TentangPPIDController::class, 'tentangppidAdmin'])->name('tentang_ppid');
        Route::put('/tentangppid/{id}', [TentangPPIDController::class, 'update'])->name('tentang_update_admin');
        Route::get('/organitations', [OrganitationController::class, 'oraganitationAdmin'])->name('organitation_admin');
        Route::put('/organitations/{id}', [OrganitationController::class, 'update'])->name('organitation_update_admin');
        Route::get('/profilepejabatstruktural', [ProfilePejabatStruktural::class, 'profilepejabatrstrukturalAdmin'])->name('profilepejabatrstruktural_admin');
        Route::post('/profilepejabatstruktural', [ProfilePejabatStruktural::class, 'store'])->name('profilepejabatstruktural_store_admin');
        Route::get('/profilepejabatstruktural/create', [ProfilePejabatStruktural::class, 'create'])->name('profilepejabatstruktural_create_admin');
        Route::put('/profilepejabatstruktural/{id}', [ProfilePejabatStruktural::class, 'update'])->name('profilepejabatstruktural_update_admin');
        Route::delete('/profilepejabatstruktural/{id}/delete', [ProfilePejabatStruktural::class, 'destroy'])->name('profilepejabatstruktural_delete_admin');
        Route::get('/profilepejabatstruktural/{id}', [ProfilePejabatStruktural::class, 'edit'])->name('profilepejabatstruktural_edit_admin');

        Route::get('/daftarinformasipublik', [DaftarInformasiPublikController::class, 'daftarinformasipublikAdmin'])->name('daftarinformasipublik_admin');
        Route::put('/daftarinformasipublik/{id}', [DaftarInformasiPublikController::class, 'update'])->name('daftarinformasipublik_update_admin');
        Route::get('/daftarinformasipublik/{id}', [DaftarInformasiPublikController::class, 'edit'])->name('daftarinformasipublik_edit_admin');

        Route::get('/tugaspokokdanfungsi', [TugasPokokdanFungsiController::class, 'tugaspokokdanfungsiAdmin'])->name('tugaspokokdanfungsi_admin');
        Route::put('/tugaspokokdanfungsi/{id}', [TugasPokokdanFungsiController::class, 'update'])->name('tugaspokokdanfungsi_update_admin');
        Route::get('/tugaspokokdanfungsi/{id}', [TugasPokokdanFungsiController::class, 'edit'])->name('tugaspokokdanfungsi_edit_admin');

        Route::get('/daftarinformasidikecualikan', [DaftarInformasiDikecualikanController::class, 'daftarinformasidikecualikanAdmin'])->name('daftarinformasidikecualikan_admin');
        Route::put('/daftarinformasidikecualikan/{id}', [DaftarInformasiDikecualikanController::class, 'update'])->name('daftarinformasidikecualikan_update_admin');
        Route::get('/daftarinformasidikecualikan/{id}', [DaftarInformasiDikecualikanController::class, 'edit'])->name('daftarinformasidikecualikan_edit_admin');


        Route::get('/suggestions', [SuggestionController::class, 'index'])->name('suggestions_admin');
        Route::delete('/suggestions/{id}/delete', [SuggestionController::class, 'destroy'])->name('suggestions_delete_admin');

        Route::post('/contents', [ContentController::class, 'store'])->name('contents_store_admin');
        Route::get('/contents/create', [ContentController::class, 'create'])->name('contents_create_admin');
        Route::get('/contents/{id}', [ContentController::class, 'edit'])->name('contents_edit_admin');
        Route::put('/contents/{id}', [ContentController::class, 'update'])->name('contents_update_admin');
        Route::get('/contents', [ContentController::class, 'index'])->name('contents_admin');
        Route::delete('/contents/{id}/delete', [ContentController::class, 'destroy'])->name('contents_delete_admin');

        Route::post('/banner', [ProfileController::class, 'bannerStore'])->name('banner_store_admin');
        Route::get('/banner/create', [ProfileController::class, 'bannerCreate'])->name('banner_create_admin');
        Route::get('/banner/{id}', [ProfileController::class, 'bannerEdit'])->name('banner_edit_admin');
        Route::put('/banner/{id}', [ProfileController::class, 'bannerUpdate'])->name('banner_update_admin');
        Route::get('/banner', [ProfileController::class, 'bannerIndex'])->name('banner_admin');
        Route::delete('/banner/{id}/delete', [ProfileController::class, 'bannerDestroy'])->name('banner_delete_admin');

        Route::post('/linkterkait', [ProfileController::class, 'linkterkaitStore'])->name('linkterkait_store_admin');
        Route::get('/linkterkait/create', [ProfileController::class, 'linkterkaitCreate'])->name('linkterkait_create_admin');
        Route::get('/linkterkait/{id}', [ProfileController::class, 'linkterkaitEdit'])->name('linkterkait_edit_admin');
        Route::put('/linkterkait/{id}', [ProfileController::class, 'linkterkaitUpdate'])->name('linkterkait_update_admin');
        Route::get('/linkterkait', [ProfileController::class, 'linkterkaitIndex'])->name('linkterkait_admin');
        Route::delete('/linkterkait/{id}/delete', [ProfileController::class, 'linkterkaitDestroy'])->name('linkterkait_delete_admin');

        Route::post('/visi', [VisiController::class, 'store'])->name('visi_store_admin');
        Route::get('/visi/create', [VisiController::class, 'create'])->name('visi_create_admin');
        Route::get('/visi/{id}', [VisiController::class, 'edit'])->name('visi_edit_admin');
        Route::put('/visi/{id}', [VisiController::class, 'update'])->name('visi_update_admin');
        Route::get('/visi', [VisiController::class, 'index'])->name('visi_admin');
        Route::delete('/visi/{id}/delete', [VisiController::class, 'destroy'])->name('visi_delete_admin');

        Route::post('/misi', [MisiController::class, 'store'])->name('misi_store_admin');
        Route::get('/misi/create', [MisiController::class, 'create'])->name('misi_create_admin');
        Route::get('/misi/{id}', [MisiController::class, 'edit'])->name('misi_edit_admin');
        Route::put('/misi/{id}', [MisiController::class, 'update'])->name('misi_update_admin');
        Route::get('/misi', [MisiController::class, 'index'])->name('misi_admin');
        Route::delete('/misi/{id}/delete', [MisiController::class, 'destroy'])->name('misi_delete_admin');

        Route::get('/users', [UserController::class, 'index'])->name('users_admin');
        Route::get('/users/create', [UserController::class, 'create'])->name('users_create_admin');
        Route::get('/users/{id}', [UserController::class, 'edit'])->name('users_edit_admin');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users_update_admin');
        Route::delete('/users/{id}/delete', [UserController::class, 'destroy'])->name('users_delete_admin');
        Route::post('/users', [UserController::class, 'store'])->name('users_store_admin');

        Route::get('/categories', [CategoryController::class, 'index'])->name('categories_admin');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories_create_admin')->middleware('auth');
        Route::get('/categories/{id}', [CategoryController::class, 'edit'])->name('categories_edit_admin');
        Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories_update_admin');
        Route::delete('/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories_delete_admin');
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories_store_admin');

        Route::get('/members', [MemberController::class, 'index'])->name('members_admin');
        Route::get('/members/create', [MemberController::class, 'create'])->name('members_create_admin')->middleware('auth');
        Route::get('/members/{id}', [MemberController::class, 'edit'])->name('members_edit_admin');
        Route::put('/members/{id}', [MemberController::class, 'update'])->name('members_update_admin');
        Route::delete('/members/{id}/delete', [MemberController::class, 'destroy'])->name('members_delete_admin');
        Route::post('/members', [MemberController::class, 'store'])->name('members_store_admin');

        Route::get('/types', [TypeController::class, 'index'])->name('types_admin');
        Route::get('/types/create', [TypeController::class, 'create'])->name('types_create_admin')->middleware('auth');
        Route::get('/types/{id}', [TypeController::class, 'edit'])->name('types_edit_admin');
        Route::put('/types/{id}', [TypeController::class, 'update'])->name('types_update_admin');
        Route::delete('/types/{id}/delete', [TypeController::class, 'destroy'])->name('types_delete_admin');
        Route::post('/types', [TypeController::class, 'store'])->name('types_store_admin');

        Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries_admin');
        Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries_create_admin')->middleware('auth');
        Route::get('/galleries/{id}', [GalleryController::class, 'edit'])->name('galleries_edit_admin');
        Route::put('/galleries/{id}', [GalleryController::class, 'update'])->name('galleries_update_admin');
        Route::delete('/galleries/{id}/delete', [GalleryController::class, 'destroy'])->name('galleries_delete_admin');
        Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries_store_admin');

        Route::get('/products', [ProductController::class, 'index'])->name('products_admin');
        Route::get('/products/create', [ProductController::class, 'create'])->name('products_create_admin')->middleware('auth');
        Route::get('/products/{id}', [ProductController::class, 'edit'])->name('products_edit_admin');
        Route::put('/products/{id}', [ProductController::class, 'update'])->name('products_update_admin');
        Route::delete('/products/{id}/delete', [ProductController::class, 'destroy'])->name('products_delete_admin');
        Route::post('/products', [ProductController::class, 'store'])->name('products_store_admin');

        Route::get('/list-villages', [ListVillageController::class, 'index'])->name('list-villages.index');
        Route::get('/list-villages/create', [ListVillageController::class, 'create'])->name('list-villages.create');
        Route::get('/list-villages/{id}', [ListVillageController::class, 'edit'])->name('list-villages_edit_admin');
        Route::put('/list-villages/{id}', [ListVillageController::class, 'update'])->name('list-villages_update_admin');
        Route::delete('/list-villages/{id}/delete', [ListVillageController::class, 'destroy'])->name('list-villages_delete_admin');
        Route::post('/list-villages', [ListVillageController::class, 'store'])->name('list-villages_store_admin');
        Route::get('/', [IndexPageAdminController::class, 'indexAdminPage'])->name('index-admin');

        Route::get('/babukaproducts', [BabukaProductController::class, 'index'])->name('babukas_admin');
        Route::get('/babukaproducts/approved', [BabukaProductController::class, 'approvedpage'])->name('babukasapprove_admin');
        Route::get('/babukaproducts/pending', [BabukaProductController::class, 'pendingpage'])->name('babukaspending_admin');
        Route::delete('/babukaproducts/{id}/delete', [BabukaProductController::class, 'destroy'])->name('babukas_delete_admin');
        Route::get('/babukaproducts/{id}', [BabukaProductController::class, 'approveProduct'])->name('approve.product');
        Route::get('/babukaproducts/{id}/unapprove', [BabukaProductController::class, 'unapproveProduct'])->name('unapprove.product');

    });
});
