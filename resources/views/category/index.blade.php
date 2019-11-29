@extends('layouts.base')
@section('category', 'active')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
        <i class="fas fa-table"></i>
        Tabel Kategori
        <a href="{{route('category.create')}}" class="float-right btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th width="1">Id</th>
                <th>Nama</th>
                <th>Slug</th>
                <th width="1">Edit</th>
                <th width="1">Delete</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach($kategori as $value)
                <tr>
                    <td width="1">{{$value->id}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->slug}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('category.edit',$value->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                        </div>
                    </td>

                    <td>
                        <div class="btn-group">
                            <form action="{{ route('category.destroy', $value->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

    </div>

</div>
@endsection