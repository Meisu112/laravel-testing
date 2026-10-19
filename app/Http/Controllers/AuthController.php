<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    // Show Register Page
    public function showRegister()
    {
               // dd(User::all());

        return view('auth.register');
    }

    // Register User
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect('/register')
            ->with('success', 'Account created successfully!');
    }

    // Show Login Page
    public function showLogin()
    {
        return view('auth.login');
    }

    // Login User
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email or password is incorrect.',
        ])->onlyInput('email');
    }

    // Logout User
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function editProfile()
{
    return view('auth.profile-edit', [
        'user' => auth()->user(),
    ]);
}

public function updateProfile(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);

    $user = auth()->user();

    $user->update([
        'name' => $validated['name'],
        'phone' => $validated['phone'],
    ]);

    return redirect('/dashboard')
        ->with('success', 'Profile updated successfully!');
}
public function showChangePassword()
{
    return view('auth.change-password');
}

public function updatePassword(Request $request)
{
    $validated = $request->validate([
        'current_password' => 'required',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = auth()->user();

    if (!Hash::check($validated['current_password'], $user->password)) {
        return back()->withErrors([
            'current_password' => 'Current password is incorrect.',
        ]);
    }

    $user->update([
        'password' => Hash::make($validated['password']),
    ]);

    return redirect('/dashboard')
        ->with('success', 'Password changed successfully!');
}
}
