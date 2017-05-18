@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit capaian program
@endsection

@section('contentheader_title')
Edit capaian program
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
	<p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
	{!!Session::forget('alert-' . $msg)!!}
	@endif
	@endforeach


<div class="row">
	<div class="col-md-12">
		<div class="">

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			<form id="tambahCapaianProgram" method="post" action="{{url('/dosen/kurikulum/cp_program/'.$cp_program->id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<!-- <div class="form-group">
					<label for="id_prodi" class="col-sm-2 control-label">Id Prodi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_prodi" name="id_prodi" placeholder="Masukkan id_prodi" value="{{$cp_program->id_prodi}}" required>
					</div>
				</div> -->

				<div class="form-group">
					<label for="id_prodi" class="col-sm-2 control-label">Id Prodi</label>
					<div class="col-md-7">
						<input type="text" class="form-control input-lg" id="id_prodi" name="id_prodi" placeholder="Masukkan ID prodi" value="{{$cp_program->id}}" required>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="capaian_program_spesifik" class="col-sm-2 control-label">capaian Program Spesifik</label>
					<div class="col-md-8">
						<textarea id="capaian_program_spesifik" name="capaian_program_spesifik" placeholder=" Masukkan capaian_program_spesifik" required cols="82" rows="5" required>{{$cp_program->capaian_program_spesifik}} 
						</textarea>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="dimensi_capaian_umum" class="col-sm-2 control-label">Dimensi Capaian Umum</label>
					<div class="col-md-8">
						<textarea id="dimensi_capaian_umum" name="dimensi_capaian_umum" placeholder=" Masukkan Dimensi Capaian Umum" required cols="82" rows="5" required>{{$cp_program->dimensi_capaian_umum}} 
						</textarea>
					</div>
				</div>



				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection

