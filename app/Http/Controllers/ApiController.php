<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    
    public function getDataFromApi()
    {
        // URL API yang ingin diakses
        $url = 'http://34.101.194.89:5500/api/devices';

        // Mengirimkan request GET ke API dengan API key di header
        $response = Http::withHeaders([
            'api-key' => 'M4nagement!'
        ])->get($url);
        if ($response->successful()) {
            $data = $response->json();
            
        
            // Melakukan sesuatu dengan data
            return view('data', ['data' => $data]);
        } else {
            // Handle jika request gagal
            return response()->json(['error' => 'Failed to fetch data from API'], 500);
        }
    }


}
