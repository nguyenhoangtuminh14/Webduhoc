<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Services;

class HomeController extends Controller
{
    public function index()
    {
        $blogs_new = Blog::latest()->take(3)->get();
        return view('index', compact('blogs_new'));
     }

    public function services()
    {
        $services = Services::all(); 
        return view('services_main.all_services', compact('services')); 
    }
    public function show($id)
    {
        $service = Services::findOrFail($id); 
        return view('services_main.show_services', compact('service')); 
    }

       public function contact()
    {
        return view('contact'); 
    }

    public function submit_Contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ phản hồi sớm nhất có thể.');
    }
    public function show_blog($id)
    {
        $blog = Blog::findOrFail($id); 
        $post = Blog::findOrFail($id);
        $blogs_new = Blog::latest()->take(3)->get();        
        return view('blogs.blog_show', compact('post', 'blogs_new','blog'));
    }

    public function all_blog()
    {
        $blogs = Blog::latest()->paginate(6);; 
        $blogs_new = Blog::latest()->take(3)->get(); 
        return view('blogs.all_blogs', compact('blogs', 'blogs_new'));
    }
    public function storeComment(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'comment' => 'required|string',
    ]);

    Comment::create([
        'blog_id' => $id,
        'name' => $request->name,
        'email' => $request->email,
        'comment' => $request->comment,
    ]);

    return redirect()->route('blog.show', $id)->with('success', 'Bình luận của bạn đã được gửi.');
}
    public function consultation()
    {
        return view('consultation.all_consultation'); 
    }
    public function register()
    {
        return view('register'); 
    }
    public function advisory()
    {
        return view('advisory'); 
    }
    

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
           return redirect()->back()->with('success', 'Cảm ơn bạn đã gửi thắc mắc. Chúng tôi sẽ phản hồi sớm nhất có thể.');
    }
}
