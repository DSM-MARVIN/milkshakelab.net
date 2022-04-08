@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach ($posts as $post)
                <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>

        <a href="/posts/1">hey</a>
    </div>

@endsection
