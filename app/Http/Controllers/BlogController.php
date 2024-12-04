<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get(); 
        return view('admin.blogs.list_blogs', compact('blogs'));
    }
    public function create()
    {
        return view('admin.blogs.create_blogs');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => 'nullable|image',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author;

        if ($request->hasFile('image')) {
            $blog->image = 'assets/images/' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/images'), $blog->image);
        }
        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id); 
        return view('admin.blogs.show', compact('blog'));
    }
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit_blogs', compact('blog'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => 'nullable|image',
        ]);
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author;

        if ($request->hasFile('image')) {
            $blog->image = 'assets/images/' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/images'), $blog->image);
        }
        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }
    public function destroyblog(string $id)
{
    $blog = Blog::findOrFail($id);
    $blog->delete();
    return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
}
 
public function storeReply(Request $request, $id)
{
    $request->validate([
        'comment' => 'required|string',
    ]);
    $comment = Comment::findOrFail($id);
    $comment->reply_content = $request->comment; 
    $comment->save(); 

    return redirect()->route('blog.show', $comment->blog_id)->with('success', 'Bình luận của bạn đã được gửi.');
}

public function search(Request $request)
{
    $query = $request->get('query');
    $blogs = Blog::where('title', 'like', '%' . $query . '%')->take(5)->get();
    return response()->json($blogs);
}
}
