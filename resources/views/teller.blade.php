@extends('template.template')

{{-- title --}}
@section('title')
    Teller
@endsection

{{-- konten --}}
@section('antrian-ambil')
    <div class="container p-5">
        <div class="row">
            <div class="col-3 text-bg-secondary p-2">
                <h4>Daftar Antrian Teller</h4>
                <table class="table table-sm table-bordered bg-white ">
                    <thead>
                        <tr>
                            <th>No. Antrian</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($daftarAntrian as $item)
                            <tr>
                                <td class="text-center">A{{ $item->no_antrian }}</td>
                                <td class="text-center">{{ $item->created_at }}</td>
                            </tr>
                        @empty
                            <div class="alert alert-info">Belum ada antrian</div>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="col-9">
                <h1 class="text-center text-bg-dark p-2 mb-4">Teller 1</h1>
                {{-- angka teller --}}
                <div class="row mb-3">
                    <div class="col-4 offset-4">
                        <h1 class="text-center" id="angka-teller">A{{ $antrianProses }}</h1>
                    </div>
                    <div class="col-2 offset-2">
                        <h6 class="btn btn-sm btn-danger">Panggil Ulang</h6>
                    </div>
                </div>
                {{-- /angka teller --}}

                {{-- tombol selanjutnay --}}
                <div class="row">
                    <div class="col-2 offset-4">
                        <form action="{{ url('/teller/antrian-selesai') }}" method="POST">
                            @csrf
                            <button class="btn btn-success text-center">Selesai</button>
                        </form>
                    </div>
                    <div class="col-2">
                        <form action="{{ url('/teller/panggil-antrian-teller') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary text-center">Selanjutnya</button>
                        </form>
                    </div>
                </div>
                {{-- /tombol selanjutnay --}}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function panggil() {
            alert('ok');
        }
    </script>
@endsection
