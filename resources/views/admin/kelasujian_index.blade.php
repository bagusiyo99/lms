@extends('layouts.dasboard_admin')

@section('content')
<div class="col-12 justify-content-center">
  <div class="col-md-12">
    <div class="card shadow-lg p-3">
      <h3>Daftar kelas ujian</h3>
      <p># Disini Bapak/Ibu bisa membuat, merubah dan mengarsipkan kelas ujian, kelas ujian ini dibuat supaya satu paket
        soal
        bisa digunakan berkali-kali dalam kelas yang berbeda.</p>
      <p># Supaya server tidak berat dan tidak down, masukan Siswa ke kelas ujian oleh admin atau Guru, meskipun bisa
        juga Siswa
        bergabung sendiri ke kelas ujiannya, akan tetapi beresiko membuat sever penuh hingga down apabila proses
        memasukan kode
        kelas ujiannya dilakukan oleh Siswa secara bersamaan.</p>
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
              <th scope="col">Nama Kelas</th>
              <th scope="col">Paket Soal</th>
              <th scope="col">Status</th>
              <th scope="col">Kode</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td class="d-flex justify-content-between align-items-center">
                <p class="text-primary">asda</p>
                <a href="#" class="btn btn-primary d-inline" title="generate">
                  <i class='bx bx-sync'></i>
                </a>
              </td>
              <td>
                <a href="#" class="btn btn-secondary" title="kunci kelas ujian"><i class='bx bx-lock'></i></a>
                <a href="#" class="btn btn-warning" title="ubah kelas"><i class='bx bx-edit-alt'></i></a>
                <a href="#" class="btn btn-success" title="arsipkan kelas"><i class='bx bxs-archive-in'></i></a>
                <a href="#" class="btn btn-primary" title="lihat detail"><i class='bx bx-right-arrow-alt'></i></a>
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
              <input type="text" class="form-control" name="kelompok" id="kelompok" aria-describedby="helpId"
                placeholder="input nama kelompok">

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