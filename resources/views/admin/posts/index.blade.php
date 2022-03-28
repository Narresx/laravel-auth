@extends('layouts.app')

@section('content')
    @forelse ($posts as $post)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text">{{ $post->created_at }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    @empty
        <div class="container text-center">Non ci sono post</div>
    @endforelse
@endsection
