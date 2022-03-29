@extends('layouts.app')
@section('content')
    @if ($error->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($error->all() as $error)
                    <li>{{ $error }}</li>
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="email" class="form-control" id="title" name="title" placeholder="Inserisci il titolo"
                value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="12" placeholder="Inserisci qui il contenuto">
                {{ old('content') }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="image">Contenuto</label>
            <input type="password" class="form-control" id="image" name="image" placeholder="Inserisci qui l'immagine"
                value="{{ old('image') }}">
        </div>
        <button type=" submit" class="btn btn-success">Conferma</button>
    </form>
@endsection
