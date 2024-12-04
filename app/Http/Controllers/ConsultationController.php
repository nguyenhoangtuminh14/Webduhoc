<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Registration;
use App\Models\Services;
use App\Models\Country;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ConsultationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with(['country', 'service'])->get();
        return response()->json($registrations, Response::HTTP_OK);
    }
    public function create()
    {
        $fullScholarships = Scholarship::where('type', 'Toàn Phần')->get();
        $partialScholarships = Scholarship::where('type', 'Bán Phần')->get();
        $fieldScholarships = Scholarship::where('type', 'Theo Ngành')->get();
        $services = Services::all(); 
        $countries = Country::all(); 
        return view('consultation', compact('services', 'countries','fullScholarships','partialScholarships','fieldScholarships'));
    }

    public function show($id)
{
    $registration = Registration::with(['country', 'service'])->findOrFail($id); 
    return view('admin.consultation.show_consultation', compact('registration')); 
}

    public function store(Request $request)
    {
       
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations',
            'phone' => 'required|string|max:15',
            'education_level' => 'required|string',
            'country_id' => 'required|exists:countries,id',
            'service_id' => 'required|exists:services,id',
            'datetime' => 'required|date',
        ]);

       
        $registration = Registration::create($request->all());

        return redirect()->back()->with('success', 'Đăng ký thành công! Chúng tôi sẽ liên hệ với bạn sớm nhất.');
    }

    public function update(Request $request, $id)
    {
      
        $request->validate([
            'first_name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255|unique:registrations,email,' . $id,
            'phone' => 'sometimes|required|string|max:15',
            'education_level' => 'sometimes|required|string',
            'country_id' => 'sometimes|required|exists:countries,id',
            'service_id' => 'sometimes|required|exists:services,id',
            'datetime' => 'sometimes|required|date',
        ]);

        $registration = Registration::findOrFail($id);
        $registration->update($request->all());

        return response()->json($registration, Response::HTTP_OK);
    }
    public function register(Request $request)
{
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:registrations',
        'phone' => 'required|string|max:15',
        'service_id' => 'required|exists:services,id', 
        'country_id' => 'required|exists:countries,id', 
        'datetime' => 'required|date', 
        'agreement' => 'accepted', 
    ]);

    Registration::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'service_id' => $request->service_id,
        'country_id' => $request->country_id, 
        'datetime' => $request->datetime,
        'agreement' => $request->agreement,
    ]);

    return redirect()->back()->with('success', 'Đăng ký thành công! Chúng tôi sẽ liên hệ với bạn sớm nhất.');
}
public function list()
    {
        $registrations = Registration::all();
        return view('admin.consultation.list_consultations', compact('registrations'));
    }
    public function approve($id)
{
    $registration = Registration::findOrFail($id);
    $registration->approved = true;
    $registration->save();

   
    Mail::send('emails.consultation_approved', [], function ($message) use ($registration) {
        $message->to($registration->email)
                ->subject('Thông Báo Duyệt Hồ Sơ');
        $message->from('nguyenhoangtuminh14@gmail.com', 'DU HỌC QT');
    });

    return redirect()->route('consultation.list')->with('success', 'Đăng ký đã được duyệt và email đã được gửi.');
}
    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();

        return redirect()->route('consultation.list')->with('success', 'Đăng ký đã được xóa.');
    }
    public function allScholarships()
    {
        $fullScholarships = Scholarship::where('type', 'Toàn Phần')->get();
        $partialScholarships = Scholarship::where('type', 'Bán Phần')->get();
        $fieldScholarships = Scholarship::where('type', 'Theo Ngành')->get();

        return view('consultation', compact('fullScholarships', 'partialScholarships', 'fieldScholarships'));
    }
    
}