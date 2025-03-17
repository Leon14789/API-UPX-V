<?php

namespace App\Http\Controllers;
use App\Models\Password;
use Illuminate\Http\Request;


class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data = Password::all();

       return response()->json($data, 201);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function teste()
     {
         return view('dunga-burro');
     }

     
    public function store(Request $request)
    {

        $lastPassword =  Password::where('status', false)
        ->orderBy('password', 'desc')
        ->first();

        if (!$lastPassword) {
            $passrodValue = 1;
        } else {
            $passrodValue = $lastPassword->password + 1;
        }

        $data = Password::create([
            'password' => $passrodValue,
            'status' => false,
        ]);

        return response()->json($data, 201);

        // return view('dunga-burro', compact(['data']) );
    }

    /**
     * Display the specified resource.
     */
    public function show(Password $password)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Password $password)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Password $password)
    {
        //
    }
}
