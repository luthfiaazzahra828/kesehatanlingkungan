@extends('layout')
@section('content')
<div id="contact">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="bg-primary text-white p-5 h-100 d-flex flex-column justify-content-center">
                    <h1 class="display-4" data-aos="fade-right" data-aos-delay="300">Hubungi Kami</h1>
                    <p class="lead" data-aos="fade-right" data-aos-delay="500">
                        Kami senang mendengar dari Anda. Hubungi kami untuk pertanyaan, saran, atau kolaborasi.
                    </p>
                    <ul class="list-unstyled mt-4" data-aos="fade-right" data-aos-delay="700">
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i> Jl. Kesehatan Lingkungan No. 123, Jakarta
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone me-2"></i> +62 21 1234 5678
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope me-2"></i> info@kesehatanlingkungan.com
                        </li>
                    </ul>
                    <div class="mt-4" data-aos="fade-right" data-aos-delay="900">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="mb-4" data-aos="fade-left" data-aos-delay="300">Kirim Pesan</h2>
                    <form data-aos="fade-left" data-aos-delay="500">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mt-5">
        <div class="row g-0">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664463465933!2d106.82495931476882!3d-6.175392395529719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1623317982274!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <div style="padding-top: 100px;"></div>
</div>
@endsection
