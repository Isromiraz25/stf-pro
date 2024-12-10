@extends('master.index')
@section('title', 'Log Devices')
@section('content')

    {{-- untuk menampilkan semua device  --}}

    {{-- <div class="container">
        <div class="row">
            @php
                $no = 1;
            @endphp
            @foreach ($devices as $index => $item)
                @php
                    // Menentukan status berdasarkan kondisi
                    $status = 'error'; // Default status
                    if (isset($item['serial']) && $item['serial'] !== '') {
                        $status = 'live'; // Hijau jika serial tersedia
                    } elseif (isset($item['serial']) && $item['serial'] === '') {
                        $status = 'dead'; // Merah jika serial kosong
                    }
                @endphp
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-3">
                    <div class="device-item">
                        <div class="serial">{{ $item['serial'] ?? 'N/A' }}</div>
                        <span class="status-indicator {{ $status }}"></span>
                        <!-- Tombol untuk membuka modal -->
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deviceModal{{ $index }}">
                            <i class="fa fa-info" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <!-- Modal untuk setiap item perangkat -->
                <div class="modal fade" id="deviceModal{{ $index }}" tabindex="-1"
                    aria-labelledby="deviceModalLabel{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deviceModalLabel{{ $index }}"> Device Detail</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Serial:</strong> {{ $item['serial'] ?? 'N/A' }}</p>
                                <p><strong>Status:</strong>
                                    <span class="status-indicator {{ $status }}"></span>
                                    {{ ucfirst($status) }}
                                </p>
                                <!-- Anda bisa menambahkan informasi tambahan di sini -->
                                <p><strong>Other Info:</strong> <!-- Misalnya informasi lain yang relevan --></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}

    <!-- Tambahkan style di bawah ini -->
    {{-- <style>
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .device-item {
            display: flex;
            align-items: center;
            gap: 5px;
            justify-content: start;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: px;
            background-color: #f9f9f9;
        }

        .serial {
            flex: 1;
            font-weight: bold;
        }

        .status-indicator {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
        }

        .status-indicator.live {
            background-color: green;
            /* Hijau untuk hidup */
        }

        .status-indicator.dead {
            background-color: red;
            /* Merah untuk mati */
        }

        .status-indicator.error {
            background-color: orange;
            /* Kuning untuk error */
        }
    </style> --}}




    {{-- untuk menampilkan yang mati dan error saja  --}}

    <div class="container">
        <div class="row">
            @php
                $no = 1;
            @endphp
            @foreach ($devices as $index => $item)
                @php
                    // Menentukan status berdasarkan kondisi
                    $status = 'error'; // Default status
                    if (isset($item['serial']) && $item['serial'] !== '') {
                        $status = 'live'; // Hijau jika serial tersedia
                    } elseif (isset($item['serial']) && $item['serial'] === '') {
                        $status = 'dead'; // Merah jika serial kosong
                    }

                    // Menyaring hanya perangkat dengan status error atau mati
                    if (!in_array($status, ['error', 'dead'])) {
                        continue; // Lewati perangkat dengan status lainnya
                    }
                @endphp
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-3">
                    <div class="device-item">
                        <div class="serial">{{ $item['serial'] ?? 'N/A' }}</div>
                        <span class="status-indicator {{ $status }}"></span>
                        <!-- Tombol untuk membuka modal -->
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deviceModal{{ $index }}">
                            Detail
                        </button>
                    </div>
                </div>

                <!-- Modal untuk setiap item perangkat -->
                <div class="modal fade" id="deviceModal{{ $index }}" tabindex="-1"
                    aria-labelledby="deviceModalLabel{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deviceModalLabel{{ $index }}">Device Detail</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Serial:</strong> {{ $item['serial'] ?? 'N/A' }}</p>
                                <p><strong>Status:</strong>
                                    <span class="status-indicator {{ $status }}"></span>
                                    {{ ucfirst($status) }}
                                </p>
                                <!-- Anda bisa menambahkan informasi tambahan di sini -->
                                <p><strong>Other Info:</strong> <!-- Misalnya informasi lain yang relevan --></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Tambahkan style di bawah ini -->
    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .device-item {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: start;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .serial {
            flex: 1;
            font-weight: bold;
        }

        .status-indicator {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
        }

        .status-indicator.live {
            background-color: green;
            /* Hijau untuk hidup */
        }

        .status-indicator.dead {
            background-color: red;
            /* Merah untuk mati */
        }

        .status-indicator.error {
            background-color: orange;
            /* Kuning untuk error */
        }
    </style>


@endsection
