@extends('master.index')
@section('title', 'Devices Ctrl3')
@section('content')


<div class="row">
    <h5>Ctrl-1</h5>
<form method="get" action="{{route('pages.showdevice.ctrl3')}}">
        <select name="stb">
            @for ($i =104; $i <= 153 ; $i++)
            <option value="STB{{$i}}"> STB{{$i}}</option>
            
            @endfor
        </select>
<button class="btn-danger" type="submit">Submit</button> 

</form>
</div>

@if(isset($dataDevice[0]))
    <marquee width="100%">
        <span style="font-weight: bold; color: black;">
            DEVICES STB SERVER {{ $dataDevice[0]->server }}:{{ $dataDevice[0]->stf_port }}
        </span>
    </marquee>
@endif

<div class="row m-3" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); grid-gap: 10px;">
    @foreach ($dataDevice as $device)
        <iframe 
            src="http://{{ $device['server'] }}:{{ $device['stf_port'] }}/#!action=stream&udid={{ $device['serial'] }}&player=tinyh264&ws=ws%3A%2F%2F{{ $device['server'] }}%3A{{ $device['stf_port'] }}%2F%3Faction%3Dproxy-adb%26remote%3Dtcp%253A8886%26udid%3D{{ $device['serial'] }}" 
            height="465" 
            width="210" 
            title="Iframe Example">
        </iframe>
    @endforeach
</div>


@endsection

