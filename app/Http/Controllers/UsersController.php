<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::whereJsonContains('meta->skills', 'js')->get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::create([
                        'name'=>'maria',
                        'email'=>'maria@gmail.com',
                        'meta'=>[
                            'age'=>'22',
                            'skills'=>['PHP', 'js']
                        ]
        ]);



        // update an user details

        //  $user = User::where('id', '2')->update([
        //                 'name'=>'ajharul',
        //                 'email'=>'ajharuli440@gmail.com',
        //                 'meta'=>[
        //                     'age'=>'22',
        //                     'skills'=>['PHP', 'js']
        //                 ]
        // ]);
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find(12);
        $user->delete();
    }
}
