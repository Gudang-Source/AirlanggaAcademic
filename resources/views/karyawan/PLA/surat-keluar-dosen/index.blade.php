@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Surat Keluar
@endsection

@section('contentheader_title')
Surat Keluar
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
<!--<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah 
  <a href="{{url('karyawan/surat-keluar-dosen/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Surat</a>
</div>-->
<div style="padding:10px">
<table id="data-table" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th width="5%" style="text-align:center">No.</th>
      <th style="text-align:center">NIP Dosen</th>    
      <th style="text-align:center">NIP Petugas</th>
      <th style="text-align:center">Perihal Surat</th>
      <th style="text-align:center">Tanggal Pengajuan</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($surat_keluar_dosen as $i => $surat) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$surat->nip_id}}</td>
      <td width="15%" style="text-align:center">{{$surat->nip_petugas_id}}</td>
      <td width="10%" style="text-align:center">{{$surat->nama}}</td>
      <td width="10%" style="text-align:center">{!!App\Helpers\GeneralHelper::indonesianDateFormat($surat->tgl_upload)!!}</td>
      @if($surat->status == 0)
      <td width="10%" style="text-align:center">Belum Selesai</td>
      @elseif ($surat->status == 1)
      <td width="10%" style="text-align:center">Sudah Selesai</td>
      @else 
      <td width="10%" style="text-align:center">Tidak Disetujui</td>
      @endif
      <td width="20%" style="text-align:center" >
        <a onclick="return confirm('Anda yakin untuk menghapus surat ini?');" href="{{url('karyawan/surat-keluar-dosen/'.$surat->id_surat_keluar.'/delete/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <!--<a href="{{url('karyawan/pla/surat-keluar-dosen/'.$surat->id_surat_keluar.'/edit/')}}" class="btn btn-info btn-xs">
        <i class="fa fa-pencil-square-o"></i> Verifikasi</a>-->
        @if($surat->status == 0)
        <a href="{{url('karyawan/surat-keluar-dosen/'.$surat->id_surat_keluar.'/agree/')}}" class="btn btn-success btn-xs">
        <i class="fa fa-pencil-square-o"></i> Disetujui</a>
        <a href="{{url('karyawan/surat-keluar-dosen/'.$surat->id_surat_keluar.'/disagree/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-pencil-square-o"></i> Tidak Disetujui</a>
        @endif
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="7"><center>Belum ada surat</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $('#data-table').DataTable(); 
    }); 
</script> 
@endsection