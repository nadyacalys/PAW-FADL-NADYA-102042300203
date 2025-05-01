<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            $nama = "Nadya Calystha Andini",
            $nim = 102042300203,
            $email = "nadyacalystha@student.telkomuniversity.ac.id",
            $jurusan = "Sistem Informasi",
            $fakultas = "Fakultas Rekayasa Industri",
            ];
    
            return view('profil', compact('nama', 'nim', 'email', 'jurusan', 'fakultas'));
    }
}
