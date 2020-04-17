@extends ('layouts.master')

@section ('content')

	<img src="{{$siswa->getGambar()}}" class="rounded mx-auto d-block" alt="gambar" width="500" height="281"><br><br>
    <table class="table table-bordered col-sm-5" align="center">
        <tr>
          <th>Nama</th>
          <td>{{$siswa->nama_depan}} {{$siswa->nama_belakang}}</td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>{{$siswa->jenis_kelamin}}</td>
        </tr>
        <tr>
          <th>Agama</th>
          <td>{{$siswa->agama}}</td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>{{$siswa->alamat}}</td>
        </tr>
        <tr>
        	<td>
        		<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
        	</td>
        </tr>
    </table>

@endsection