<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingServerController extends Controller
{
    public function checkServer($host, $port, $timeout = 5)
    {
        $startTime = microtime(true);
        $connection = @stream_socket_client("tcp://{$host}:{$port}", $errno, $errstr, $timeout);
        $endTime = microtime(true);
        $latency = round(($endTime - $startTime) * 1000); // dalam milisecond

        if ($connection) {
            fclose($connection);
            return [
                'status' => true,
                'latency' => $latency . ' ms',
                'error' => null,
            ];
        } else {
            return [
                'status' => false,
                'latency' => null,
                'error' => $errstr,
            ];
        }
    }

    public function showServerStatus()
    {
        // Daftar server yang ingin dicek
        $servers = [
            ['name' => 'Server 1', 'host' => '34.143.132.44', 'port' => 2260],
            ['name' => 'Server 2', 'host' => '34.143.132.44', 'port' => 2261],
            ['name' => 'Server 3', 'host' => '34.143.132.44', 'port' => 2275],
            ['name' => 'Server 3', 'host' => '34.143.132.44', 'port' => 2280],
            ['name' => 'Server 3', 'host' => '34.143.132.44', 'port' => 2241],
            ['name' => 'Server 3', 'host' => '34.143.132.44', 'port' => 2223],
            ['name' => 'Server 3', 'host' => '34.143.132.44', 'port' => 2224],
            // Tambahkan server lainnya di sini
        ];

        $serversStatus = [];

        foreach ($servers as $server) {
            $result = $this->checkServer($server['host'], $server['port']);
            $serversStatus[] = [
                'name' => $server['name'],
                'host' => $server['host'],
                'port' => $server['port'],
                'status' => $result['status'],
                'latency' => $result['latency'],
                'error' => $result['error'],
            ];
        }

        return view('server.ping', compact('serversStatus'));
    }
}
