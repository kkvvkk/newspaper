@extends('master')

@section('title', 'Главная')

@section('content')	
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
    </div>
  </div>
	<div class="row mb-2">
		@foreach($articles as $article)
			@include('main.article', compact($article))
		@endforeach
	</div>
@endsection