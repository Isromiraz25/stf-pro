@extends('master.index')
@section('title', 'Edit Iventory')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="{{route('pages.dataiventory.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama_Barang</label>
          <input type="text" name="namabarang" value="{{$data->namabarang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Stock_in</label>
          <input type="text" name="stockin" value="{{$data->stockin}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Stock_out</label>
          <input type="text" name="stockout" value="{{$data->stockout}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Stock</label>
          <input type="text" name="stock" value="{{$data->stock}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-12">
          
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      </form>
      </div>
  </div>
</div>





@endsection
