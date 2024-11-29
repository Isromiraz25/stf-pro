<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ErrorLogController extends Controller
{
    public function getErrorLogs()
    {
        $url = 'http://34.101.194.89:5500/api/devices';
        $apiKey = 'M4nagement!';

        try {
            $response = Http::withHeaders([
                'api-key' => $apiKey,
            ])->get($url);

            if ($response->successful()) {
                // Mengembalikan data ke view atau sebagai JSON
                return response()->json($response->json());
            } else {
                return response()->json([
                    'message' => 'Failed to fetch error logs',
                    'status' => $response->status(),
                ], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while fetching error logs',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
