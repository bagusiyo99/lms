@extends('layouts.dasboard_admin')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card shadow-lg p-3">
      <h3>Daftar kelompok</h3>
      <p>Disini Anda bisa membuat, merubah dan mengarsipkan kelompok. Kelompok ini bisa berupa kelas, jurusan, dan lain
        sebagainya.</p>
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
              <th scope="col">ID Jurusan</th>
              <th scope="col">Nama Kelompok</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>
                <a href="#" class="btn btn-success">Siswa</a>
                <a href="#" class="btn btn-warning">Ubah</a>
                <a href="#" class="btn btn-danger">Hapus</a>
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