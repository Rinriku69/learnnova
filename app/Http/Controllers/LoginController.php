<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class LoginController extends Controller
{
    function showForm(): View
    {
        return view('login.form');
    }

    function authenticate(ServerRequestInterface $request): RedirectResponse
    {
        $validator = Validator::make(
            $request->getParsedBody(),
            [
                'email' => 'required',
                'password' => 'required',
            ],
        );
        if ($validator->passes() && Auth::attempt(
            $validator->safe()->only(['email', 'password']),
        )) {
            session()->regenerate();
            return redirect()->intended(route('home.main')); //route product.list id default
        }

        $validator
            ->errors()
            ->add(
                'credentials',
                'The provided credentials do not match our records.',
            );

        return redirect()->back()->withErrors($validator);
    }

    function logout(): RedirectResponse
    {
        Auth::logout();
        session()->invalidate();

        session()->regenerateToken();

        return redirect()->route('login');
    }

    function registerForm() : View{
        return view(
            'login.register'
        );
    }

    function register(ServerRequestInterface $request): RedirectResponse{
        try{
        $data = $request->getParsedBody();

        $user = new User();
        $user->fill($data);
        $user->email = $data['email'];
        $user->role = 'USER';
        $user->save();

        return redirect()->route('login')
        ->with('status','Successfully Registered please Login');
        }catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        }

    }
}
