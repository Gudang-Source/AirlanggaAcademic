<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

	Route::get('/approve', function () {
    return view('krs-khs/approve');
});
	Route::get('/approve1', function () {
    return view('krs-khs/approve1');
});

	Route::get('/buka', function () {
    return view('krs-khs/buka');
});

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::get('/dosen/penelitian/penelitian',function()
{ return view('dosen.penelitian.penelitian'); 
});

     Route::get('/monsi/form-editskripsi', function () {
    return view('monsi.form-editskripsi');
});
     Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');
});
     Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');
});

    
    Route::get('/dosen/jurnal/', function () {
    return view('dosen.jurnal.jurnal');
});
    Route::get('/dosen/jurnal/create', function () {
    return view('dosen.jurnal.create');
});
    Route::get('/dosen/jurnal/edit', function () {
    return view('dosen.jurnal.edit');
});
    
    

Route::get('/dosen/penelitian/create',function()
{ return view('dosen.penelitian.create'); 
});
Route::get('/dosen/penelitian/edit',function()
{ return view('dosen.penelitian.edit'); 
});


    Route::get('/krs-khs/form_khs', function () {
    return view('krs-khs.form_khs');
    });
    Route::get('/krs-khs/histori_nilai', function () {
    return view('krs-khs.histori_nilai');
    });
    Route::get('/krs-khs/detail_nilai_RPL', function () {
    return view('krs-khs.detail_nilai_RPL');
    });
    Route::get('/krs-khs/detail_nilai_BD', function () {
    return view('krs-khs.detail_nilai_BD');
    });
    Route::get('/krs-khs/krs', function () {
    return view('krs-khs/contoh');
    });
     Route::get('/monsi/form-dataskripsi', function () {

    Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
    Route::get('index-maintenance', 'MaintenanceController@index');
	Route::get('view-maintenance', 'MaintenanceController@viewDetail');


    
     Route::get('/monsi/form-dataskripsi', function () {
    return view('monsi.form-dataskripsi');
  });
    Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('view-peminjaman', 'PeminjamanController@viewDetail');


    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');

    Route::get('/krs-khs/krs', function () {
    return view('krs-khs/contoh');
    });
    Route::get('/monsi/form-dataskripsi', function () {
    return view('monsi.form-dataskripsi');
    });
    Route::get('/dosen/penelitian', function () {
    return view('dosen.penelitian.create');
    });

    Route::get('/monsi/form_uploadskripsi', function () {
    return view('monsi.form_uploadskripsi');
    });
    Route::get('/monsi/tabel_judul', function () {
    return view('monsi.tabel_judul');
    });
    Route::get('/monsi/download_file', function (){
    return view('monsi.download_file');
    });
    Route::get('/monsi/notif_uploadberhasil', function (){
    return view('monsi.notif_uploadberhasil');
    });
    Route::get('/monsi/notif_uploadgagal', function (){
    return view('monsi.notif_uploadgagal');
    });

    Route::get('/monsi/upload-bimbingan', function () {
    return view('monsi.upload-bimbingan');

    });

    Route::get('/monsi/view-bimbingan', function () {
    return view('monsi.view-bimbingan');

    });



    Route::get('/monsi/tabel-mhs2', function () {
    return view('monsi.tabel-mhs2');
    });

    Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
    Route::get('index-maintenance', 'MaintenanceController@index');
    Route::get('view-maintenance', 'MaintenanceController@viewDetail');

    Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('view-peminjaman', 'PeminjamanController@viewDetail');

    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');

     

    Route::get('/monsi/tabel-mhs', function () {
    return view('monsi.tabel-mhs');
    });
    Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');
    });



});
});
