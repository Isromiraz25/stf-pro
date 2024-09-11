<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Ctrl2Controller extends Controller
{
    public function index(Request $request)
    {
        // Make the API request
        $response = Http::withHeaders([
            'api-key' => 'M4nagement!'
        ])->get('http://34.101.194.89:5500/api/devices');
    
        // Check if the request was successful
        if ($response->successful()) {
            $dataFromApi = $response->json(); // Get the data from the API response
            
            // Debug the API response
            // You can log this or dump it to check the structure
            // \Log::info('API Response:', $dataFromApi);
            // or
            // dd($dataFromApi);
        } else {
            // Handle error case
            $dataFromApi = [];
        }
    
        // Assuming the dataFromApi is a collection or an array of devices
        $filteredData = array_filter($dataFromApi, function ($device) use ($request) {
            return isset($device['location']) && $device['location'] == $request->stb;
        });
    
        $data = [
            'dataDevice' => $filteredData
        ];
    
        return view('pages.showdevice.ctrl2', $data);
    }


}
