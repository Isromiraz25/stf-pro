{{-- @extends('master.index')
@section('title', 'ShowAllDevices')
@section('content')


<div class="row">
    <h5>ShowAllDevice</h5>
<form method="get" action="{{route('pages.showdevice.showall')}}"> 
<button class="btn-warning" type="submit">Refresh</button> 
</form>
</div>



<div class="row m-3">
    
    @foreach ($showalldevice as $item)
    
    <iframe src="http://{{$item->ipserver}}:{{$item->port}}/#!action=stream&udid={{$item->serial}}&player=tinyh264&ws=ws%3A%2F%2F{{$item->ipserver}}%3A{{$item->port}}%2F%3Faction%3Dproxy-adb%26remote%3Dtcp%253A8886%26udid%3D{{$item->serial}}" height="465" width="210" title="Iframe Example"></iframe>
    
    @endforeach
</div>


@endsection --}}
