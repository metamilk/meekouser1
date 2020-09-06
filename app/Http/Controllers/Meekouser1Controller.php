<?php

namespace App\Http\Controllers;

use App\Meekouser1;
use App\Http\Resources\Meekouser1Collection;
use Illuminate\Http\Request;

class Meekouser1Controller extends Controller
{
    // all users
    public function index()
    {
        $meekouser1s = Meekouser1::all()->toArray();
        return array_reverse($meekouser1s);
    }

    // add user
    public function add(Request $request)
    {
        $meekouser1 = new Meekouser1([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->get('email'),
            'motdepass' => $request->input('motdepass')
        ]);
        $meekouser1->save();

        return response()->json('User has created');
    }

    // edit user
    public function edit($id)
    {
        $meekouser1 = Meekouser1::find($id);
        return response()->json($meekouser1);
    }

    // update user
    public function update($id, Request $request)
    {
        $meekouser1 = Meekouser1::find($id);
        $meekouser1->update($request->all());

        return response()->json('User successfully updated');
    }

    // delete user
    public function delete($id)
    {
        $meekouser1 = Meekouser1::find($id);
        $meekouser1->delete();

        return response()->json('User successfully deleted');
    }
}
