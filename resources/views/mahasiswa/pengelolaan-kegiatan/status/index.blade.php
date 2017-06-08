 @extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Daftar Kegiatan Akademik
@endsection

@section('contentheader_title')
Daftar Kegiatan Akademik
@endsection

@section('main-content')
<!-- include summernote css/js-->
<h2>Proposal Kegiatan Akademik Sedang Diajukan
</h2>


<!--untuk pengajuan sedang diproses-->
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Kegiatan</th>
      <th style="text-align:center">Tanggal Pengajuan</th>
      <th style="text-align:center">Poster</th>
      <th style="text-align:center">Action</th>

    </tr>
    </thead>
  <tbody>
   @forelse($Status as $i => $pen) 
    <tr>
      <td width="10%" style="text-align:center">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$pen->nama}}</td>
      <td width="10%" style="text-align:center">{{$pen->tglpengajuan}}</td>
      <td width="45%" style="text-align:center"><img src="{{URL::asset('/img/pengajuan/'.$pen->url_poster)}}" height="100px" width="100px" hspace="5px" vspace="2px"></td>
      <td width="20%" style="text-align:center">
      @if($pen->konfirmasi_proposal==2)
      <a href="{{url('/mahasiswa/pengelolaan-kegiatan/detail-pengajuan/'.$pen->id_kegiatan)}}" class="btn btn-success btn-xs"> Revisi</a>
      @endif
        <a href="{{url('/mahasiswa/pengelolaan-kegiatan/detail-pengajuan/'.$pen->id_kegiatan)}}" class="btn btn-success btn-xs"> View Detail</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Pengajuan Proposal Kegiatan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>


<h2>LPJ Kegiatan Akademik Sedang Diajukan
</h2>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Kegiatan</th>
      <th style="text-align:center">Tanggal Pelaksanaan</th>
      <th style="text-align:center">Poster</th>
      <th style="text-align:center">Action</th>

    </tr>
    </thead>
  <tbody>
   @forelse($StatusLPJ as $i => $pen) 
    <tr>
      <td width="10%" style="text-align:center">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$pen->nama}}</td>
      <td width="10%" style="text-align:center">{{$pen->tglpelaksanaan}}</td>
      <td width="45%" style="text-align:center"><img src="{{URL::asset('/img/pengajuan/'.$pen->url_poster)}}" height="100px" width="100px" hspace="5px" vspace="2px"></td>
      <td width="20%" style="text-align:center">
      @if($pen->konfirmasi_proposal==1)
      @if($pen->konfirmasi_lpj==3)
      <a href="{{url('/mahasiswa/pengelolaan-kegiatan/detail-pengajuan/'.$pen->id_kegiatan)}}" class="btn btn-success btn-xs"> Revisi</a>
      @endif
      @endif
        <a href="{{url('/mahasiswa/pengelolaan-kegiatan/detail-pengajuan/'.$pen->id_kegiatan)}}" class="btn btn-success btn-xs"> View Detail</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Pengajuan LPJ Kegiatan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>
@endsection

@section('code-footer')

@endsection