<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('admin.countries.list_countries', compact('countries'));
    }
    public function create()
    {
        return view('admin.countries.create_countries');
    }

    public function edit($id)
{
    $country = Country::findOrFail($id);
    return view('admin.countries.edit_countries', compact('country'));
}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'flag' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $country = new Country();
        $country->name = $request->name;
        $country->description = $request->description;

        // Lưu hình ảnh
        if ($request->hasFile('flag')) {
            $imageName = time() . '.' . $request->flag->extension();
            $request->flag->move(public_path('images/flags'), $imageName);
            $country->flag = 'images/flags/' . $imageName;
        }

        $country->save();

        return redirect()->route('countries.index')->with('success', 'Quốc gia đã được thêm thành công!');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'flag' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $country = Country::findOrFail($id);
    $country->name = $request->name;
    $country->description = $request->description;

  
    if ($request->hasFile('flag')) {
        
        if ($country->flag && file_exists(public_path($country->flag))) {
            unlink(public_path($country->flag));
        }
        $imageName = time() . '.' . $request->flag->extension();
        $request->flag->move(public_path('images/flags'), $imageName);
        $country->flag = 'images/flags/' . $imageName;
    }

    $country->save();

    return redirect()->route('countries.index')->with('success', 'Quốc gia đã được cập nhật thành công!');
}

    public function destroy($id)
    {
        $country = Country::findOrFail($id);

        
        if ($country->flag && file_exists(public_path($country->flag))) {
            unlink(public_path($country->flag));
        }

        $country->delete();

        return redirect()->route('countries.index')->with('success', 'Quốc gia đã được xóa thành công!');
    }

}
