@extends('layout')
@section('content')
<div id="blog">
    <div class="container marketing">
        <div class="row featurette">
            <div class="col-md-12">
                <center>
                    <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-down"
                        data-aos-delay="500">
                        <b>Blog</b>
                    </h2>
                </center>
                <br>
            </div>
        </div>

        <div class="row">
            {{-- looping blog --}}
            @foreach ($blogs as $row)
                <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="500">
                    <div class="card">
                        <img style="height: 200px; object-fit: cover;" src="{{ asset('blog/' . $row->foto) }}"
                            class="card-img-top" alt="{{ $row->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->judul }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($row->deskripsi), 100) }}</p>
                            <a href="{{ url('blogdetail/' . $row->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="row mt-4">
            <div class="col-md-12">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
