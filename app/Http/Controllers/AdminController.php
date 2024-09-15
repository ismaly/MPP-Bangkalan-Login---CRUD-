<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Profil;
use App\Models\Fasilitas;
use App\Models\Pelayanan;
use App\Models\SubPelayanan;
use App\Models\Instansi;
use App\Models\Galeri;
use App\Models\syarat;

class AdminController extends Controller
{
    // Metode untuk mengelola Profil
    public function dashboardAdmin()
    {
        // Mendapatkan pengguna yang sedang terautentikasi
        $user = Auth::user();

        // Mengirimkan data pengguna ke view
        return view('admin.dashboardAdmin', ['user' => $user]);
    }

    // Metode untuk mengelola Profil
    public function indexProfil()
    {
        $user = Auth::user();
        $profils = Profil::paginate(100);
        return view('admin.profil.index', compact('profils', 'user'));
    }
    public function createProfil()
    {
        $user = Auth::user();
        return view('admin.profil.create', compact('user'));
    }
    public function storeProfil(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'title' => 'required|string|max:255',
            'desc_profil' => 'required|string',
        ]);

        // Mendapatkan ID pengguna yang sedang login
        $userId = auth()->id();

        // Menyimpan data profil dengan ID pengguna
        Profil::create([
            'title' => $request->input('title'),
            'desc_profil' => $request->input('desc_profil'),
            'id_user' => $userId,
        ]);

        return redirect()->route('manage-profil.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function editProfil($id)
    {
        $user = Auth::user();
        $profil = Profil::findOrFail($id);
        return view('admin.profil.edit', compact('profil', 'user'));
    }
    public function updateProfil(Request $request, $id)
    {
        $item = Profil::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('manage-profil.index')->with('success', 'Data berhasil diperbarui!');
    }
    public function destroyProfil($id)
    {
        Profil::destroy($id);
        return redirect()->route('manage-profil.index')->with('success', 'Data berhasil dihapus!');
    }

    // Metode untuk mengelola Fasilitas
    public function indexFasilitas()
    {
        $user = Auth::user();
        $fasilitas = Fasilitas::paginate(100);
        return view('admin.fasilitas.index', compact('fasilitas', 'user'));
    }
    public function createFasilitas()
    {
        $user = Auth::user();
        return view('admin.fasilitas.create', compact('user'));
    }
    public function storeFasilitas(Request $request)
    {
        // Validasi request
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'desc_fasilitas' => 'required|string',
            'gambar_fasilitas' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();

        // Menyimpan gambar dan mendapatkan path
        $imagePath = $request->file('gambar_fasilitas')->store('public/fasilitas');

        // Menyimpan data fasilitas dengan gambar dan ID pengguna
        Fasilitas::create([
            'nama_fasilitas' => $request->input('nama_fasilitas'),
            'desc_fasilitas' => $request->input('desc_fasilitas'),
            'gambar_fasilitas' => basename($imagePath), // Simpan nama file gambar
            'id_user' => $userId, // ID pengguna
        ]);

        return redirect()->route('manage-fasilitas.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function editFasilitas($id)
    {
        $user = Auth::user();
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas', 'user'));
    }
    public function updateFasilitas(Request $request, $id)
    {
        $item = Fasilitas::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'desc_fasilitas' => 'required|string',
            'gambar_fasilitas' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cek apakah ada gambar baru yang diunggah
        if ($request->hasFile('gambar_fasilitas')) {
            // Hapus gambar lama jika ada
            if ($item->gambar_fasilitas && file_exists(public_path('storage/fasilitas/' . $item->gambar_fasilitas))) {
                unlink(public_path('storage/fasilitas/' . $item->gambar_fasilitas));
            }

            // Unggah gambar baru
            $gambarPath = $request->file('gambar_fasilitas')->store('fasilitas', 'public');
            $validated['gambar_fasilitas'] = basename($gambarPath);
        } else {
            // Jika tidak ada gambar baru, gunakan nama gambar lama
            $validated['gambar_fasilitas'] = $item->gambar_fasilitas;
        }

        // Perbarui item dengan data yang divalidasi
        $item->update($validated);

        return redirect()->route('manage-fasilitas.index')->with('success', 'Data berhasil diperbarui!');
    }


    public function destroyFasilitas($id)
    {
        Fasilitas::destroy($id);
        return redirect()->route('manage-fasilitas.index')->with('success', 'Data berhasil dihapus!');
    }



    // Metode untuk mengelola Pelayanan
    public function indexPelayanan()
    {
        $user = Auth::user();
        $pelayanan = Pelayanan::paginate(100);
        return view('admin.pelayanan.index', compact('pelayanan', 'user'));
    }
    public function createPelayanan()
    {
        $user = Auth::user();
        return view('admin.pelayanan.create', compact('user'));
    }
    public function storePelayanan(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'kategori_layanan' => 'required|string|max:255',
        ]);

        // Mendapatkan ID pengguna yang sedang login
        $userId = auth()->id();

        // Menyimpan data profil dengan ID pengguna
        Pelayanan::create([
            'kategori_layanan' => $request->input('kategori_layanan'),
            'id_user' => $userId,
        ]);

        return redirect()->route('manage-pelayanan.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function editPelayanan($id)
    {
        $user = Auth::user();
        $pelayanan = Pelayanan::findOrFail($id);
        return view('admin.pelayanan.edit', compact('pelayanan', 'user'));
    }
    public function updatePelayanan(Request $request, $id)
    {
        $item = Pelayanan::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('manage-pelayanan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroyPelayanan($id)
    {
        Pelayanan::destroy($id);
        return redirect()->route('manage-pelayanan.index')->with('success', 'Data berhasil dihapus!');
    }


    // Metode untuk mengelola Sub Pelayanan
    public function indexSubPelayanan()
    {
        $user = Auth::user();
        // Mengambil data sub pelayanan dengan relasi ke tabel pelayanan
        $subpelayanan = SubPelayanan::with('pelayanan')->paginate(100);
        return view('admin.subpelayanan.index', compact('subpelayanan', 'user'));
    }

    public function createSubPelayanan()
    {
        $pelayanan = Pelayanan::all();
        $user = Auth::user();
        return view('admin.subpelayanan.create', compact('user', 'pelayanan'));
    }

    public function storeSubPelayanan(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'nama_sub' => 'required|string|max:255',
            'id_layanan' => 'required|exists:pelayanan,id_layanan',
        ]);

        // Mendapatkan ID pengguna yang sedang login
        $userId = auth()->id();

        // Menyimpan data sub pelayanan dengan ID pengguna
        SubPelayanan::create([
            'nama_sub' => $request->input('nama_sub'),
            'id_layanan' => $request->input('id_layanan'),
            'id_user' => $userId,
        ]);

        return redirect()->route('manage-sub-pelayanan.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function editSubPelayanan($id)
    {
        $user = Auth::user();
        $pelayanan = Pelayanan::all();
        $subpelayanan = SubPelayanan::findOrFail($id);
        return view('admin.subpelayanan.edit', compact('subpelayanan', 'user', 'pelayanan'));
    }

    public function updateSubPelayanan(Request $request, $id)
    {
        $item = SubPelayanan::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('manage-sub-pelayanan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroySubPelayanan($id)
    {
        SubPelayanan::destroy($id);
        return redirect()->route('manage-sub-pelayanan.index')->with('success', 'Data berhasil dihapus!');
    }


    // Metode untuk mengelola Syarat
    public function indexSyarat()
    {
        $user = Auth::user();
        // Mengambil data sub pelayanan dengan relasi ke tabel pelayanan
        $syarat = syarat::with('subpelayanan')->paginate(100);
        // $syarat = syarat::paginate(100);
        return view('admin.syarat.index', compact('syarat', 'user'));
    }

    public function createSyarat()
    {
        $subpelayanan = SubPelayanan::all();
        $user = Auth::user();
        return view('admin.syarat.create', compact('user', 'subpelayanan'));
    }

    public function storeSyarat(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'komponen' => 'required|string|max:255',
            'uraian' => 'required|string',
            'id_sub' => 'required|exists:sub_pelayanan,id_sub',
        ]);

        // Mendapatkan ID pengguna yang sedang login
        // $userId = auth()->id();

        // Menyimpan data sub pelayanan dengan ID pengguna
        syarat::create([
            'komponen' => $request->input('komponen'),
            'uraian' => $request->input('uraian'),
            'id_sub' => $request->input('id_sub'),
            // 'id_user' => $userId,
        ]);

        return redirect()->route('manage-syarat.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function editSyarat($id)
    {
        $user = Auth::user();
        $subpelayanan = SubPelayanan::all();
        $syarat = syarat::findOrFail($id);
        return view('admin.syarat.edit', compact('subpelayanan', 'user', 'syarat'));
    }

    public function updateSyarat(Request $request, $id)
    {
        $item = Syarat::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('manage-syarat.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroySyarat($id)
    {
        syarat::destroy($id);
        return redirect()->route('manage-syarat.index')->with('success', 'Data berhasil dihapus!');
    }

    // Metode untuk mengelola Instansi
    public function indexInstansi()
    {
        $user = Auth::user();
        $instansi = Instansi::paginate(100);
        return view('admin.instansi.index', compact('instansi', 'user'));
    }
    public function createInstansi()
    {
        $user = Auth::user();
        return view('admin.instansi.create', compact('user'));
    }
    public function storeInstansi(Request $request)
    {
        // Validasi request
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'url' => 'required|string',
            'gambar_instansi' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();

        // Menyimpan gambar dan mendapatkan path
        $imagePath = $request->file('gambar_instansi')->store('public/instansi');

        // Menyimpan data fasilitas dengan gambar dan ID pengguna
        Instansi::create([
            'nama_instansi' => $request->input('nama_instansi'),
            'url' => $request->input('url'),
            'gambar_instansi' => basename($imagePath), // Simpan nama file gambar
            'id_user' => $userId, // ID pengguna
        ]);

        return redirect()->route('manage-instansi.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function editInstansi($id)
    {
        $user = Auth::user();
        $instansi = Instansi::findOrFail($id);
        return view('admin.instansi.edit', compact('instansi', 'user'));
    }
    public function updateInstansi(Request $request, $id)
    {
        $item = Instansi::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'url' => 'required|url',
            'gambar_instansi' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cek apakah ada gambar baru yang diunggah
        if ($request->hasFile('gambar_instansi')) {
            // Hapus gambar lama jika ada
            if ($item->gambar_instansi && file_exists(public_path('storage/instansi/' . $item->gambar_instansi))) {
                unlink(public_path('storage/instansi/' . $item->gambar_instansi));
            }

            // Unggah gambar baru
            $gambarPath = $request->file('gambar_instansi')->store('instansi', 'public');
            $validated['gambar_instansi'] = basename($gambarPath);
        } else {
            // Jika tidak ada gambar baru, gunakan nama gambar lama
            $validated['gambar_instansi'] = $item->gambar_instansi;
        }

        // Perbarui item dengan data yang divalidasi
        $item->update($validated);

        return redirect()->route('manage-instansi.index')->with('success', 'Data berhasil diperbarui!');
    }


    public function destroyInstansi($id)
    {
        Instansi::destroy($id);
        return redirect()->route('manage-instansi.index')->with('success', 'Data berhasil dihapus!');
    }

    // Metode untuk mengelola Galeri
    public function indexGaleri()
    {
        $user = Auth::user();
        $galeri = Galeri::paginate(100);
        return view('admin.galeri.index', compact('galeri', 'user'));
    }
    public function createGaleri()
    {
        $user = Auth::user();
        return view('admin.galeri.create', compact('user'));
    }
    public function storeGaleri(Request $request)
    {
        // Validasi request
        $request->validate([
            'title' => 'required|string|max:255',
            'gambar_mpp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();

        // Menyimpan gambar dan mendapatkan path
        $imagePath = $request->file('gambar_mpp')->store('public/galeri');

        // Menyimpan data fasilitas dengan gambar dan ID pengguna
        Galeri::create([
            'title' => $request->input('title'),
            'gambar_mpp' => basename($imagePath), // Simpan nama file gambar
            'id_user' => $userId, // ID pengguna
        ]);

        return redirect()->route('manage-galeri.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function editGaleri($id)
    {
        $user = Auth::user();
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri', 'user'));
    }
    public function updateGaleri(Request $request, $id)
    {
        $item = Galeri::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'gambar_mpp' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cek apakah ada gambar baru yang diunggah
        if ($request->hasFile('gambar_mpp')) {
            // Hapus gambar lama jika ada
            if ($item->gambar_mpp && file_exists(public_path('storage/galeri/' . $item->gambar_mpp))) {
                unlink(public_path('storage/galeri/' . $item->gambar_mpp));
            }

            // Unggah gambar baru
            $gambarPath = $request->file('gambar_mpp')->store('galeri', 'public');
            $validated['gambar_mpp'] = basename($gambarPath);
        } else {
            // Jika tidak ada gambar baru, gunakan nama gambar lama
            $validated['gambar_mpp'] = $item->gambar_mpp;
        }

        // Perbarui item dengan data yang divalidasi
        $item->update($validated);

        return redirect()->route('manage-galeri.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroyGaleri($id)
    {
        Galeri::destroy($id);
        return redirect()->route('manage-galeri.index')->with('success', 'Data berhasil dihapus!');
    }
}
