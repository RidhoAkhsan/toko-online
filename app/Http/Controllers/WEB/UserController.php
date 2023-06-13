<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::latest()->get();

        return view('pages.admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $user)
    {
        return view('pages.admin.user.edit', compact('user'));
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
        // Ini difunakan untuk mengupdate data
        // Validasi request
        $request->validate([
            'roles' => 'required|string|in:ADMIN,USER',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'roles' => $request->roles,
        ]);

        // Redirect ke halaman index
        if ($user) {
            return redirect()->route('dashboard.user.index')
                ->with('success', 'Data pengguna berhasil diupdate');
        } else {
            return redirect()->route('dashboard.user.index')
                ->with('error', 'Data pengguna gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Fungsi ini digunakan untuk menghapus data user
        
        $user -> delete();

        return redirect()->route('dashboard.user.index')->with('success', 'Data user berhasil dihapus');
    }
}
