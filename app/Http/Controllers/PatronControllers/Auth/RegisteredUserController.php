<?php

namespace App\Http\Controllers\PatronControllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response | JsonResponse
    {
        // Create a validator instance
//        $validator = Validator::make($request->all(), [
//            'role' => ['required', 'string', 'max:255'],
//            'provider' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
//            'password' => ['required', 'confirmed', Rules\Password::defaults()],
//        ]);

        $request->validate([
//            'role' => ['required', 'string', 'max:255'],
//            'provider' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
//            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        // Check if the validation fails
//        if ($validator->fails()) {
//            // Return a 422 response with the validation errors
//            return response()->json([
//                'status' => 'error',
//                'message' => 'Validation failed',
//                'errors' => $validator->errors()
//            ], 422);
//        }


        $role = 'user';
        $provider = $request->provider ?? 'personal';

        $user = User::create([
            'role' => $role,
            'provider' => $provider,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
        ]);

        event(new Registered($user));

        Auth::login($user);it

        return response()->json($user, 201);
    }
}
