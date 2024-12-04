<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all(); 
        return view('admin.fields.list_fields', compact('fields')); 
    }
    public function create()
    {
        return view('admin.fields.create_field'); 
    
}
public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Field::create($request->all());

        return redirect()->route('fields.index')->with('success', 'Ngành học đã được thêm thành công!');
    }
    public function destroy($id)
    {
        $field = Field::findOrFail($id); 
        $field->delete(); 

        return redirect()->route('fields.index')->with('success', 'Ngành học đã được xóa thành công!');
    }
}
