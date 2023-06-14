@extends('layouts.dasboard_admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg p-3">
                <h3>Daftar soal paket ujian</h3>
                <p>Disini Anda bisa membuat, merubah dan mengarsipkan paket soal ujian, lengkap dengan daftar pertanyaan
                    berserta
                    pilihan
                    jawaban.
                    Untuk soal text bisa langsung diimport menggunakan template excel, lalu untuk gambar dan audionya bisa
                    diinput
                    secara
                    manual.</p>
            </div>
            {{-- card table --}}
            <div class="card shadow-lg mt-5">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary d-inline w-px-200 ms-4 mt-4" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class='bx bx-plus'></i>Tambah Data
                </button>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Guru</th>
                                <th scope="col">Judul</th>
                                <th scope="col">PG</th>
                                <th scope="col">Essay</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Daftar Pertanyaan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>pertanyaan</td>
                                <td>pertanyaan</td>
                                <td>pertanyaan</td>
                                <td>pertanyaan</td>
                                <td>pertanyaan</td>
                                <td>
                                    <a href="#" class="btn btn-primary">
                                        Selengkapnya
                                    </a>
                                </td>
                                <td>

                                    <a href="#" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-success">Arsipkan</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- modal tambah kelompok --}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data kelompok</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="kelompok" class="form-label">Nama Kelompok</label>
                                <input type="text" class="form-control" name="kelompok" id="kelompok"
                                    aria-describedby="helpId" placeholder="input nama kelompok">

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><i class='bx bx-save'></i>Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
