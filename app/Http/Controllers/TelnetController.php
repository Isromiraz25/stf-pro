<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelnetController extends Controller
{
    public function openCmd(Request $request)
{
    $ip = $request->input('ip');
    $user = $request->input('user');
    $port = $request->input('port');
    
    // Command to open CMD and initiate SSH connection
    $command = 'start cmd.exe /k "ssh ' . escapeshellarg($user) . '@' . escapeshellarg($ip) . ' -p ' . escapeshellarg($port) . '"';
    
    // Execute the command
    shell_exec($command);
    
    return response()->json(['status' => 'CMD opened']);
}


}
