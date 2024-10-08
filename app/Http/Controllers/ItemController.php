<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ItemController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {

//        $validatedData = $request->validate([
//            'name' => 'required|string|max:255',
//        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');


        $item = User::create([
           'name'=> $name,
            'email'=>$email,
            'password'=>$password
        ]);

        return response()->json(['success' => true, 'item' => $item], 200);
    }

    public function show($id)
    {
        $item = User::where('id', $id)->first();

        if (!$item){
            return response()->json(['success' => false, 'message' => 'Item not found'], 404);
        }
        return response()->json(['success' => true, 'item' => $item], 200);
    }

    public function update(Request $request, $id)
    {
        $item = User::findOrFail($id);
        $item->update($request->all());
        return response()->json(['success' => true, 'item' => $item], 200);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Invalid Credentials'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function logout(Request $request)
    {
        // Revoke the user's current API token
        $user = Auth::user();
        $user->tokens()->delete();

        // Return a response indicating the user has been logged out
        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
