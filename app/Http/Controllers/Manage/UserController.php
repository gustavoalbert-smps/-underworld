<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:user-view', ['only' => ['index']]);
    }
    
    public function index()
    {
        $users = User::whereHas('role', function (Builder $query) {
            $query->where('role_id','!=',1);
        })
        ->whereNot('id',auth()->user()->id)
        ->paginate(10);

        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],
            'password' => [
                'nullable',
                'string',
                Password::min(8) // Define comprimento mínimo
                    ->mixedCase() // Requer letras maiúsculas e minúsculas
                    ->numbers() // Requer pelo menos um número
                    ->symbols() // Requer pelo menos um símbolo
                    ->uncompromised(), // Verifica se a senha foi exposta em vazamentos de dados
                'confirmed',
            ],
            'password_confirmation' => [
                'nullable', 
                'required_if:password,!null',
            ],
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('admin.user.index')->with('alert-success', 'User updated successfully!');
    }

    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);

        try {
            $status = $user->status == 1 ? 0 : 1;

            // Verificar se a atualização foi bem-sucedida
            $user->status = $status;
            $user->save();

        } catch (\Throwable $th) {
            return redirect()->route('admin.user.index')->with('alert-danger', $th->getMessage());
        }

        return redirect()->route('admin.user.index')->with('alert-success', 'User status updated successfully!');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin.user.index')->with('alert-success', 'User deleted successfully!');
    }
}