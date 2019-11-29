@extends('layouts.base')
@section('category', 'active')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <form action="{{route('category.update',$kategori->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" name="nama" value="{{$kategori->nama}}" class="form-control" placeholder="...">
            </div>

            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" value="{{$kategori->slug}}" class="form-control" placeholder="...">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection