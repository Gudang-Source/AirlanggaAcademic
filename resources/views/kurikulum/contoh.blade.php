@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<<<<<<< HEAD
<p> halo </p>
=======
<<<<<<< HEAD
<div class="box box-info">
            
            <div class="box-body">

              <form action="<?php echo base_url()."index.php/C_Surat/MasukanNoRubrik";?>" method="post" class="form-horizontal">
              <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="kepada" >Kepada :</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kepada" placeholder="" required>
                    </div>
                  </div>
                  
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="b_backdate" >Jenis Surat :</label>
                    <div class="col-sm-9">
                              <select class="form-control" name="jenis_surat" required>
                              <option value="" >Pilih Jenis Surat</option>
                              <option value="1" selected>Biasa</option>
                              <option value="2">Rahasia</option>
                            </select>
               
                    </div>
                 </div>
                
              </div>
              </div>
              <div class="row">
              <div class="col-sm-6">
              <div class="form-group">
                    <label class="control-label col-sm-2" for="perihal" >Perihal :</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="perihal" placeholder="" required>
                    </div>
                 </div>
                 </div></div>


                 <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="kirim">Kirim
               </button>
            </div>
              </form>
            </div>
           
          </div>
=======
<p> halo </p>
>>>>>>> 2c1eedec33a56715f523b130714d4dac1d9f56d7
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
@endsection

@section('code-footer')




@endsection