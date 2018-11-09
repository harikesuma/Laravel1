@extends('layout')

@section('title','Tambah Mahasiswa')
    
@section('content')

<div class="container">
        <div class="card card border-primary mb-3 mt-4">
                <div class="card-header bg-transparent border-primary text-primary text-center">
                  Tambah Data Mahasiswa
                </div>
                <div class="card-body text-primary">
                  <form action="/mahasiswa/{{$mahaedit->id}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                       <label for="colFormLabel" class="col-sm-2 col-form-label">NIM</label>
                       <div class="col-sm-10">
                       <input type="number" name="nim" class="form-control" id="colFormLabel" value="{{$mahaedit->nim}}" required>
                       </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="colFormLabel" value="{{$mahaedit->nama}}" required>
                        </div>
                       </div>
                       <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" id="colFormLabel" value="{{$mahaedit->alamat}}" required>
                        </div>
                       </div>
                       <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="prodi" required>
                                @foreach ($prodis as $prodi)
                                <option value="{{ $prodi->id }}" @if ($mahaedit->prodis_id == $prodi->id)
                                  selected                    
                                @endif>{{ $prodi->prodi }}</option>
                                 @endforeach
                                 //dinamis dengan prodi baru
                            </select>
                            <div class="invalid-feedback">Maaf Input Salah</div>
                          </div>
                        </div>
                     
                       <div class="text-center">
                       <button type="submit" class="btn btn-primary mb-2">Submit</button>
                      </div>
                 </form>
                </div>
              </div>
</div>
@endsection