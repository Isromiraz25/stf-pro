@extends('master.index')
@section('title', 'Servers Url')
@section('content')


<div class="row">
    <form method="get" action="{{ route('pages.showdevice.url') }}">
        <div class="container">
            <div class="form-group">
                <label for="device_select">Select Server STF:</label>
                <select class="form-control" id="server_select" name="device_id">
                    <option value="">All Servers</option>
                    @foreach($servers as $server)
                        <option value="{{ $server->ket }}">{{ $server->ippublic }}:{{ $server->ssh }}</option>
                    @endforeach
                </select>
                <button class="btn-danger" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>

@if($servers->count() > 0)
    @foreach ($servers as $server)
        <div class="row m-3">
            
            <p>{{$server->ket}}: {{$server->ippublic}}:{{$server->ssh}}</p>
            <p>Status: 
                @php
                    $url = "http://{$server->ippublic}:{$server->ssh}/";
                    $client = new \GuzzleHttp\Client();
                    try {
                        $response = $client->request('GET', $url);
                        $statusCode = $response->getStatusCode();
                        
                        if ($statusCode === 200) {
                            echo "Web is up and running!";
                        } else {
                            echo "Web is down!";
                        }
                    } catch (\Exception $e) {
                        echo "An error occurred: " . $e->getMessage();
                    }
                @endphp
            </p>
            {{-- <iframe src="http://{{$device->ipserver}}:{{$device->port}}/" height="800" width="950" title="Iframe Example"></iframe> --}}
        </div>
    @endforeach
@else
    <div class="row m-3">
        No devices found.
    </div>
@endif

        
  

@endsection

