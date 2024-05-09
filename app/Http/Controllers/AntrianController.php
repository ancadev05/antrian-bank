<?php

namespace App\Http\Controllers;

use App\Models\antrian_cs;
use App\Models\antrian_proses;
use App\Models\antrian_selesai;
use App\Models\antrian_teller;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function antrianAmbil()
    {
        return view('antrian-ambil');
    }

    public function tambahAntrianTeller()
    {
        $antrian = antrian_teller::get()->last();
        $antrian_proses = antrian_proses::get()->last();
        $antrian_selesai = antrian_selesai::get()->last();

        if ($antrian == null) {
            $no_antrian = 1;
        } else {
            $antrian_terakhir = $antrian['id'];
            $no_antrian = $antrian_terakhir + 1;
        }

        $data = [
            'kode_antrian' => 'A',
            'no_antrian' => $no_antrian
        ];

        antrian_teller::create($data);

        return redirect()->to('/antrian-ambil');
    }

    public function tambahAntrianCs()
    {
        $antrian = antrian_cs::get()->last();

        if ($antrian == null) {
            $no_antrian = 1;
        } else {
            $antrian_terakhir = $antrian['id'];
            $no_antrian = $antrian_terakhir + 1;
        }

        $data = [
            'kode_antrian' => 'B',
            'no_antrian' => $no_antrian
        ];

        antrian_cs::create($data);

        return redirect()->to('/antrian-ambil');
    }

    // teller menampilkan halaman awal
    public function teller()
    {
        $antrian_teller = antrian_teller::get();

        // antrian yang akan dipanggil
        $antrian = antrian_teller::get()->first();

        // jika antrian kosong
        if ($antrian == null) {
            $antrian_proses = '---';
        } else {
            $antrian_proses = $antrian['no_antrian'];
        }

        return view('teller')->with('daftarAntrian', $antrian_teller)
            ->with('antrianProses', $antrian_proses);
    }

    public function panggilAntrianTeller()
    {
    }

    // antrian selesai
    public function antrianSelesai()
    {
    }
}
