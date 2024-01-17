@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <p>ID: {{ $article->id }}</p>
    <p>{{ $article->content }}</p>
    <a href="{{ route('articles.index') }}" class="btn btn-primary">Back to Articles</a>
</div>
@endsection