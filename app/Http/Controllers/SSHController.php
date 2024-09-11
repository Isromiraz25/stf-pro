<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SSHController extends Controller
{
    public function connect(Request $request)
    {
        $user = $request->input('user');
        $ip = $request->input('ip');
        $port = $request->input('port');

        // Menjalankan command artisan ssh:connect
        Artisan::call('ssh:connect', [
            'user' => $user,
            'ip' => $ip,
            'port' => $port,
        ]);

        return response()->json(['status' => 'SSH command executed']);
    }
}
