<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    /**
     * Add articles comment from database
     * @param  Request $request
     * @return Illuminate\Contracts\Routing\ResponseFactory::json
     */
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
