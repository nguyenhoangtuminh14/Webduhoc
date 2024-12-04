<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function destroycomment($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->back()->with('success', 'Bình luận đã được xóa thành công!');
    }
}
