@extends('layout')

@section('content')

<div class="table-responsive">
<table class="table table-hover table-secondary mt-5 ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($mahas as $maha)
           <tr>
            <td scope="col">{{$loop->iteration}}</td>
            <td scope="col">{{$maha->nim}}</td>
            <td scope="col">{{$maha->nama}}</td>
            <td scope="col">{{$maha->alamat}}</td>
            <td scope="col">{{$maha->prodis->prodi}}</td>
           <td scope="col"> <a class= "btn btn-outline-primary" href="/mahasiswa/{{$maha->id}}/edit" role="button">Edit</a></td>
            <td scope="col">
                <form action="/mahasiswa/{{$maha->id}}" method="POST">
                  @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger" value="Delete">Delete</button>
                </form>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
</div>

<div class="text-center">

<a class="btn btn-primary" href="mahasiswa/create">Tambah</a>
</div>
@endsection