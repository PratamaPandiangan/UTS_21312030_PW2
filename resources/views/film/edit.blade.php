@extends('layout.master')

@section('judul')
Edit Film
@endsection

@section('content')
<form method="post" action="/film/{{$film->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" value="" class="form-control">
    </div>
    @error('judul')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Ringkasan</label>
        <textarea class="form-control" name="ringkasan"> </textarea>
    </div>
    @error('ringkasan')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Tahun</label>
        <input type="text" name="tahun" value="" class="form-control">
    </div>
    @error('tahun')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Poster</label>
        <input type="text" name="poster" value="" class="form-control">
    </div>
    @error('poster')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Genre</label>
        <input type="text" name="gerne_id" value="" class="form-control">
    </div>
    @error('genre_id')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror



    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection