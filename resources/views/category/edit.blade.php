@extends('layouts.base')
@section('category', 'active')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <form action="{{route('category.update',$category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama category</label>
                <input type="text" name="nama" value="{{$category->nama}}" class="form-control" placeholder="...">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection