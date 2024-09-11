@extends('master.index')
@section('title', 'Edit Server')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">
  
      <form action="{{route('pages.dataserver.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ip_public</label>
          <input type="text" name="ippublic" class="form-control" value="{{$data->ippublic}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ssh</label>
          <input type="text" name="ssh" class="form-control" value="{{$data->ssh}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">User</label>
          <input type="text" name="user" class="form-control" value="{{$data->user}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pass</label>
            <input type="text" name="pass" class="form-control" value="{{$data->pass}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Keterangan</label>
          <input type="text" name="ket" class="form-control" value="{{$data->ket}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
  </div>
</div>


@endsection
