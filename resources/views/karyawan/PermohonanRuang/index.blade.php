@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Permohonan Ruang
@endsection

@section('contentheader_title')
Permohonan Ruang
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
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('/karyawan/PermohonanRuang/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Permohonan Ruang</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIP Petugas</th>      
      <th style="text-align:center">Nama</th>
      <th style="text-align:center">Verifikasi</th>
      <th style="text-align:center">NIM/NIP Peminjam</th>
      <th style="text-align:center">Action</th>
      
    </tr>
    </thead>
  <tbody>
   @forelse($PermohonanRuang as $i => $PR) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$PR->nip_petugas_id}}</td>
      <td width="20%" style="text-align:center">{{$PR->nama}}</td>
       @if(($PR->atribut_verifikasi)==0)
      <td width="20%" style="text-align:center">BELUM KONFIRMASi</td>
      @else
      <td width="20%" style="text-align:center">KONFIRMASI</td>
      @endif
      <td width="20%" style="text-align:center">{{$PR->nim_nip}}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus ini?');" href="{{url('/karyawan/PermohonanRuang/'.$PR->id_permohonan_ruang.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i>Hapus</a>
        <a href="{{url('/karyawan/PermohonanRuang/'.$PR->id_permohonan_ruang.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i>Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada permohonan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection