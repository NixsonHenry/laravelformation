@extends('layouts.app')

@section('content')
    <h1>Listes des articles</h1>
    @if($posts->count() > 0)
        @foreach($posts as $post)
            <h2><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h2>
        @endforeach
    @else
        <span>Aucun post en base de donnees</span>
    @endif
    <h1>Liste des videos</h1>
    @forelse($video->comments as $comment)
        <div>{{ $comment->content }} | cree le {{ $comment->created_at->format('d / m / Y') }}</div>
    @empty
        <span>Aucun commentaire pour cette video.</span>
    @endforelse
@endsection

