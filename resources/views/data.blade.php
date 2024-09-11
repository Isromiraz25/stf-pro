@extends('master.index')
@section('title', 'Devices')
@section('content')

<body>
    <h5>Device</h5>

    @if(!empty($data) && is_array($data))
    <div class="table-responsive">
        <table class="table w-100" id="apidevices">
            <thead>
                <tr>
                    <th>Server</th>
                    <th>Device Serial</th>
                    <th>Stf_port</th>
                    <th>Ctrl_port</th>
                    <th>Adb_port</th>
                    <th>Location</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $device)
                    @php $accountCount = count($device['accounts']); @endphp
                  
                    <tr>
                                <td>{{ $device['server'] }}</td>
                                <td>{{ $device['serial'] }}</td>
                                <td>{{ $device['stf_port'] }}</td>
                                <td>{{ $device['ctrl_port'] }}</td>
                                <td>{{ $device['adb_port'] }}</td>
                                <td>{{ $device['location'] ?? 'N/A' }}</td>
                                <td>
                                    <a href="http://{{ $device['server'] }}:{{ $device['stf_port'] }}/#!action=stream&udid={{ $device['serial'] }}&player=tinyh264&ws=ws%3A%2F%2F{{ $device['server'] }}%3A{{ $device['stf_port'] }}%2F%3Faction%3Dproxy-adb%26remote%3Dtcp%253A8886%26udid%3D{{ $device['serial'] }}&XZVC4sfAwsT8TLNWaDnSiB69MZ5MRXsS"
                                    type="button" target="_blank" class="btn btn-outline-primary">
                                    <i class="fa fa-tablet" aria-hidden="true"></i>
                                    </a>
                                </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    
    @else
        <p>No data available.</p>
    @endif
</div>

<!-- Initialize DataTable -->


</body>
@endsection
