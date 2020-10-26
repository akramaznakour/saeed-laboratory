<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if (Auth::check() && Auth::user()->is_admin) {

        return view('home');
        } else {
            $choix = 8;
            return view('fr.errors.404', compact('choix'));
        }
    }

    protected function create(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $newUser = new User();

            $newUser->name = $request->input('name');;
            $newUser->email = $request->input('email');;
            $newUser->password = bcrypt($request->input('password'));

            $newUser->is_admin=1;

            $newUser->save();

            return redirect('home');
        } else {
            $choix = 8;
            return view('fr.errors.404', compact('choix'));
        }
    }

    public function update(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            Auth::user()->name = $request->input('name');;
            Auth::user()->email = $request->input('email');;
            Auth::user()->password = bcrypt($request->input('password'));

            Auth::user()->save();

            return redirect('home');
        } else {
            $choix = 8;
            return view('fr.errors.404', compact('choix'));
        }
    }


}
