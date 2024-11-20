@extends('layouts.app')
@section('page-title', 'Crea un Nuovo Post')

@section('content')
<div class="container">
    <h1 class="my-4">Crea un Nuovo Post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-3">Salva</button>
    </form>
</div>
@endsection
