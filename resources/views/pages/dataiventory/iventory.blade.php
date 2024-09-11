@extends('master.index')
@section('title', 'Iventory')
@section('content')
<h5>Data Iventory</h5>
<div class="input-group rounded">
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ModalIventory"><i class="fa fa-plus-circle" aria-hidden="true"></i> Iventory</a>
<a href="{{route('exportiventory')}}" class="btn btn-info"><i class="fa fa-cloud-download" aria-hidden="true"></i> Export</a>

</div>
<div class="table-responsive">
<table class="table w-100" id="iventory" >
    <thead>
        <tr>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama_Barang</th>
                <th scope="col">Stock_in</th>
                <th scope="col">Stock_out</th>
                <th scope="col">Stock</th>
                <th scope="col">Aksi</th>
              </tr>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
      @endphp
      @foreach ($ivent as $item )  
        <tr>
            <th scope="row">{{$no++}}</th>
            <td scope="col">{{$item->namabarang}}</td>
            <td scope="col">{{$item->stockin}}</td>
            <td scope="col">{{$item->stockout}}</td>
            <td scope="col">{{$item->stock}}</td>
            <td>
              <a href="{{route('pages.dataiventory.edit',[$item->id])}}" type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>
              <a href="{{route('pages.dataiventory.delete',[$item->id])}}" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </a>
            
            </td>
          </tr>
        @endforeach
    </tbody>
</table>
</div>



@include('pages.modal.createinventory')

@endsection
