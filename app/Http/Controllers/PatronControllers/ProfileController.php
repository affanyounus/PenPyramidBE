<?php

namespace App\Http\Controllers\PatronControllers;

use App\Http\Controllers\Controller;
use App\Models\patron\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Essa\APIToolKit\Api\ApiResponse;
class ProfileController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $profiles = Profile::dynamicPaginate();

        return $this->responseSuccess('Profiles shown', $profiles);
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
