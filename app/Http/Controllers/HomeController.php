<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home($id)
    {
        return view('Home.blade.php', [
            'Home' => Request::findOrFail($id)
        ]);
    }
}
