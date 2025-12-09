<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\form;
use Illuminate\support\Facades\Hash;

class formController extends Controller
{

    public function showRegister(){
        return view('layout.register');
    }
    public function showLogin(){
        return view('layout.login');
    }
    public function showWelcome(){
        return view('layout.welcome');
    }
    // public function showDashboard(){
    //     return view('layout.dashboard');
    // }
    // public function showUsers(){
    //     return view('layout.users');
    // }
    // public function showUpdatePassword(){
    //     return view('layout.update-password');
    // }


   // insert data from userForm

    //  form validation

    public function doRegister(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        form::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        echo "User Registration Successful";
    }
     


    
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
