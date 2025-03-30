@extends('admin/layout')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-3">{{ $title }}</h3>
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-primary mb-3" href="{{ url('panel/videotambah') }}">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>Video</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        ?>
                                        @foreach ($videos as $row)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $row->judul }}</td>
                                                <td>{{ tanggal($row->created_at) }}</td>
                                                <td>
                                                    <video width="150" height="100" controls>
                                                        <source src="{{ asset('video/' . $row->video) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </td>
                                                <td>
                                                    {{ strip_tags(substr($row->deskripsi, 0, 50)) }}
                                                </td>
                                                <td>
                                                    <a class="btn btn-info m-1"
                                                        href="{{ url('/#video') }}"
                                                        target="_blank">View</a>
                                                    <a class="btn btn-primary m-1"
                                                        href="{{ url('panel/videoedit/' . $row->id) }}">Edit</a>
                                                    <a class="btn btn-danger bdel m-1"
                                                        href="{{ url('panel/videohapus/' . $row->id) }}">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
