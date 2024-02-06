@extends('admin.layouts.base')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <p class="d-header">
                Daftar Pelanggan
            </p>
            <div class="d-flex justify-content-end">
              <button class="btn btn-pink">
                <i class="fas fa-plus mr-2" style="color: #FF788B"></i>
                Pelanggan Baru
              </button>
            </div>
            <table class="table tabel-custom">
                <thead>
                    <tr>
                        <th scope="col" style="border-radius: 20px 0 0 20px;">NAMA</th>
                        <th scope="col">NO TELEPON</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col" style="border-radius: 0 20px 20px 0">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Bu Istiqomah</td>
                        <td>081111111111</td>
                        <td>Jl. Veteran, Malang</td>
                        <td>
                          <div class="d-flex justify-content-center">
                            <button class="btn btn-pink btn-t m-0 mr-2">edit</button>
                            <button class="btn btn-pink btn-t m-0">hapus</button>
                          </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.container-fluid -->
    </section>
@endsection
