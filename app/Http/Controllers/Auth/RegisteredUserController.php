<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\tb_users;
use App\Models\TbUsers;
use Illuminate\Support\Facades\Log;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'userName' => ['required', 'string', 'max:255'],
            'userEmail' => ['required', 'string', 'email', 'max:255', Rule::unique('tb_users', 'userEmail'),],
            'userPassword' => ['required', 'confirmed'],
            'userRole' => ['in:admin, opd, masyarakat'],
        ]);

        $user = tb_users::create([
            'userName' => $validated['userName'],
            'userEmail' => strtolower($validated['userEmail']),
            'userPassword' => Hash::make($validated['userPassword']),
            'userRole' => $validated['userRole'] ?? 'masyarakat'
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
