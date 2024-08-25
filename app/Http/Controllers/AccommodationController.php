<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Models\AccommodationImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccommodationController extends Controller
{
    public function create()
    {
        return view('accommodations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'features' => 'required|string',
            'address' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $accommodation = new Accommodation();
        $accommodation->landlord_id = Auth::id();
        $accommodation->name = $request->name;
        $accommodation->features = $request->features;
        $accommodation->address = $request->address;
        $accommodation->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('accommodations', 'public');
                $accommodation->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('landlord.dashboard')->with('success', 'Accommodation created successfully.');
    }

    public function index()
    {
        $accommodations = Accommodation::with('images')->get();
        return view('accommodations.index', compact('accommodations'));
    }

    public function show($id)
{
    $accommodation = Accommodation::with('images')->findOrFail($id);
    return view('accommodations.show', compact('accommodation'));
}

}
