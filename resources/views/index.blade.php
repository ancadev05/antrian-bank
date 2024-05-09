@extends('template.template')

{{-- title --}}
@section('title')
    Ambil Antrian
@endsection

{{-- konten --}}
@section('antrian-ambil')
    <div class="container position-relative ">
        <h1 class="text-center mb-5 ">AMBIL ANTRIAN</h1>
        <a href="{{ url('/admin') }}" class="btn btn-lg btn-primary" target="_blank">ADMIN</a>
        <a href="{{ url('/teller') }}" class="btn btn-lg btn-primary" target="_blank">TELLER</a>
        <a href="{{ url('/cs') }}" class="btn btn-lg btn-primary" target="_blank">CS</a>
        <a href="{{ url('/cs') }}" class="btn btn-lg btn-primary" target="_blank">DISPLAY</a>
        <a href="{{ url('/antrian-ambil') }}" class="btn btn-lg btn-primary" target="_blank">PRINT</a>
    </div>
@endsection
