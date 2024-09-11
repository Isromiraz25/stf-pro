@extends('master.index')
@section('title', 'Iventory')
@section('content')

<form method="POST" action="{{ route('open.ssh') }}">
    @csrf
    <div>
        <label for="user">User:</label>
        <input type="text" id="user" name="user" placeholder="User">
    </div>
    <div>
        <label for="ip">IP Address:</label>
        <input type="text" id="ip" name="ip" placeholder="IP Address">
    </div>
    <div>
        <label for="port">Port:</label>
        <input type="text" id="port" name="port" placeholder="Port">
    </div>
    <button type="submit">Connect via SSH</button>
</form>

@endsection