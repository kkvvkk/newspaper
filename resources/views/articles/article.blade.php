<div class="row featurette">
      <div class="col-md-7 order-md-2">
        <div class="mb-1 text-muted">{{$article->created_at}}</div>
        <h2 class="featurette-heading"><a href="{{route('article', ['slug' => $article->slug])}}">{{$article->title}}</a></h2>
        <p class="lead">{{Str::limit($article->text, 300, '...')}}</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
</div>