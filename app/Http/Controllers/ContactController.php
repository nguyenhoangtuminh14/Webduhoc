<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.all_contact', compact('contacts'));
    }
    public function show(string $id)
    {
        $contacts = Contact::findOrFail($id); 
        return view('admin.contact.show_contact', compact('contacts'));
    }
    public function showReplyForm($id)
    {
        $contacts = Contact::findOrFail($id);
        return view('admin.contact.reply_contact', compact('contacts'));
    }
    public function destroy(string $id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        return redirect()->route('contact.index')->with('success', 'Đã Xóa Liên hệ.');
    }
    public function reply(Request $request, $id)
{
   
    $contact = Contact::findOrFail($id);
    
   
    $contact->reply_content = $request->message; 
    $contact->status = true; 
    $contact->save();

   
    Mail::send('emails.contact_reply', ['replyContent' => $request->message], function ($message) use ($contact) {
        $message->to($contact->email)
                ->subject('Phản Hồi từ DU HỌC QT');
        $message->from('nguyenhoangtuminh14@gmail.com', 'DU HỌC QT');
    });

    return redirect()->route('contact.index')->with('success', 'Phản hồi đã được gửi thành công và email đã được gửi tới người liên hệ!');
}
}
