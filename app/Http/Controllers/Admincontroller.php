<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // this url is from Authenticationsessioncontroller
use Illuminate\Http\RedirectResponse; // Also use this url link
class Admincontroller extends Controller
{
    // Here we are going to write public funtions for route


    /*Destroy an authenticated session.*/

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
