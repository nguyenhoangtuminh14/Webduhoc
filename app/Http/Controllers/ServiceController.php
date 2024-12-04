<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('admin.allservices.list_services', compact('services'));
    }
    public function create()
    {
        return view('admin.allservices.create_services');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'process' => 'required|string|max:255',
            'support_time' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/services', 'public');
            $data['image'] = 'storage/' . $imagePath;
        }

        Services::create($data);

        return redirect()->route('services_admin.index')->with('success', 'Dịch vụ đã được thêm thành công!');
    }

    public function edit($id)
{
    $service = Services::findOrFail($id); 
    return view('admin.allservices.edit_services', compact('service'));
}
    public function update(Request $request, Services $service)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'process' => 'required|string|max:255',
            'support_time' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();


        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $service->image));
            }

            $imagePath = $request->file('image')->store('images/services', 'public');
            $data['image'] = 'storage/' . $imagePath;
        }


        $service->update($data);

        return redirect()->route('services_admin.index')->with('success', 'Dịch vụ đã được cập nhật thành công!');
    }
    public function destroy(Services $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $service->image));
        }

        $service->delete();

        return redirect()->route('services_admin.index')->with('success', 'Dịch vụ đã được xóa thành công!');
    }
}
