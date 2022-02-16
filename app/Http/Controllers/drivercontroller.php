<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class drivercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('driver.Registerdriver');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $input)
    {
        // Validator::make($input, [
        //     // 'username' => ['required','string'],
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => [
        //         'required',
        //         'string',
        //         'email',
        //         'max:255',
        //         Rule::unique(User::class),
        //     ],
        //     'password' => $this->passwordRules(),
        // ])->validate();

        // return User::create([
        //     // 'username' => $input['username'],
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password']),
      
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validator::make($input, [
        //     'no_ktp' => 'required',
        //     ]);
    
        //     return User::create([
        //         // // 'username' => $input['username'],
        //         // 'name' => $input['name'],
        //         // 'email' => $input['email'],
        //         // 'password' => Hash::make($input['password']),
        //      'no_ktp' => $input['no_ktp'],
        //     ]);
        //     return redirect('home');
        // User::create();
        $request->validate([
            'no_ktp' => 'required',
            'name' => 'required',
        ]);
        User::create($request->all());

        return redirect()->route('user')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, User $user)
{
    $request->validate([
        'no_ktp' => 'required',
        'name' => 'required',
    ]);
    $user->update($request->all());

    return redirect()->route('user')->with('succes','Data Berhasil di Input');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
