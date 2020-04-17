<a href="">@extends('layouts.master')

@section('content')
		<div class="row">
			<div class="col-6">
				<h1>Data Siswa</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModalLong">
				  Tambah Data
				</button>
			</div>
		</div>
		<table class="table table-hover">
			<tr>
				<th>Gambar</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			@foreach($data_siswa as $siswa)
			<tr>
				<td><img src="{{$siswa->getGambar()}}" width="100" height="56"></td>
				<td><a href="/siswa/{{$siswa->id}}/detail">{{$siswa->nama_depan}}</a></td>
				<td><a href="/siswa/{{$siswa->id}}/detail">{{$siswa->nama_belakang}}</a></td>
				<td><a href="/siswa/{{$siswa->id}}/detail">{{$siswa->jenis_kelamin}}</a></td>
				<td><a href="/siswa/{{$siswa->id}}/detail">{{$siswa->agama}}</a></td>
				<td><a href="/siswa/{{$siswa->id}}/detail">{{$siswa->alamat}}</a></td>
				<td>
				<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/siswa/create" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Depan</label>
		    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Belakang</label>
		    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
		  </div>
		   <div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
		    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
		      <option value="L">Laki-Laki</option>
		      <option value="P">Perempuan</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Agama</label>
		    <input name="agama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Agama">
		  </div>
		   <div class="form-group">
		    <label for="exampleInputPassword1">Gambar</label>
		    <input name="gambar" type="file" class="form-control" id="exampleInputPassword1">
		   </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
      </div>
    </div>
  </div>
</div>
@endsection