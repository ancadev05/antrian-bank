// antrian yang akan dipanggil
$antrian_teller = antrian_teller::where('kode_antrian', 'A')->get()->first();

// antiaan dalam proses
$antrian_proses = antrian_proses::where('kode_antrian', 'A')->get()->first();

// dd($antrian_teller);

// setelah terpanggil, masuk ke antrian proses    
// $data = [
//     'kode_antrian' => 'A',
//     'no_antrian' => $antrian_teller['id']
// ];
// antrian_proses::create($data);

// menghapus antrian yang sudah diproses dalam tabel antrian teller
// antrian_teller::where('id', $antrian_teller['id'])->delete();

// $antrian_proses = antrian_proses::get()->last();
// $antrian_selesai = antrian_selesai::get()->last();


// jika antrian kosong
if ($antrian_teller == null) {
    return redirect()->to('/teller');
} elseif ($antrian_teller['id']) {
    // setelah terpanggil, masuk ke antrian proses    
    $data = [
        'kode_antrian' => 'A',
        'no_antrian' => $antrian_teller['id']
    ];

    // memasukkan antrian teller ke antrian proses
    antrian_proses::create($data);

    // menghapus antrian yang sudah masuk di antrian proses
    antrian_teller::where('id', $antrian_teller['id'])->delete();

    // kondisi jika antrian proses masi kosong
    if ($antrian_proses != null) {
        $data = [
            'kode_antrian' => 'A',
            'no_antrian' => $antrian_proses['id']
        ];
        antrian_selesai::create($data);
    }




    // $antrianPanggil = $antrian_teller['id'];
    // // hapus antrian yang sudah diproses
    // antrian_teller::where('id', $antrianPanggil)->delete();
    // return redirect()->to('/teller');