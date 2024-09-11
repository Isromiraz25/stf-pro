{{-- @extends('master.index')
@section('title', 'Create Server')
@section('content')

<div class="container">
<div class="row">

  <div class="card">
    <div class="card-body">
      <form action="#" data-toggle="modal" data-target="#ModalServer" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ip_public</label>
          <input type="text" name="ippublic" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ssh</label>
          <input type="text" name="ssh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">User</label>
          <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pass</label>
            <input type="text" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Keterangan</label>
          <input type="text" name="ket" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
   
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection --}}
