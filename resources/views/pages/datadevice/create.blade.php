@extends('master.index')
@section('title', 'Create Devices')
@section('content')


<div class="container">
<div class="row">
  <div class="card">
    <div class="card-body">
      
      <form action="{{route('pages.datadevice.insert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">IpServer</label>
          <input type="text" name="ipserver" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Port</label>
          <input type="text" name="port" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Serial</label>
          <input type="text" name="serial" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Location</label>
          <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Detail_Location</label>
          <input type="text" name="detaillocation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Bank1</label>
          <input type="text" name="bank1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Bank2</label>
          <input type="text" name="bank2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Bank3</label>
          <input type="text" name="bank3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Bank4</label>
          <input type="text" name="bank4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
   
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection
