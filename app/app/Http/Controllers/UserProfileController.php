<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function edit(User $user)
    {
        // Get the authenticated user
        $user = auth()->user();

        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request,  User $user)
    {
        $input = $request->all();
 
        if(!empty($request->password)){
            $input['password'] = Hash::make($request->password);
        }else{
            $input = $request->except('password');
        }
        
        if ($request->hasFile('image')) {
            // Handle image upload and storage
            $imagePath = $request->file('image')->store('user_images', 'public');
            $input['image'] = $imagePath;
    
            // Delete the old image if it exists
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
        }

        $user->update($input);

        $user->syncRoles($request->roles);

        return redirect()->back()
                ->withSuccess('User is updated successfully.');
    }
}