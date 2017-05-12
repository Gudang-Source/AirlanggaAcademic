@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Prestasi
@endsection

@section('contentheader_title')
Prestasi
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
  <a href="{{url('/mahasiswa/prestasi/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Prestasi</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Prestasi</th>      
      <th style="text-align:center">Tahun Kegiatan</th>
      <th style="text-align:center">Kelompok Kegiatan</th>
      <th style="text-align:center">Jenis Kegiatan</th>
      <th style="text-align:center">Penyelenggara</th>
      <th style="text-align:center">Tingkat</th>
      <th style="text-align:center">File Prestasi</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($prestasi as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$bio->prestasi}}</td>
      <td width="15%" style="text-align:center">{{$bio->tahun_kegiatan}}</td>
      <td width="10%" style="text-align:center">{{$bio->kelompok_kegiatan}}</td>
      <td width="20%" style="text-align:center">{{$bio->jenis_kegiatan}}</td>
      <td width="10%" style="text-align:center">{{$bio->penyelenggara}}</td>
      <td width="10%" style="text-align:center">{{$bio->tingkat}}</td>
      <td width="10%" style="text-align:center">{{$bio->file_prestasi}}</td>
      @if (($bio->ps_is_verified)==0)
      <td width="10%" style="text-align:center">Process</td>
      @elseif (($bio->ps_is_verified)==1)
      <td width="10%" style="text-align:center">Approved</td>
      @else
      <td width="10%" style="text-align:center">Rejected</td>
      @endif

       @if (($bio->ps_is_verified)==0)
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus data prestasi ini?');" href="{{url('/mahasiswa/prestasi/'.$bio->id_prestasi.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/mahasiswa/prestasi/'.$bio->id_prestasi.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
      </td>
      @else
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus data prestasi ini?');" href="{{url('/mahasiswa/prestasi/'.$bio->id_prestasi.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
      </td>    
      @endif
    </tr>
     @empty
        <tr>
          <td colspan="9"><center>Belum ada data Prestasi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection