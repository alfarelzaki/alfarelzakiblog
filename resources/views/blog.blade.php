@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                    <span>{{$post->title}}</span>
                    <span class="float-right">Dummy :)</span>
                    </div>

                    <div class="card-body">
                        <p>{{ str_limit($post->content, 300, '...') }}</p>
                    </div>
                </div><br>
                @endforeach
            </div>
        </div>
    </div>
@endsection