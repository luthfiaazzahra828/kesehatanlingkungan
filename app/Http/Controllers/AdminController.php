<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $jumlahfoto = DB::table('foto')->count();
        $jumlahvideo = DB::table('videos')->count();
        $jumlahblog = DB::table('blogs')->count();
        $data = [
            'title' => 'Selamat Datang ' . session('users') . ' Di Panel Web',
            'jumlahfoto' => $jumlahfoto ?? 0,
            'jumlahvideo' => $jumlahvideo ?? 0,
            'jumlahblog' => $jumlahblog ?? 0,
        ];
        return view('admin/dashboard', $data);
    }
    public function fotodaftar()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $fotos = DB::table('foto')
            ->orderBy('id', 'desc')->get();
        $data = [
            'title' => 'Daftar Foto',
            'fotos' => $fotos,
        ];
        return view('admin/fotodaftar', $data);
    }
    public function fototambah()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $data = [
            'title' => 'Tambah Foto',
        ];
        return view('admin/fototambah', $data);
    }
    public function fototambahsimpan(Request $request)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $judul = $request->input('judul');
        $tanggal = $request->input('tanggal');
        $foto = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('foto'), $foto);
        DB::table('foto')->insert([
            'judul' => $judul,
            'foto' => $foto,
            'created_at' => $tanggal,
        ]);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('panel/fotodaftar');
    }
    public function fotoedit($id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $row = DB::table('foto')->where('id', $id)->first();
        $data = [
            'title' => 'Edit Foto',
            'row' => $row,
        ];
        return view('admin/fotoedit', $data);
    }
    public function fotoeditsimpan(Request $request, $id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $data = [
            'judul' => $request->input('judul'),
        ];
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('foto'), $foto);
            $data['foto'] = $foto;
        }
        DB::table('foto')->where('id', $id)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('panel/fotodaftar');
    }
    public function fotohapus($id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $foto = DB::table('foto')->where('id', $id)->first();
        Storage::delete('foto/' . $foto->foto);
        DB::table('foto')->where('id', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('panel/fotodaftar');
    }
    public function videodaftar()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }

        $video = DB::table('videos')
            ->orderBy('id', 'desc')->get();
        $data = [
            'title' => 'Daftar video',
            'videos' => $video,
        ];
        return view('admin/videodaftar', $data);
    }
    public function videotambah()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $data = [
            'title' => 'Tambah video',
        ];
        return view('admin/videotambah', $data);
    }
    public function videotambahsimpan(Request $request)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $tanggal = $request->input('tanggal');
        $video = $request->file('video')->getClientOriginalName();
        $request->file('video')->move(public_path('video'), $video);
        DB::table('videos')->insert([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'created_at' => $tanggal,
            'video' => $video,
        ]);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('panel/videodaftar');
    }
    public function videoedit($id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $row = DB::table('videos')->where('id', $id)->first();
        $data = [
            'title' => 'Edit video',
            'row' => $row,
        ];
        return view('admin/videoedit', $data);
    }
    public function videoeditsimpan(Request $request, $id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $data = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'created_at' => $request->input('tanggal'),
        ];
        if ($request->hasFile('video')) {
            $video = $request->file('video')->getClientOriginalName();
            $request->file('video')->move(public_path('video'), $video);
            $data['video'] = $video;
        }
        DB::table('videos')->where('id', $id)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('panel/videodaftar');
    }
    public function videohapus($id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $video = DB::table('videos')->where('id', $id)->first();
        Storage::delete('video/' . $video->video);
        DB::table('videos')->where('id', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('panel/videodaftar');
    }

    public function blogdaftar()
    {
        $blog = DB::table('blogs')
            ->orderBy('id', 'desc')->get();
        $data = [
            'title' => 'Daftar Blog',
            'blogs' => $blog,
        ];
        return view('admin/blogdaftar', $data);
    }
    public function blogtambah()
    {
        $data = [
            'title' => 'Tambah Blog',
        ];
        return view('admin/blogtambah', $data);
    }

    public function blogtambahsimpan(Request $request)
    {
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $tanggal = $request->input('tanggal');
        $foto = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('blog'), $foto);
        DB::table('blogs')->insert([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'created_at' => $tanggal,
            'foto' => $foto,
        ]);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('panel/blogdaftar');
    }

    public function blogedit($id)
    {
        $row = DB::table('blogs')->where('id', $id)->first();
        $data = [
            'title' => 'Edit Blog',
            'row' => $row,
        ];
        return view('admin/blogedit', $data);
    }

    public function blogeditsimpan(Request $request, $id)
    {
        $data = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'created_at' => $request->input('tanggal'),
        ];
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('blog'), $foto);
            $data['foto'] = $foto;
        }
        DB::table('blogs')->where('id', $id)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('panel/blogdaftar');
    }

    public function bloghapus($id)
    {
        // unlink public_path('blog/' . $foto);
        $foto = DB::table('blogs')->where('id', $id)->first();
        Storage::delete('blog/' . $foto->foto);
        DB::table('blogs')->where('id', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('panel/blogdaftar');
    }

    public function ceklogin()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
    }

    public function profil()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $id = session('users');
        if (session('users')) {
            $row = DB::table('users')->where('name', $id)->first();
        } else {
            $row = DB::table('users')

                ->where('users.name', $id)
                ->first();
        }
        $data = [
            'title' => 'Profil',
            'row' => $row,
        ];
        return view('admin/profil', $data);
    }
    public function profiledit()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $id = session('users');
        if (session('users')) {
            $row = DB::table('users')->where('name', $id)->first();
        } else {
            $row = DB::table('users')
                ->where('users.name', $id)
                ->first();
        }
        $data = [
            'title' => 'Edit Profile',
            'row' => $row,
        ];
        return view('admin/profiledit', $data);
    }
    public function profileditsimpan(Request $request)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        if (session('users')) {
            $id = session('users');
            $data = [
                'name' => $request->input('nama'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ];
            DB::table('users')->where('name', $id)->update($data);
        } else {
            $nama = $request->input('nama');
            $email = $request->input('email');
            $password = $request->input('password');


            $id = session('users');
            $data = [
                'name' => $request->input('nama'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ];
            DB::table('users')->where('name', $id)->update($data);

        }
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('panel/profil');
    }
    public function login()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $data = [
            'title' => 'Login',
        ];
        return view('login', $data);
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
