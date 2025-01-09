<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Potential;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
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
        $categories = Category::all();
        return view('admin.potential.add-category', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'description.required' => 'Deskripsi wajib diisi.',
        ]);

        Category::create($data);

        return redirect()->route('admin.potential')->with('section', 'category')->with('status', 'Sukses, berhasil menambahkan data kategori potensi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        $category = Category::find($id);
        return view('admin.potential.edit-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category, $id)
    {
        $category = Category::find($id);

        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'description.required' => 'Lokasi wajib diisi.',
        ]);

        Category::where('id', $id)->update($data);

        return redirect()->route('admin.potential')->with('section', 'category')->with('status', 'Sukses, berhasil mengubah data kategori potensi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->with('section', 'category')->with('status', 'Gagal, data potensi tidak ditemukan.');
        }

        // hapus potensi yang terhubung dengan kategori
        $potentials = Potential::where('category_id', $id)->get();
        foreach ($potentials as $potential) {
            $potential->update(['category_id' => null]);
        }

        Category::where('id', $id)->delete();

        return redirect()->route('admin.potential')->with('section', 'category')->with('status', 'Sukses, berhasil menghapus data kategori potensi.');
    }
}
