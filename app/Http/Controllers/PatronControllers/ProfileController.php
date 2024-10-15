<?php

namespace App\Http\Controllers\PatronControllers;

use App\Http\Controllers\Controller;
use App\Models\patron\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $profiles = Profile::all();
        return response()->json(['data' => $profiles], 200);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $password = Hash::make('password');

        return response()->json($password, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
