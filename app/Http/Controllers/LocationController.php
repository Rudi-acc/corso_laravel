<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Log;

class LocationController extends Controller
{
    //lettura
    public function index()
    {
        return response()->json(Location::all(), 200);
    }
    public function store(Request $request)
    {
        //Log::debug('Richiesta con dati:', $request->all());
        //abort(403, 'Non autorizzato');//per testare errore 403
       $validated = $request->validate([
            'name' => ['required', 'string', 'max:100', 'min:5'],
            'description' => ['nullable', 'string', 'max:255'],
            'latitude' => ['required', 'numeric', 'between:-90,90'],
            'longitude' => ['required', 'numeric', 'between:-180,180'],
        ],[
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.min' => 'Il campo nome deve contenere almeno :min caratteri.',
            'latitude.between' => 'La latitudine deve essere compresa tra :min e :max.',
            'longitude.between' => 'La longitudine deve essere compresa tra :min e :max.',
        ]);

        //Log::debug('Dati validati:', $validated);
        //$location = Location::create($request->all());
        $location = Location::create($validated);
        

        return response()->json($location, 201);
    }
    public function show(Location $location)
    {
        return response()->json($location, 200);
    }
    public function update(Request $request, Location $location)
    {
        $validated = $request->validate([
            'name' => ['sometimes', 'required', 'string', 'max:100', 'min:5'],
            'description' => ['nullable', 'string', 'max:255'],
            'latitude' => ['sometimes', 'required', 'numeric', 'between:-90,90'],
            'longitude' => ['sometimes', 'required', 'numeric', 'between:-180,180'],
        ],[
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.min' => 'Il campo nome deve contenere almeno :min caratteri.',
            'latitude.between' => 'La latitudine deve essere compresa tra :min e :max.',
            'longitude.between' => 'La longitudine deve essere compresa tra :min e :max.',
        ]);
     
        //$location->update($request->all());
        $location->update($validated);

        return response()->json($location, 200);
    }
    public function destroy(Location $location)
    {
        $location->delete();
        
        return response()->json(null, 204);
    }
}
