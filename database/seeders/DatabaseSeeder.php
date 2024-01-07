<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Factories\CategoryFactory;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'full_name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'username' => 'admin1',
            'phone_number' => "000000000",
            'password' => Hash::make('dppkbbandung2023'), // password
        ]);
        $userAdminId = User::where('username', 'admin1')->first()->id;

        \App\Models\Type::create([
           'name' => 'Layanan',
           'desc' => 'Type untuk bppp dan bkbkkk',
           'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'bppp',
            'desc' => 'Category untuk bppp',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'bkbkkk',
            'desc' => 'Category untuk bkbkkk',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Type::create([
            'name' => 'Profile',
            'desc' => 'Type untuk profile, visi, misi, organitations, tugas pokok dan fungsi, profile pejabat struktural, data pegawai dppkb' ,
            'user_id' =>  $userAdminId
         ]);

         \App\Models\Category::create([
            'name' => 'profile',
            'desc' => 'Category untuk profile',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'visi',
            'desc' => 'Category untuk visi',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'misi',
            'desc' => 'Category untuk misi',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'organitations',
            'desc' => 'Category untuk organitations',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'tugas pokok dan fungsi',
            'desc' => 'Category untuk tugas pokok dan fungsi',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Type::create([
            'name' => 'Profile Pejabat Struktural',
            'desc' => 'Type untuk ketua, wakil ketua, sekretaris, bendahara, dan lain-lain menngenai pejabat struktural',
            'user_id' =>  $userAdminId
         ]);

        \App\Models\Category::create([
            'name' => 'ketua',
            'desc' => 'Category untuk ketua',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'wakil ketua',
            'desc' => 'Category untuk wakil ketua',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'bendahara',
            'desc' => 'Category untuk wakil bendahara',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'sekretaris',
            'desc' => 'Category untuk wakil sekretaris',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'data pegawai dppkb',
            'desc' => 'Category untuk data pegawai dppkb',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Type::create([
            'name' => 'pengumuman',
            'desc' => 'Type untuk pengumuman' ,
            'user_id' =>  $userAdminId
         ]);

         \App\Models\Category::create([
            'name' => 'pengumuman',
            'desc' => 'Category untuk pengumuman',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Type::create([
            'name' => 'agenda',
            'desc' => 'Type untuk agenda' ,
            'user_id' =>  $userAdminId
         ]);

         \App\Models\Category::create([
            'name' => 'agenda',
            'desc' => 'Category untuk agenda',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Type::create([
            'name' => 'artikel',
            'desc' => 'Type untuk artikel' ,
            'user_id' =>  $userAdminId
         ]);

         \App\Models\Category::create([
            'name' => 'artikel',
            'desc' => 'Category untuk artikel',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Type::create([
            'name' => 'foto',
            'desc' => 'Type untuk galeri dalam bentuk foto' ,
            'user_id' =>  $userAdminId
         ]);

         \App\Models\Type::create([
            'name' => 'video',
            'desc' => 'Type untuk galeri dalam bentuk video' ,
            'user_id' =>  $userAdminId
         ]);

         \App\Models\Type::create([
            'name' => 'ppid',
            'desc' => 'Type untuk tentang ppid, daftar informasi publik, daftar informasi dikecualikan' ,
            'user_id' =>  $userAdminId
         ]);

         \App\Models\Category::create([
            'name' => 'tentang ppid',
            'desc' => 'Category untuk tentang ppid',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'link terkait',
            'desc' => 'Category untuk link terkait',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'daftar informasi publik',
            'desc' => 'Category untuk daftar informasi publik',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Category::create([
            'name' => 'daftar informasi dikecualikan',
            'desc' => 'Category untuk daftar informasi dikecualikan',
            'user_id' =>  $userAdminId
        ]);

        $typeProfileId = \App\Models\Type::where('name', 'profile')->first()->id;
        $categoryProfileId = \App\Models\Category::where('name', 'profile')->first()->id;

        \App\Models\Content::create([
            'type_id' => $typeProfileId,
            'category_id' => $categoryProfileId,
            'title' => 'Dinas Pengendalian Perencanaan Keluarga Berencana',
            'detail' => 'Ubah detail',
            'user_id' =>  $userAdminId
        ]);

        $categoryVisiId = \App\Models\Category::where('name', 'visi')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typeProfileId,
            'category_id' => $categoryVisiId,
            'title' => 'Ubah judul visi',
            'detail' => 'Ubah detail visi',
            'user_id' =>  $userAdminId
        ]);

        $categoryMisiId = \App\Models\Category::where('name', 'misi')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typeProfileId,
            'category_id' => $categoryMisiId,
            'title' => 'Ubah judul misi',
            'detail' => 'Ubah detail misi',
            'user_id' =>  $userAdminId
        ]);

        $categoryOrganitationId = \App\Models\Category::where('name', 'organitations')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typeProfileId,
            'category_id' => $categoryOrganitationId,
            'title' => 'Ubah judul Stuktur Organisasi',
            'detail' => 'Ubah detail Stuktur Organisasi',
            'user_id' =>  $userAdminId
        ]);

        $typeProfilePejabatStrukturalId = \App\Models\Type::where('name', 'profile pejabat struktural')->first()->id; 
        $categoryKetuaPejabatStrukturalId = \App\Models\Category::where('name', 'ketua')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typeProfilePejabatStrukturalId,
            'category_id' => $categoryKetuaPejabatStrukturalId,
            'title' => 'Ubah Nama',
            'detail' => 'Ubah Detail',
            'user_id' =>  $userAdminId
        ]);

        $typePpidId = \App\Models\Type::where('name', 'ppid')->first()->id;
        $categoryTentangPpidId = \App\Models\Category::where('name', 'tentang ppid')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typePpidId,
            'category_id' => $categoryTentangPpidId,
            'title' => 'Ubah judul',
            'detail' => 'Ubah detail',
            'user_id' =>  $userAdminId
        ]);

        $categoryDaftarInformasiPublikId = \App\Models\Category::where('name', 'daftar informasi publik')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typePpidId,
            'category_id' => $categoryDaftarInformasiPublikId,
            'title' => 'Ubah judul',
            'detail' => 'Ubah detail',
            'user_id' =>  $userAdminId
        ]);

        $categoryDaftarInfomasiDikecualikan = \App\Models\Category::where('name', 'daftar informasi dikecualikan')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typePpidId,
            'category_id' => $categoryDaftarInfomasiDikecualikan,
            'title' => 'Ubah judul',
            'detail' => 'Ubah detail',
            'user_id' =>  $userAdminId
        ]);

        $typeLayananId = \App\Models\Type::where('name', 'layanan')->first()->id;
        $categoryBpppId = \App\Models\Category::where('name', 'bppp')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typeLayananId,
            'category_id' => $categoryBpppId,
            'title' => 'Ubah judul',
            'detail' => 'Ubah detail',
            'user_id' =>  $userAdminId
        ]);

        $categoryBkbkkkId = \App\Models\Category::where('name', 'bkbkkk')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typeLayananId,
            'category_id' => $categoryBkbkkkId,
            'title' => 'Ubah judul',
            'detail' => 'Ubah detail',
            'user_id' =>  $userAdminId
        ]);

        \App\Models\Type::create([
            'name' => 'banner',
            'desc' => 'Type untuk banner',
            'user_id' =>  $userAdminId
         ]);

         \App\Models\Category::create([
            'name' => 'banner',
            'desc' => 'Category untuk daftar banner',
            'user_id' =>  $userAdminId
        ]);

        $typeBannerId = \App\Models\Type::where('name', 'banner')->first()->id;
        $categoryBannerId = \App\Models\Category::where('name', 'banner')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typeBannerId,
            'category_id' => $categoryBannerId,
            'title' => 'Banner',
            'detail' => 'Banner',
            'user_id' =>  $userAdminId
        ]);

        $categoryTugasPokokDanFungsiId = \App\Models\Category::where('name', 'tugas pokok dan fungsi')->first()->id;
        \App\Models\Content::create([
            'type_id' => $typeProfileId,
            'category_id' => $categoryTugasPokokDanFungsiId,
            'title' => 'Tugas Pokok dan Fungsi',
            'detail' => 'Ubah detail',
            'user_id' =>  $userAdminId
        ]);
    }
}