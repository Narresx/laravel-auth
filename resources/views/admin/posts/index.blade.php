@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-warning m-5">Crea un post</a>
        <div class="row justify-content-center">
            @forelse ($posts as $post)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <p class="card-text">{{ $post->created_at }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Dettagli</a>
                                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Modifica</a>
                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post"
                                    id="delete_form">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">Non ci sono post</div>
            @endforelse
        </div>
    </div>
@endsection
