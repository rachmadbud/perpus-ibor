@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-tittle">Tambah Data Penulis</h3>
        </div>

        <div class="box-body">
        <form action="{{route('admin.book.store')}}" method="POST">
                @csrf

            <div class="form-group  @error('name') has-error @enderror">
                <label for="">Nama</label>
                <input type="text" name="name" class="form-control"
                placeholder="Masukan nama penulis" value="{{ old ('name')}}">
                @error('name')
            <span class="help-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="from-group">
                <input type="submit" value="Tambah" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
@endsection