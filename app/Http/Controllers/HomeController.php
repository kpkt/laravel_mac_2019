<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

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


    // List profile data from database
    public function profile_list()
    {
        // Select All data with `deleted_at IS NULL`
        $profiles = Profile::all();
        return view('home.profile_list', compact('profiles'));
    }

    public function profile_all(){
        // List all data with deleted record
        $profiles = Profile::withTrashed()->get();
        return view('home.profile_list', compact('profiles'));
    }

    public function profile_trash(){
        // List only deleted data
        $profiles = Profile::onlyTrashed()->get();
        return view('home.profile_list', compact('profiles'));
    }

    // Get form profile
    public function profile()
    {
        return view('home.profile');
    }

    // Post form profile
    public function storeProfile(Request $request)
    {
        // Validate form
        // Other validation rule in https://laravel.com/docs/5.8/validation
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'jantina' => 'required',
        ], [
            'nama.required' => 'Sila sertakan maklumat Nama.',
            'umur.required' => 'Sila sertakan maklumat Umur.',
            'umur.integer' => 'Sila masukan nombor bulat bagi maklumat umur.',
        ]);

        // Get form value
        //$postData = $request->all();

        $profil = new Profile();
        $profil->nama = $request->input('nama');
        $profil->umur = $request->input('umur');
        $profil->jantina = $request->input('jantina');
        $profil->save(); // Save data to table database
        
        return view('home.submited', compact('profil'));
    }

    // Get form edit profile
    public function profile_edit($id)
    {
        $profile = Profile::find($id);
        return view('home.profile_edit', compact('profile'));
    }

    // update profile to database
    public function profile_update(Request $request, $id)
    {
        // Validate form
        // Other validation rule in https://laravel.com/docs/5.8/validation
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'jantina' => 'required',
        ], [
            'nama.required' => 'Sila sertakan maklumat Nama.',
            'umur.required' => 'Sila sertakan maklumat Umur.',
            'umur.integer' => 'Sila masukan nombor bulat bagi maklumat umur.',
        ]);

        $profil = Profile::find($id);
        $profil->nama = $request->input('nama');
        $profil->umur = $request->input('umur');
        $profil->jantina = $request->input('jantina');
        $profil->save(); // Save data to table database

        return redirect()->route('home.list-profile');
    }

    // Delete data profile
    public function profile_destroy($id)
    {
        $profil = Profile::find($id);
        $profil->delete();

        return redirect()->route('home.list-profile');
    }

}
