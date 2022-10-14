<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get(uri:'/dosen', action:function(){
//     $list_namadsn = ["Betha", "Purwantoro", "Kamal P", "Yuyun", "Apriade", "Ratna", "Aji", "Intan", "Asep", "Arip"];
//     return view(view:'dosen')->with(key:'dsns', value:$list_namadsn);
// });

// Route::get(uri:'/mahasiswa', action:function(){
//     $list_namamhsw = ["Risa", "Radika", "Rangga", "Rifky", "Reza", "Sopiatul", "Nabila", "Naufal", "Nazwa", "Nanda"];
//     return view(view:'matakuliah')->with(key:'mhsws', value:$list_namamhsw);
// });

// Route::get(uri:'/matakuliah', action:function(){
//     $list_matakuliah = ["", "", ""];
//     return view(view:'mahasiswa')->with(key:'mks', value:$list_matakuliah);
// });

Route::get(uri:'/dosen', action:function(){
    $list_namadsn = ["Betha Nurina Sari, M.Kom.", "Purwantoro, M.Kom.", "Kamal Prihandani, M.Kom.", "Yuyun Umaidah, M.Kom.", "Apriade Voutama, M.Kom", "Ratna Mufidah, M.Kom.", "Aji Primajaya, M.Kom.", "Intan Purnamasari, M.Kom.", "Asep Jamaludin, M.Kom.", "Arip Solehudin, M.Kom."];
    return view(view:'dosen')->with(key:'dsns', value:$list_namadsn);
});

Route::get(uri:'/matakuliah', action:function(){
    $list_matkul = ["Sistem Operasi", "Data Mining", "Framework", "Basis Data", "Pemrograman Berbasis Mobile", "Pemrograman Berbasis Objek", "Kecerdasan Buatan", "Metode Numerik", "Blockchain", "Fisika Dasar"];
    return view(view:'matakuliah')->with(key:'matkuls', value:$list_matkul);
});

Route::get(uri:'/mahasiswa', action:function(){
    $list_namamhsw = ["Risa", "Radika", "Rangga", "Rifky", "Reza", "Sopiatul", "Nabila", "Naufal", "Nazwa", "Nanda"];
    return view(view:'mahasiswa')->with(key:'mhsws', value:$list_namamhsw);
});
