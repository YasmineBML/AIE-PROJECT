<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Administrateur;

class AdminLoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }


    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        if ($request->email === 'aieproject@gmail.com' && $request->password === 'aieproject') {

            $administrateur = Administrateur::where('email', $request->email)->first();
            if (!$administrateur) {

                $administrateur = new Administrateur();
                $administrateur->email = $request->email;

                $administrateur->password = bcrypt($request->password);
                $administrateur->save();
            }


            Auth::loginUsingId($administrateur->id);
            return redirect()->intended(route('acceuil'));
        }


        return redirect()->back()->with('error', 'Email ou mot de passe incorrect')->withInput();
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


}

