@extends('layouts.base')
@section('category', 'active')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Category</label>
                <input type="text" name="nama" class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection