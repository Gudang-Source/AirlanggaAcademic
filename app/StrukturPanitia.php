<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrukturPanitia extends Model
{
   protected $table = 'mhs_kegiatan'; 
   protected $primaryKey ='kegiatan_id';      
   protected $fillable = [
   		'kegiatan_id', 
   		'nim_id',
		'jabatan_id',
   ];

   public function jabatan()
{
	# code...
	return $this->belongsTo('App\JabatanPanitia','jabatan_id');
}

   public function pengajuanKegiatan()
{
	# code...
	return $this->belongsTo('App\KonfirmasiKegiatan','kegiatan_id');
}

   public function mahasiswa()
{
	# code...
	return $this->belongsTo('App\MahasiswaPanitia','nim_id');
}
}