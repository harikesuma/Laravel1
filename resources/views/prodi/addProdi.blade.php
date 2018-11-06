@extends('layout')

@section('title','Tambah Program Studi')
    
@section('content')

<div class="container">
        <div class="card card border-primary mb-3 mt-4">
                <div class="card-header bg-transparent border-primary text-primary text-center">
                  Tambah Program Studi
                </div>
                <div class="card-body text-primary">
                  <form action="/prodi" method="POST">
                    @csrf
                    <div class="form-group row">
                       <label for="colFormLabel" class="col-sm-2 col-form-label">Program Studi</label>
                       <div class="col-sm-10">
                       <input type="text" name="prodi" class="form-control" id="colFormLabel" placeholder="Harap diisi" required>
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