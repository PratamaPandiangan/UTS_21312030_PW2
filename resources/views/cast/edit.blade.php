@extends('layout.master')

@section('judul')
Edit Cast
@endsection

@section('content')
<form method="post" action="/cast/{{$cast->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Umur</label>
        <input type="text" name="umur" value="{{$cast->umur}}" class="form-control">
    </div>
    @error('umur')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Bio</label>
        <textarea class="form-control" name="bio">{{$cast->bio}}</textarea>
    </div>
    @error('bio')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection