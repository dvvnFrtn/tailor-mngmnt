@extends("admin.layouts.base")

@section("content")
<section class="content">
      <div class="container-fluid">
      
      <form class="customForm">
        <p class="text-header">
           Edit Pelanggan 
        </p>
        <div class="form-group">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bu Istiqomah">
        <label for="exampleFormControlInput1">Nama</label>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="081111111111">
        <label for="exampleFormControlInput1">Nomor Telepon</label>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="081111111111">
        <label for="exampleFormControlInput1">Alamat</label>
      </div>
      <button type="button" class="button-tambah">Update</button>
    </form>
    <div class="d-flex justify-content-end">
    <img class="tailor" src="{{asset("assets/icon/tailor.png")}}" alt="tailor">
    </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection