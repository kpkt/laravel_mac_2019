<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('home.index');
    }

    public function detail()
    {
        return view('home.detail');
    }

    // Get form profile
    public function profile()
    {
        return view('home.profile');
    }

    // Post form profile
    public function storeProfile(Request $request)
    {
        //dd($request->all());
        $postData = $request->all();

        return view('home.submited', compact('postData'));
    }

    public function calcForm()
    {
        return view('home.calc');
    }

    public function calcProc(Request $request)
    {
        $input_1 = $request->input('no_1');
        $input_2 = $request->input('no_2');
        $total = $input_1 + $input_2;

        return view('home.calcProc', compact('input_1', 'input_2', 'total'));
    }
}
