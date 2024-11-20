@extends('layouts.app')
@section('page-title', 'Modifica Post')

@section('content')
<div class="container">
    <h1 class="my-4">Modifica il Post</h1>
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $post->author }}" required>
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary my-3">Aggiorna</button>
    </form>
</div>
@endsection
