<?php

namespace App\Http\Controllers;

use App\Models\antrian_cs;
use App\Models\antrian_teller;
use App\Models\teller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $teller = teller::get();

        return view('admin.index')->with('teller', $teller);
    }

    // tambah teller
    public function tambahTeller()
    {
        $teller = teller::get()->last();

        // dd($teller['id']);

        if ($teller == null) {
            $data = [
                'kode_teller' => 'T1',
                'nama_teller' => 'Teller 1'
            ];
            teller::create($data);
        } elseif ($id_teller = $teller['id'] == 1) {
            $id_teller = $teller['id'];
            $data = [
                'kode_teller' => 'T' . $id_teller + 1,
                'nama_teller' => 'Teller ' . $id_teller + 1
            ];
            teller::create($data);
        } else {
            $id_teller = $teller['id'];
            $data = [
                'kode_teller' => 'T' . $id_teller,
                'nama_teller' => 'Teller ' . $id_teller
            ];
            teller::create($data);
        }

        return redirect('/admin');
    }

    // hapus teller
    public function deleteTeller($id)
    {
        // dd('ok');
        teller::where('id', $id)->delete();
        return redirect('/admin');
    }


    // reset antrian teller
    public function resetAntrianTeller()
    {
        // menghapus isi tabel antrian
        antrian_teller::truncate();

        return redirect('/admin');
    }

    // reset antrian cs
    public function resetAntrianCs()
    {
        antrian_cs::truncate();

        return redirect('/admin');
    }
}
