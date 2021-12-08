<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function addComment(Request $request)
    {
        $comment = Comment::create([
            'article_id' => $request->articleId,
            'message_subject' => $request->name,
            'text' => $request->text,
        ]);

        return response()->json(['success' => 'Comment added', 'created_at' => date("Y-m-d H:i:s")]);
    }
}
