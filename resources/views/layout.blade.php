<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Kesehatan Lingkungan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <script src="assets/js/color-modes.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- icon --}}
    <link href="{{ asset('foto/user.png') }}" rel="icon">
</head>

<body>
    <!-- Navbar Start -->
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Kesehatan Lingkungan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                                aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"
                                href="{{ url('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}"
                                href="{{ url('galeri') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('videos') ? 'active' : '' }}"
                                href="{{ url('videos') }}">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('blogs') || Request::is('blogdetail/*') ? 'active' : '' }}"
                                href="{{ url('blogs') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                                href="{{ url('contact') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content');

        <footer class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-2 mb-md-0">
                    <h6 class="animated slideInDown" style="color: blue;">
                        &copy; 2025 Kesehatan Lingkungan<strong></strong>
                    </h6>
                </div>
            </div>
        </footer>
    </main>
    <!-- JavaScript Libraries -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/home/admin/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/home/admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
            $('#tabel').DataTable();
        });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        $(function() {
            @if ($message = session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?= session('success') ?>'
                })
            @endif
        });
        $(function() {
            @if ($message = session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '<?= session('error') ?>'
                })
            @endif
        });
        const flashData = $('.flash-data').data('flashdata');
        // console.log(flashData);
        if (flashData) {
            Swal.fire({
                title: 'Berhasil !',
                text: '' + flashData,
                icon: 'success',
                showConfirmButton: false,
                timer: 3500
            });
        }
        const flashDataError = $('.flash-data-error').data('flashdata');
        // console.log(flashData);
        if (flashDataError) {
            Swal.fire({
                title: 'Gagal !',
                text: '' + flashDataError,
                icon: 'error',
                showConfirmButton: false,
                timer: 3500
            });
        }
        $('.bdel').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success m-1',
                    cancelButton: 'btn btn-danger m-1'
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: 'Yakin data ini akan dihapus?',
                text: "Data tidak akan bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Dibatalkan',
                        '',
                        'error'
                    )
                }
            });
        });
        $('.blogout').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success m-1',
                    cancelButton: 'btn btn-danger m-1'
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: 'Apakah Anda yakin ingin logout',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Logout!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Dibatalkan',
                        '',
                        'error'
                    )
                }
            });
        });
    </script>
</body>

</html>
