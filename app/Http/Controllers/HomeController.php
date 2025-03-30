<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $hariini = date('Y-m-d');
        $galeri = DB::table('foto')
            ->orderBy('id', 'asc')
            ->get();
        $videos = DB::table('videos')
            ->orderBy('id', 'asc')
            ->get();
        $blogs = DB::table('blogs')
            ->orderBy('id', 'asc')
            ->get();
        $data = [
            'title' => 'Beranda',
            'galeri' => $galeri,
            'videos' => $videos,
            'blogs' => $blogs,
        ];
        return view('beranda', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('login', $data);
    }
    public function logincek(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Cek autentikasi
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Redirect ke dashboard dengan sesi user aktif
            // set session
            session()->put('users', $user->name);
            return redirect('panel/dashboard')->with('success', 'Login Berhasil');
        }

        // Kalau gagal login
        return redirect()->back()->with('error', 'Email atau password salah');
    }

    public function fotodaftar()
    {
        $foto = DB::table('foto')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('foto')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Dokumentasi Foto',
            'foto' => $foto,
            'keyword' => '',
            'hitung' => $hitung,
        ];
        return view('fotodaftar', $data);
    }
    public function fotodaftarcari(Request $request)
    {
        $keyword = $request->input('keyword');
        $foto = DB::table('foto')
            ->where('judul', 'like', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('foto')
            ->where('judul', 'like', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Hasil Pencarian ' . $keyword,
            'foto' => $foto,
            'keyword' => $keyword,
            'hitung' => $hitung,
        ];
        return view('fotodaftar', $data);
    }
    public function fotodetail($id)
    {
        $row = DB::table('foto')->where('id', $id)->first();
        $foto = DB::table('foto')
            ->where('foto.id', $id)
            ->orderBy('id', 'desc')->get();
        $data = [
            'title' => 'Detail Foto',
            'row' => $row,
            'foto' => $foto,
        ];
        return view('fotodetail', $data);
    }
    public function videodaftar()
    {
        $video = DB::table('videos')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('videos')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Dokumentasi Video',
            'video' => $video,
            'keyword' => '',
            'hitung' => $hitung,
        ];
        return view('videodaftar', $data);
    }
    public function videodaftarcari(Request $request)
    {
        $keyword = $request->input('keyword');
        $video = DB::table('videos')
            ->where('judul', 'like', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('videos')
            ->where('judul', 'like', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Hasil Pencarian ' . $keyword,
            'video' => $video,
            'keyword' => $keyword,
            'hitung' => $hitung,
        ];
        return view('videodaftar', $data);
    }
    public function videodetail($id)
    {
        $row = DB::table('videos')->where('id', $id)->first();
        $video = DB::table('videos')
            ->where('videos.id', $id)
            ->orderBy('id', 'desc')->get();
        $data = [
            'title' => 'Detail video',
            'row' => $row,
            'video' => $video,
        ];
        return view('videodetail', $data);
    }

    // blog
    public function blogdaftar()
    {
        $blog = DB::table('blogs')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('blogs')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Dokumentasi Blog',
            'blog' => $blog,
            'keyword' => '',
            'hitung' => $hitung,
        ];
        return view('blogdaftar', $data);
    }

    public function blogdaftarcari(Request $request)
    {
        $keyword = $request->input('keyword');
        $blog = DB::table('blogs')
            ->where('judul', 'like', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('blogs')
            ->where('judul', 'like', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Hasil Pencarian ' . $keyword,
            'blog' => $blog,
            'keyword' => $keyword,
            'hitung' => $hitung,
        ];
        return view('blogdaftar', $data);
    }

    public function blogdetail($id)
    {
        $row = DB::table('blogs')->where('id', $id)->first();
        $blog = DB::table('blogs')
            ->where('blogs.id', $id)
            ->orderBy('id', 'desc')->get();
        $data = [
            'title' => 'Detail Blog',
            'row' => $row,
            'blog' => $blog,
        ];
        return view('blogdetail', $data);
    }

    // about
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami',
        ];
        return view('about', $data);
    }

    // contact
    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami',
        ];
        return view('contact', $data);
    }

    // galeri
    public function galeri()
    {
        $galeri = DB::table('foto')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('foto')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Galeri',
            'galeri' => $galeri,
            'keyword' => '',
            'hitung' => $hitung,
        ];
        return view('galeri', $data);
    }

    // video
    public function video()
    {
        $video = DB::table('videos')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('videos')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Video',
            'videos' => $video,
            'keyword' => '',
            'hitung' => $hitung,
        ];
        return view('video', $data);
    }

    // blog
    public function blog()
    {
        $blog = DB::table('blogs')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $hitung = DB::table('blogs')
            ->orderBy('created_at', 'asc')
            ->orderBy('id', 'desc')
            ->count();
        $data = [
            'title' => 'Blog',
            'blogs' => $blog,
            'keyword' => '',
            'hitung' => $hitung,
        ];
        return view('blog', $data);
    }
}
