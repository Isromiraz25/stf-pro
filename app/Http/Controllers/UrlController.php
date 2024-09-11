<?php

namespace App\Http\Controllers;
use App\Models\Server;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index(Request $request){
        // Jika ada perangkat yang dipilih, ambil data hanya untuk perangkat tersebut
        $selectedDeviceId = $request->input('server_id');
        if ($selectedDeviceId) {
            $servers = Server::where('ket', $selectedDeviceId)->get();
        } else {
            // Jika tidak ada perangkat yang dipilih, ambil semua perangkat
            $servers = Server::select('ket', 'ippublic', 'ssh')->distinct()->get();
        }
        
        $data = [
            'servers' => $servers
        ];
        return view('pages.showdevice.url', $data);
    }
    
    
}
