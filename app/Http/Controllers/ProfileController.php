<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use DB;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('profile.index')->with('user', $user);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('profile.show')->with('user', $user);
    }

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        
        //Check for correct user

        if(auth()->user()->id !==$user->id){
            return redirect('/')->with('error', 'Unathorized page');

        }

        return view('profile.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //Handle file upload
        if($request->hasFile('cover_image'))
        {
            //Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        
        //Create user
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->location = $request->input('location');
        $user->description = $request->input('description');
        if($request->hasFile('cover_image'))
        {
            $user->image_id = $fileNameToStore;
        }
        $user->save();

        return redirect('/profiles')->with('success', 'Perfil actualizado correctamente');
    }
}
