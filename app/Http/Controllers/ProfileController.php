<?php

namespace App\Http\Controllers;

use App\Models\Government;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();
        $governments = Government::all();
        return view('general.index', compact('profile', 'governments'));
    }

    public function admin()
    {
        $profile = Profile::first();
        $governments = Government::all();
        return view('admin.profile.index', compact('profile', 'governments'));
    }


    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        $profile = Profile::first();
        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile, $id)
    {
        $profile = Profile::find($id);

        if (!$profile) {
            return redirect()->back()->with('section', 'profile')->with('status', 'Gagal, profil tidak ditemukan.');
        }

        $data = $request->validate([
            'about' => 'required',
            'population' => 'required|numeric|min:0',
            'area' => 'required|numeric|min:0',
            'family' => 'required|numeric|min:0',
            'visi' => 'required',
            'misi' => 'required'
        ], [
            'about.required' => 'Tentang Desa wajib diisi.',
            'population.required' => 'Jumlah Penduduk wajib diisi.',
            'population.numeric' => 'Jumlah Penduduk harus berupa angka.',
            'population.min' => 'Jumlah Penduduk harus lebih dari 0.',
            'area.required' => 'Luas Wilayah wajib diisi.',
            'area.numeric' => 'Luas Wilayah harus berupa angka.',
            'area.min' => 'Luas Wilayah harus lebih dari 0.',
            'family.required' => 'Kepala Keluarga wajib diisi.',
            'family.numeric' => 'Kepala Keluarga harus berupa angka.',
            'family.min' => 'Kepala Keluarga harus lebih dari 0.',
            'visi.required' => 'Visi wajib diisi.',
            'misi.required' => 'Misi wajib diisi.'
        ]);


        Profile::where('id', $id)->update($data);

        return redirect()->route('admin.profile')->with('section', 'profile')->with('status', 'Sukses, berhasil mengubah data tentang desa.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
