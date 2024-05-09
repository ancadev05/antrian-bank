@extends('template.template')

{{-- title --}}
@section('title')
    Admin
@endsection

{{-- konten --}}
@section('antrian-ambil')
    <div class="container position-relative ">
        <h1 class="text-center mb-5 ">HALAMAN ADMIN</h1>
        <a href="{{ url('/admin') }}" class="btn btn-lg btn-primary" target="_blank">ADMIN</a>

        {{-- reset antrian teller --}}
        <form action="{{ url('/admin/reset-antrian-teller') }}" method="post">
            @csrf
            <button class="btn btn-lg btn-danger" onclick="return confirm('yakin ingin reset antrian?')">Reset Antrian
                Teller</button>
        </form>
        {{-- reset antrian cs --}}
        <form action="{{ url('/admin/reset-antrian-cs') }}" method="post">
            @csrf
            <button class="btn btn-lg btn-danger" onclick="return confirm('yakin ingin reset antrian?')">Reset Antrian
                CS</button>
        </form>
        {{-- tambah teller --}}
        <form action="{{ url('/admin/tambah-teller') }}" method="post">
            @csrf
            <button class="btn btn-lg btn-warning">Tambah Teller</button>
        </form>

        {{-- data teller --}}
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Kode Teller</th>
                    <th>Nama Teller</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($teller as $item)
                    <tr>
                        <td>{{ $item->nama_teller }}</td>
                        <td>{{ $item->kode_teller }}</td>
                        <td>
                            <form action="{{ url('/admin/delete-teller/' . $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('yakin ingin hapus teller')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-info">Belum ada teller yang terdaftar</div>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
