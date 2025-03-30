@extends('layout')
@section('content')
<div id="gallery">
    <div class="container marketing">
        <div class="row featurette">
            <div class="col-md-12">
                <center>
                    <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-down"
                        data-aos-delay="500">
                        <b>Galeri</b>
                    </h2>
                </center>
                <br>
            </div>
        </div>

        <div class="row">
            {{-- looping galeri --}}
            @foreach ($galeri as $row)
                <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="500">
                    <div class="card">
                        <img style="height: 400px; object-fit: cover;" src="{{ asset('foto/' . $row->foto) }}"
                            class="card-img-top img-clickable" alt="{{ $row->judul }}" data-bs-toggle="modal"
                            data-bs-target="#modalFoto{{ $row->id }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal untuk menampilkan galeri dalam ukuran penuh -->
    @foreach ($galeri as $row)
        <div class="modal fade text-dark" id="modalFoto{{ $row->id }}" tabindex="-1" aria-labelledby="modal1Label"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="{{ asset('foto/' . $row->foto) }}" class="img-fluid">
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
</div>
@endsection
