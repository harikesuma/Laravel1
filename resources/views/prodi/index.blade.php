@extends('layout')

@section('content')
<div class="table-responsive">
    <table class="table table-hover table-secondary mt-5 ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($prodis as $prodi)
              <tr>
              <th>{{$loop->iteration}}</th>
              <th>{{$prodi->prodi}}</th>
              <td scope="col"> <a class= "btn btn-outline-primary" href="/prodi/{{$prodi->id}}/edit" role="button">Edit</a></td>
              <td scope="col">
                  <form action="/prodi/{{$prodi->id}}" method="POST">
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

    <a class="btn btn-primary" href="prodi/create">Tambah</a>
    </div>
@endsection