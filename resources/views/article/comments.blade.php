<div id="comments">
    @foreach($article->comments as $comment)
    <div  class="list-group-item list-group-item-action py-3 lh-tight mb-3" >
        <div class="d-flex w-100 align-items-center justify-content-between">
          <strong class="mb-1">{{$comment->message_subject}}</strong>
          <small class="text-muted">{{$comment->created_at}}</small>
        </div>
        <div class="col-10 mb-1 small">{{$comment->text}}</div>
    </div>
    @endforeach
</div>