<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        User::create([
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp,
            'user_pos' => $request->user_pos,
            'user_role' => $request->user_role,
            'user_aktif' => $request->user_aktif,
        ]);

        return redirect('users');
    }

    public function index()
    {
        $rows = User::all();
        return view('users.index', compact('rows'));
    }


    public function show(string $id)
        {
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            $row = User::find($id);
            return view('users.edit', compact('row'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $row = User::findOrFail($id);

            $row->update([
                'user_alamat' => $request->user_alamat,
                'user_hp' => $request->user_hp,
                'user_pos' => $request->user_pos,
                'user_role' => $request->user_role,
                'user_aktif' => $request->user_aktif,
            ]);

            return redirect('users');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $row = User::findOrFail($id);

            $row->delete();

            return redirect('users');
        }
}