@extends('master.index')
@section('title', 'Server')
@section('content')
<h5>Data Server</h5>
<div class="input-group rounded">
<meta name="csrf-token" content="{{ csrf_token() }}">
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ModalServer" ><i class="fa fa-plus-circle" aria-hidden="true"></i> Server</a>
<a href="{{route('exportserver')}}" class="btn btn-info"><i class="fa fa-cloud-download" aria-hidden="true"></i> Export</a>
<a href="#" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop1"><i class="fa fa-download" aria-hidden="true"></i> Import</a>
</div>
<div class="table-responsive">
<table class="table" id="server">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Ip_public</th>
        <th scope="col">Ssh</th>
        <th scope="col">User</th>
        <th scope="col">Password</th>
        <th scope="col">Ket</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
        $no = 1;
      @endphp
      @foreach ($data as $item )  
       
      <tr>
        <th scope="row">{{$no++}}</th>
        <td scope="col">{{$item->ippublic}}</td>
        <td scope="col">{{$item->ssh}}</td>
        <td scope="col">{{$item->user}}</td>
        <td scope="col" class="password-hidden">{{$item->pass}}</td>
        <td scope="col">{{$item->ket}}</td>
        <td>
          <a href="{{route('pages.dataserver.edit',[$item->id])}}" type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          <a href="{{route('pages.dataserver.delete',[$item->id])}}" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
          <a href="#" id="opencmd" type="button" class="btn btn-success" data-ip="{{$item->ippublic}}" data-user="{{$item->user}}" data-port="{{$item->ssh}}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Open</a>
        </td>
      </tr>

      @endforeach
    </tbody>
</table>

{{-- modal import excel --}}

<div class="modal fade" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Your Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route("importserver")}}" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
          {{csrf_field()}}
          <div class="form-group">
            <input type="file" name="file" required="required">
          </div>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">import</button>
      </div>
    </div>
  </form>
  </div>
</div>

</div>
@include('pages.modal.createserver')
@endsection