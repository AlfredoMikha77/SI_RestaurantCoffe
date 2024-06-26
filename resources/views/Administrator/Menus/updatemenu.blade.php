@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Menu</h1>
   
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateMenu', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
          <label for="id_toko" class="form-label">Id Toko</label>
          <select id="id_toko" class="form-control" name="id_toko" required>
              <option value="">-- Select --</option>
              @foreach ($data_toko as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id ? 'selected' : '' }}>{{ $row->id }}
              @endforeach
          </select>
        </div>
          <div class="col-12">
            <label for="nama_menu" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ $data->nama_menu }}" required>
          </div>
          <div class="col-12">
            <label for="jenis_menu" class="form-label">Jenis Menu</label>
            <input type="text" class="form-control" id="jenis_menu" name="jenis_menu" value="{{ $data->jenis_menu }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection