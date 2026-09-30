<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile; 

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone_number' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'user_id' => 'required|exists:users,id',
        ]);




    }
}
