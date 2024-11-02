<?php

namespace App\Http\Controllers\PatronControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StorePortfolioRequest;
use App\Models\Patron\Profile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Essa\APIToolKit\Api\ApiResponse;
use Illuminate\Support\Facades\Storage;

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
    public function store(StorePortfolioRequest $request): JsonResponse
    {
        // Get validated data
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;

        // Check if profile_image exists in the request
        if ($request->hasFile('profile_image')) {
            // Store the image and get the file path
            $filePath = $request->file('profile_image')->store('public/profile_images');

            // Save the file path to the data array (only the storage path)
            $data['profile_image'] = Storage::url($filePath);  // Returns a publicly accessible URL
        }

        // Create the profile in the database
        $createProfile = Profile::create($data);

        return $this->responseSuccess('Profile created successfully.', $createProfile);
    }


    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {

        return response()->json($profile, 200);
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
