<?php

namespace App\Http\Controllers;

use App\Models\Government;
use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add()
    {
        return view('admin.government.add');
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
        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'position.required' => 'Jabatan wajib diisi.',
            'image.required' => 'Jabatan wajib diisi.',
            'image.mimes' => 'File harus berformat PNG/JPG/JPEG.',
            'image.max' => 'File tidak boleh lebih dari 2 MB.',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->extension();
            $image_path = $image->storeAs('assets', $image_name, 'public');
            $data['image'] = $image_path;
        } else {
            return redirect()->back()->with('status', 'Gagal, gambar wajib diisi.');
        }

        Government::create($data);

        return redirect()->route('admin.profile')->with('status', 'Sukses, berhasil menambahkan data pemerintah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Government $government)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Government $government, $id)
    {
        $government = Government::find($id);
        return view('admin.government.edit', compact('government'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Government $government, $id)
    {
        $government = Government::find($id);

        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'position.required' => 'Jabatan wajib diisi.',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($government->image) {
                $oldImagePath = public_path('storage/' . $government->image); // Pastikan ini sesuai dengan path gambar
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Hapus gambar lama
                }
            }

            // Simpan gambar baru
            $image = $request->file('image');
            $image_name = time() . '.' . $image->extension();
            $image_path = $image->storeAs('assets', $image_name, 'public');
            $data['image'] = $image_path;
        } else {
            $data['image'] = $government->image; // Jika tidak ada gambar baru, gunakan gambar lama
        }
        Government::where('id', $id)->update($data);

        return redirect()->route('admin.profile')->with('section', 'government')->with('status', 'Sukses, berhasil mengubah data pemerintah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $government = Government::find($id);

        if (!$government) {
            return redirect()->back()->with('section', 'government')->with('status', 'Gagal, data pemerintah tidak ditemukan.');
        }

        if ($government->image) {
            $imagePath = public_path('storage/' . $government->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        Government::where('id', $id)->delete();

        return redirect()->route('admin.profile')->with('section', 'government')->with('status', 'Sukses, berhasil menghapus data pemerintah.');
    }
}
