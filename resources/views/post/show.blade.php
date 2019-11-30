@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    <span>{{$post->title}}</span>
                    <span>by {{$post->user->name}}</span>
                    <span class="float-right">in {{$post->category->nama}}</span>
                    </div>

                    <div class="card-body">
                        <p>{{$post->content}}</p>
                    </div>
                </div><br>

                @foreach ($post->comment()->get() as $comment)
                <div class="card">
                    <div class="card-body">
                        <p>Komentar by {{$comment->user->name}}<p>
                        <p>{{$comment->message}}</p>
                    </div>
                </div><br>
                @endforeach

                <div class="card">
                    <div class="card-header">
                        <span>Tambahkan Komentar</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('comment.post.store', $post)}}" class="form-horizontal" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Komentar" class="btn btn-primary">
                            </div>
                            
                        </form>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
@endsection