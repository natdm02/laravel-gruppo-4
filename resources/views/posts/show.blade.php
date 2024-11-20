@extends('layouts.app')
@section('page-title', "Post: $post->title")

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <h4 class="text-muted">Autore: {{ $post->author }}</h4>
    <p>{{ $post->content }}</p>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Torna alla lista</a>
</div>
@endsection
