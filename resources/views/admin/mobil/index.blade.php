@extends('layouts.main')

@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="fw-bold mb-0">{{ $title }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-datatable table-responsive">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <a href="/apply/create" class="btn btn-primary mb-2 me-2 w-50px"><i class="bx bx-plus"></i> Tambah Data Mobil</a>

                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end">
                                    <a href="/apply/create" class="btn btn-primary mb-2 me-2 align-items-end"><i class="bx bx-printer"></i> Print</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle me-2 align-items-end" type="button" data-bs-toggle="dropdown" aria-expanded="false">Download</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="bx bxs-file-pdf"></i> PDF</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="datatables-basic table border-top table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mobil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mobil as $mbl)
                                    <tr class="text-capitalize">
                                        <td>{{ $mbl->id++ }}</td>
                                        <td>{{ $mbl->nama_mobil }}</td>
                                        {{-- <td>{{ $mbl->tgl_apply->format('d/m/Y') }}</td> --}}
                                        <td>
                                            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteMobil{{ $mbl->id }}"><i class="bx bx-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Modal -->
                        @foreach ($mobil as $mbl)
                            <div class="modal fade" id="deleteMobil{{ $mbl->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Delete Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="text-capitalize">Yakin ingin menghapus data mobil {{ $mbl->nama_mobil }} ? </h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary">Yakin</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- End Modal  --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection