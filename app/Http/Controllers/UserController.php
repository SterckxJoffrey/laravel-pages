<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
 
class UserController extends Controller
{

    public function register (Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:3', 'max:20'],
        ]);
       
        $incomingFields['password'] = bcrypt($incomingFields['password']);
 
        $user = User::create($incomingFields);
        // auth()->login($user);
        return redirect('/')->with('success', 'Your account has been created and you are now logged in!');
    }
 
public function login(Request $request)
{
    $credentials = $request->validate([
        'loginusername' => 'required',
        'loginpassword' => 'required',
    ]);

    if (Auth::attempt([
        'username' => $credentials['loginusername'],
        'password' => $credentials['loginpassword'],
    ])) {
        $request->session()->regenerate();

        return redirect('/dashboard')->with('success', 'Connexion réussie !');

    }

    return back()->with('failure', 'Invalid username/password combination')->withInput();
}
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/')->with('success', 'Vous êtes déconnecté !');
}


}