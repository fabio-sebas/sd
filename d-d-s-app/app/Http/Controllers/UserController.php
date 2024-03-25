<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $this->authorize('view', $user);
        return view('user.profile', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            // Agrega más reglas de validación según tus necesidades
        ]);

        $user->update($validatedData);

        return redirect()->route('user.show', $user->id)
            ->with('success', 'Perfil actualizado correctamente.');
    }
}
