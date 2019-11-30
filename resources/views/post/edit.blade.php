@extends('layouts.base')
@section('write post', 'active')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <form action="{{route('post.update', $post->id)}}" method="POST">
            {{ @csrf_field() }}
            {{ @method_field('PATCH') }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="" value="{{$post->title}}">
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                        @if ($category->id == $post->category_id)
                            selected
                        @endif
                        >
                            {{$category->nama}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea type="text" name="content" rows="5" class="form-control" placeholder="">{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection