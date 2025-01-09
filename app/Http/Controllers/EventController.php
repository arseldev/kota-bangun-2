<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('general.kalender-desa', compact('events'));
    }

    public function event()
    {
        $events = Event::orderBy('date', 'asc')->get()->map(function ($event) {
            // Format tanggal
            $event->formatted_date = Carbon::parse($event->date)->format('d-m-Y');
            return $event;
        });

        return view('admin.event.index', compact('events'));
    }

    public function documentation()
    {
        $eventThisMonth = Event::whereMonth('date', Carbon::now()->month)
            ->whereYear('date', Carbon::now()->year)
            ->orderBy('date', 'desc')
            ->get();

        // Ambil event bulan sebelumnya
        $lastMonth = Carbon::now()->subMonth();
        $eventPrev = Event::where('date', '<', now()->startOfMonth())
            ->orderBy('date', 'desc')
            ->paginate(7);

        return view('general.dokumentasi-kegiatan', compact('eventThisMonth', 'eventPrev'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], [
            'title.required' => 'Judul wajib diisi.',
            'date.required' => 'Tanggal wajib diisi.',
            'date.date' => 'Tanggal harus berupa tanggal.',
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
            return redirect()->back()->with('section', 'event')->with('status', 'Gagal, gambar wajib diisi.');
        }

        Event::create($data);

        return redirect()->route('admin.event')->with('section', 'event')->with('status', 'Sukses, berhasil menambahkan data kegiatan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event, $id)
    {
        $event = Event::find($id);
        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event, $id)
    {
        $event = Event::find($id);

        $data = $request->validate([
            'title' => 'required',
            'date' => 'required|date',
        ], [
            'title.required' => 'Judul wajib diisi.',
            'date.required' => 'Tanggal wajib diisi.',
            'date.date' => 'Tanggal harus berupa tanggal.',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($event->image) {
                $oldImagePath = public_path('storage/' . $event->image); // Pastikan ini sesuai dengan path gambar
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
            $data['image'] = $event->image; // Jika tidak ada gambar baru, gunakan gambar lama
        }

        Event::where('id', $id)->update($data);

        return redirect()->route('admin.event')->with('section', 'event')->with('status', 'Sukses, berhasil mengubah data kegiatan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, $id)
    {
        $event = Event::find($id);

        if (!$event) {
            return redirect()->back()->with('section', 'event')->with('status', 'Gagal, data pemerintah tidak ditemukan.');
        }

        if ($event->image) {
            $imagePath = public_path('storage/' . $event->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        Event::where('id', $id)->delete();

        return redirect()->route('admin.event')->with('section', 'event')->with('status', 'Sukses, berhasil menghapus data pemerintah.');
    }
}
