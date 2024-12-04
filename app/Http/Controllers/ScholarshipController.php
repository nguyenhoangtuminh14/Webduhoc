<?php

namespace App\Http\Controllers;
use App\Models\Field;
use App\Models\Country;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use App\Models\Registration;
class ScholarshipController extends Controller
{
    public function index()
{
    $fullScholarships = Scholarship::where('type', 'Toàn Phần')->get();
    $partialScholarships = Scholarship::where('type', 'Bán Phần')->get();
    $fieldScholarships = Scholarship::where('type', 'Theo Ngành')->get();

    return view('admin.scholarships.list_scholarships', compact('fullScholarships', 'partialScholarships', 'fieldScholarships'));
}

    public function create()
    {
        $fields = Field::all(); 
        $countries = Country::all(); 
        return view('admin.scholarships.create_scholarship', compact('fields', 'countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'requirements' => 'required|string',
            'type' => 'required|string',
            'deadline' => 'required|date',
            'application_guidelines' => 'required|string',
            'country_id' => 'required|exists:countries,id',
            'field_id' => 'required|exists:fields,id',
        ]);
        
        if ($request->type === 'Theo Ngành') {
            $request->validate(['field_id' => 'required|exists:fields,id']);
        } else {
            $request->merge(['field_id' => 0]);
        }

        Scholarship::create($request->all());

        return redirect()->route('scholarships.index')->with('success', 'Học bổng đã được thêm thành công!');
    }
    public function edit($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $fields = Field::all(); 
        $countries = Country::all(); 
        return view('admin.scholarships.edit_scholarship', compact('scholarship', 'fields', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'requirements' => 'required|string',
            'type' => 'required|string',
            'field_id' => 'required|exists:fields,id',
            'deadline' => 'required|date',
            'application_guidelines' => 'required|string',
            'country_id' => 'required|exists:countries,id',
            
        ]);
        if ($request->type === 'Theo Ngành') {
            $request->validate(['field_id' => 'required|exists:fields,id']);
        } else {
            $request->merge(['field_id' => 0]); 
        }

        $scholarship = Scholarship::findOrFail($id);
        $scholarship->update($request->all());

        return redirect()->route('scholarships.index')->with('success', 'Học bổng đã được cập nhật thành công!');
    }
    public function destroy($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->delete();

        return redirect()->route('scholarships.index')->with('success', 'Học bổng đã được xóa thành công!');
    }

    public function show($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        return view('admin.scholarships.show_scholarship', compact('scholarship'));
    }
    public function allScholarships()
    {
        $fullScholarships = Scholarship::where('type', 'Toàn Phần')->get();
        $partialScholarships = Scholarship::where('type', 'Bán Phần')->get();
        $fieldScholarships = Scholarship::where('type', 'Theo Ngành')->get();

        return view('scholarships.all_scholarships', compact('fullScholarships', 'partialScholarships', 'fieldScholarships'));
    }
    public function showScholarship($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        return view('scholarships.show_scholarship', compact('scholarship'));
    }
    public function search(Request $request)
{
    $query = $request->input('query');

    $scholarships = Scholarship::where('name', 'like', '%' . $query . '%')->get();

    return view('scholarships.all_scholarships', compact('scholarships'));
}
public function autocomplete(Request $request)
{
    $query = $request->get('query');

    $scholarships = Scholarship::where('name', 'like', '%' . $query . '%')
        ->orWhereHas('country', function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%');
        })
        ->orWhere('amount', 'like', '%' . $query . '%')
        ->orWhereHas('field', function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%');
        })
        ->take(5) 
        ->get();

    return response()->json($scholarships);
}
       
}