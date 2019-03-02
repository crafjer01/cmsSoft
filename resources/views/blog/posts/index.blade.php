@extends('layouts.app')

@section('content')

<div class="columns section">
    <div class="column is-8 is-offset-2">
        <h1 class="is-size-1">Listado de Posts</h1>

        @foreach($posts as $post)
        <div class="card">
            <header class="card-header">
                <div class="card-header-title">
                    {{ $post->name }}
                </div>
            </header>
            @if($post->file)
            <div class="card-image">
                <img src="{{ $post->file }}" alt="{{ $post->name}}">
            </div>
            @endif

            <div class="card-content">
                <div class="content">
                    {{ $post->excerpt }}
                </div>
            </div>

            <footer class="card-footer">
                <a href="#" class="card-footer-item">Leer Más</a>
            </footer>

        </div>
        @endforeach
    </div>
</div>

@endsection