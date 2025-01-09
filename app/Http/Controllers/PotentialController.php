<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Potential;
use Illuminate\Http\Request;

class PotentialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $potentials = Potential::all();
        $categories = Category::all();
        return view('general.potensi-desa', compact('potentials', 'categories'));
    }

    public function potential()
    {
        $potentials = Potential::orderBy('name', 'asc')->get();
        $categories = Category::all();
        return view('admin.potential.index', compact('potentials', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.potential.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'location.required' => 'Lokasi wajib diisi.',
            'category_id.required' => 'Kategori wajib diisi.',
            'image.required' => 'Gambar wajib diisi.',
            'image.mimes' => 'File harus berformat PNG/JPG/JPEG.',
            'image.max' => 'File tidak boleh lebih dari 2 MB.',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->extension();
            $image_path = $image->storeAs('assets', $image_name, 'public');
            $data['image'] = $image_path;
        } else {
            return redirect()->back()->with('section', 'potential')->with('status', 'Gagal, gambar wajib diisi.');
        }

        Potential::create($data);

        return redirect()->route('admin.potential')->with('section', 'potential')->with('status', 'Sukses, berhasil menambahkan data potensi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Potential $potential)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Potential $potential, $id)
    {
        $potential = Potential::find($id);
        $categories = Category::all();
        return view('admin.potential.edit', compact('potential', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Potential $potential, $id)
    {
        $potential = Potential::find($id);

        $data = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'category_id' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'location.required' => 'Lokasi wajib diisi.',
            'category_id.required' => 'Kategori wajib diisi.',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($potential->image) {
                $oldImagePath = public_path('storage/' . $potential->image); // Pastikan ini sesuai dengan path gambar
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
            $data['image'] = $potential->image; // Jika tidak ada gambar baru, gunakan gambar lama
        }
        Potential::where('id', $id)->update($data);

        return redirect()->route('admin.potential')->with('section', 'potential')->with('status', 'Sukses, berhasil mengubah data potensi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Potential $potential, $id)
    {
        $potential = Potential::find($id);

        if (!$potential) {
            return redirect()->back()->with('section', 'potential')->with('status', 'Gagal, data potensi tidak ditemukan.');
        }

        if ($potential->image) {
            $imagePath = public_path('storage/' . $potential->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        Potential::where('id', $id)->delete();

        return redirect()->route('admin.potential')->with('section', 'potential')->with('status', 'Sukses, berhasil menghapus data potensi.');
    }
}
