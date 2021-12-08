<script>
function addComment() {
    let name = $('#name').val();
    let comment = $('#commentText').val();

    if ( !$('#comment-added').hasClass("invisible")) {
            $('#comment-added').addClass("invisible");
    }

    if (!name) {
        if ( $('#name-invalid-feedback').hasClass("invisible")) {
            $('#name-invalid-feedback').toggleClass("invisible");
        }
        if ( !$('#text-invalid-feedback').hasClass("invisible")) {
            $('#text-invalid-feedback').addClass("invisible");
        }
    } else if (!comment) {
        if ( !$('#name-invalid-feedback').hasClass("invisible")) {
            $('#name-invalid-feedback').addClass("invisible");
        }
        if ( $('#text-invalid-feedback').hasClass("invisible")) {
            $('#text-invalid-feedback').toggleClass("invisible");
        };
    } else {
        if ( !$('#name-invalid-feedback').hasClass("invisible")) {
            $('#name-invalid-feedback').addClass("invisible");
        }
        if ( !$('#text-invalid-feedback').hasClass("invisible")) {
            $('#text-invalid-feedback').addClass("invisible");
        };

        $.ajax({
            url: '{{ route("addComment") }}',
            type: "POST",
            data: {
                'name' : name,
                'text' : comment,
                'articleId': "{{$article->id}}",
            },
            success: function (data) {
                $('#name').val('');
                $('#commentText').val('');
                $('#comment-added').toggleClass("invisible");
                $('<div  class="list-group-item list-group-item-action py-3 lh-tight mb-3" >' +
                        '<div class="d-flex w-100 align-items-center justify-content-between">' +
                            '<strong class="mb-1">' + name + '</strong>' + 
                            '<small class="text-muted">' + data['created_at'] + '</small>' +
                        '</div>' +
                        '<div class="col-10 mb-1 small">' + comment + '</div>' +
                    '</div>').prependTo('#comments');
            }
        });
    }
    
    
}
</script>

<form>
    @csrf
    <div class="text-success invisible" id="comment-added">
            Comment successfully added !
    </div>
    <div class="form-group">
        <label for="name">Your name:</label>
        <input type="text" class="form-control invalid" id="name" >
        <div class="text-danger invisible" id="name-invalid-feedback">
            Please choose your name.
        </div>
    </div>
    <div class="form-group">
        <label for="commentText">Your comment:</label>
        <textarea class="form-control" id="commentText" rows="3"></textarea>
        <div class="text-danger invisible" id="text-invalid-feedback">
            Please write comment.
        </div>
    </div>
    
    <button type="button" class="btn btn-primary mb-2" onclick="addComment()">Add comment</button>
</form>

