@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Capaian Pembelajaran
@endsection

@section('contentheader_title')
Capaian Pembelajaran
@endsection

@section('main-content')
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>

<div style="overflow: auto">
<table id="myTable" class="table tabl0e-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Prodi</th>      
      <th style="text-align:center">Nama Kategori Capaian Pembelajaran</th>
      <th style="text-align:center">Kode Capaian Pembelajaran</th>
      <th style="text-align:center">Deskripsi</th>
    </tr>
    </thead>
  <tbody>
   @forelse($capaianpembelajaran as $i => $cp) 
    <tr>
      <td style="text-align:center" width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td style="text-align:center" width="10%" style="text-align:center">{{$cp->prodi['nama_prodi']}}</td>
      <td style="text-align:center" width="15%" style="text-align:center">{{$cp->kategori['nama_cpem']}}</td>
      <td style="text-align:center" width="20%" style="text-align:center">{{$cp->kode_cpem}}</td>
      <td style="text-align:justify" width="20%" style="text-align:center">{{$cp->deskripsi_cpem}}</td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada data</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection