@extends('master.index')
@section('title', 'Edit Devices')
@section('content')



  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="{{route('pages.datadevice.update', $data->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">IpServer</label>
            <input type="text" name="ipserver" class="form-control" value="{{$data->ipserver}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
  
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Port</label>
            <input type="text" name="port" class="form-control"value="{{$data->port}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
  
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Serial</label>
            <input type="text" name="serial" class="form-control" value="{{$data->serial}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
  
      </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" value="{{$data->location}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
  
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Detail_Location</label>
            <input type="text" name="detaillocation" class="form-control" value="{{$data->detaillocation}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">BCA</label>
            <input type="text" name="bank1" class="form-control" value="{{$data->bank1}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">BRI</label>
            <input type="text" name="bank2" class="form-control" value="{{$data->bank2}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">BNI</label>
            <input type="text" name="bank3" class="form-control" value="{{$data->bank3}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">MSNDIRI</label>
            <input type="text" name="bank4" class="form-control" value="{{$data->bank4}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CIMB</label>
            <input type="text" name="bank5" class="form-control" value="{{$data->bank3}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PANIN</label>
            <input type="text" name="bank6" class="form-control" value="{{$data->bank4}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">BSI</label>
            <input type="text" name="bank7" class="form-control" value="{{$data->bank3}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    
    </div>
  </div>
  






@endsection

