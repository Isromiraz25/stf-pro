{{-- @extends('master.index')
@section('title', 'Devices Android')
@section('content')


<div class="row">
    <h5>Android</h5>
<form method="get" action="{{route('pages.showdevice.android')}}">
        <select name="android">
            @for ($i =1; $i <= 6 ; $i++)
            <option value="android{{$i}}">android{{$i}}</option>
            @endfor
        </select>
        <button class="btn-danger" type="submit">Submit</button>
</form>
</div>
@if(isset($dataAndroid[0]))
<marquee width="100%"><span style="font-weight: bold; color: black;">DEVICES ANDROID  SERVER {{$dataAndroid[0]->ipserver}}:{{$dataAndroid[0]->port}}</span></marquee>
@endif

<div class="row m-3" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); grid-gap: 10px;">
    @foreach ($dataAndroid as $item)
        <iframe src="http://{{$item->ipserver}}:{{$item->port}}/#!action=stream&udid=3{{$item->serial}}%3A5555&player=tinyh264&ws=ws%3A%2F%2F{{$item->ipserver}}%3A{{$item->port}}%2F%3Faction%3Dproxy-adb%26remote%3Dtcp%253A8886%26udid%3D{{$item->serial}}%253A5555" height="465" width="200" title="Iframe Example"></iframe>
    @endforeach
</div>

@endsection --}}
