@extends('layouts.base')
@section('write post', 'active')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <form action="{{route('post.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="">
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{$category->nama}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea type="text" name="content" rows="5" class="form-control" placeholder=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection