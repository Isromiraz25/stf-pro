{{-- @extends('master.index')
@section('title', 'Create Iventory')
@section('content')

<div class="container">
<div class="row">

  <div class="card">
    <div class="card-body">
      <form action="{{route('pages.dataiventory.insert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama_Barang</label>
          <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Stock_in</label>
          <input type="text" name="stockin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Stock_out</label>
          <input type="text" name="stockout" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Stock</label>
          <input type="text" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
   
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection --}}
