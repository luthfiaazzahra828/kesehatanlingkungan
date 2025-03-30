@extends('layout')
@section('content')
<div id="gallery">
    <div class="container marketing">
        <div class="row featurette">
            <div class="col-md-12">
                <center>
                    <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-down"
                        data-aos-delay="500">
                        <b>Video</b>
                    </h2>
                </center>
                <br>
            </div>
        </div>

        <div class="row">
            @foreach ($videos as $row)
                <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="500">
                    <div class="card">
                        <div class="card-img-top img-clickable text-center" data-bs-toggle="modal"
                            data-bs-target="#modalVideo{{ $row->id }}">
                            <video width="150" height="100" controls>
                                <source src="{{ asset('video/' . $row->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title
                            ">{{ $row->judul }}</h5>
                            <p class="card-text">{{ strip_tags($row->deskripsi) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal untuk menampilkan video dalam ukuran penuh -->
    @foreach ($videos as $row)
        <div class="modal fade
            text-dark" id="modalVideo{{ $row->id }}" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body
                        text-center">
                        <video width="100%" controls>
                            <source src="{{ asset('video/' . $row->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
