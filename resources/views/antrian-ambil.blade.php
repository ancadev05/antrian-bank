@extends('template.template')

{{-- title --}}
@section('title')
    Ambil Antrian
@endsection

{{-- konten --}}
@section('antrian-ambil')
    <div class="container bg-primary position-relative ">
        <h1 class="text-center mb-5 ">AMBIL ANTRIAN</h1>
        <div class="d-flex" id="antri">
            <div class="btn-antri shadow d-flex align-items-center justify-content-center me-2">
                <form action="{{ url('/antrian-ambil/teller') }}" method="POST">
                    @csrf
                    
                    <button>TELLER</button>

                </form>
            </div>
            <div class="btn-antri shadow d-flex align-items-center justify-content-center ms-2">
                <form action="{{ url('/antrian-ambil/cs') }}" method="POST">
                    @csrf
                    
                    <button>CS</button>

                </form>
            </div>
        </div>
    </div>
@endsection
