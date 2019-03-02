@extends('layouts.app')

@section('content')



<div class="columns section">
    <div class="column is-8 is-offset-2">
        <h1 class="is-size-1">{{ $post->name }}</h1>

        <div class="card box">
            <header class="card-header">
                <div class="card-header-title">
                   <!-- :  -->
                   Categoría:
                    <a href="{{ route('category', $post->category->slug) }}" class="button iis-link" style="margin-left: 10px;">
                   {{ $post->category->name }}</a>
                   
                </div>
            </header>
            @if($post->file)
            <div class="card-image">
                <img src="{{ $post->file }}" alt="{{ $post->name}}">
                {{ $post->excerpt }}
            </div>
            @endif
            <hr style="border: 0.7px solid #ccc">

            <div class="card-content">
                <div class="content">
                    {!! $post->body !!}
                </div>
            </div>



            <footer class="card-footer">
                <p class="" style="padding: 15px 0">Etiquetas: 
                    @foreach($post->tags as $tag)
                        <a href="{{ route('tag', $tag->slug) }}"><span class="tag is-link">{{ $tag->name }}</span></a>
                    @endforeach
                </p>
            </footer>

        </div>
       
    </div>
</div>

@endsection