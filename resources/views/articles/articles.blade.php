@extends('master')

@section('title', 'Статьи')

@section('content')	
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach($tags as $tag)
                <a class="p-2 link-secondary" href="{{route('articles', ['tag' => $tag->slug])}}">{{$tag->name}}</a>
            @endforeach         
        </nav>
    </div>
    <div class="container">
        @foreach($articles as $article)
            @include('articles.article', compact($article))
            <hr class="featurette-divider">
        @endforeach
    </div>
    {{ $articles->onEachSide(9)->links() }}
@endsection


