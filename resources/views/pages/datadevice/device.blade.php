@extends('master.index')
@section('title', 'Devices')
@section('content')
<h5>Data Devices</h5>

<div class="input-group rounded">
  @if(auth()->user()->role == 'admin')
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ModalCreate"><i class="fa fa-plus-circle" aria-hidden="true"></i> Devices</a>
<a href="{{route('exportdevice')}}" class="btn btn-info"><i class="fa fa-cloud-download" aria-hidden="true"></i> Export</a>
<a href="#" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-download" aria-hidden="true"></i> Import</a>
  @endif
{{-- <a href="/createdevice" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Devices</a> --}}
</div>
<div class="table-responsive">
<table class="table w-100" id="device" >
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Ip Server</th>
        <th scope="col">Port_STF</th>
        <th scope="col">Serial</th>
        <th scope="col">Location</th>
        <th scope="col">Detail_Location</th>
        <th scope="col">Bank</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
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
        <td scope="col">{{$item->ipserver}}</td>
        <td scope="col">{{$item->port}}</td>
        <td scope="col">{{$item->serial}}</td>
        <td scope="col">{{$item->location}}</td>
        <td scope="col">{{$item->detaillocation}}</td>

        
        <td scope="col">
        @if ($item->bank1 == 'BCA')
        <img src="{{asset('image\bca.png')}}" alt="" style="width: 40px;">
        @endif
        </td>

        <td scope="col">
          @if ($item->bank2 == 'BRI')
          <img src="{{asset('image\bri.png')}}" alt="" style="width: 40px;">
          @endif
        </td>
        <td scope="col">
          @if ($item->bank3 == 'BNI')
          <img src="{{asset('image\bni.jpg')}}" alt="" style="width: 40px;">
          @endif
        </td>
        <td scope="col">
          @if ($item->bank4 == 'MANDIRI')
          <img src="{{asset('image\mandiri.jpg')}}" alt="" style="width: 40px;">
          @endif
        </td>
        <td scope="col">
          @if ($item->bank5 == 'CIMB')
          <img src="{{asset('image\cimb.png')}}" alt="" style="width: 40px;">
          @endif
        </td>
        <td scope="col">
          @if ($item->bank6 == 'PANIN')
          <img src="{{asset('image\panin.jpg')}}" alt="" style="width: 40px;">
          @endif
        </td>
        <td scope="col">
          @if ($item->bank7 == 'BSI')
          <img src="{{asset('image\bsi.jpg')}}" alt="" style="width: 40px;">
          @endif
        </td>
        <td>
          
        
          @if(auth()->user()->role == 'admin')

          <a href="{{route('pages.datadevice.edit',[$item->id])}}" type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
          
          <a href="{{route('pages.datadevice.delete',[$item->id])}}" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </a>
          @endif
          <a href="http://{{$item->ipserver}}:{{$item->port}}/#!action=stream&udid={{$item->serial}}&player=tinyh264&ws=ws%3A%2F%2F{{$item->ipserver}}%3A{{$item->port}}%2F%3Faction%3Dproxy-adb%26remote%3Dtcp%253A8886%26udid%3D{{$item->serial}}&XZVC4sfAwsT8TLNWaDnSiB69MZ5MRXsS"
          type="button" target="_blank" class="btn btn-outline-primary"><i class="fa fa-tablet" aria-hidden="true"></i> </a>
          
          
        </td>
        
      </tr>

      @endforeach
    </tbody>
</table>
</div>

{{-- modal import excel --}}

<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Your Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route("importdevice")}}" method="post" enctype="multipart/form-data">
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


{{-- modal edit device--}}



@include('pages.modal.createdevice')


{{-- {{ $data->links() }} --}}
@endsection
