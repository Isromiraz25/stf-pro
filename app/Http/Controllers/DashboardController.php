<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class DashboardController extends Controller
{

    public function index()
    {
        // Ambil data dari API
        $apiResponse = Http::withHeaders([
            'api-key' => 'M4nagement!'
        ])->get('http://34.101.194.89:5500/api/devices');
    
        $apiData= $apiResponse->successful() ? $apiResponse->json() : [];
        $groupedData = collect($apiData);
        $groupedBank = $groupedData->pluck('accounts') 
        ->flatten(1)
        ->groupBy('bank_name')
        ->map(function ($group) {
            return $group->count();
        });

       
        // dd($groupedBank);


        // return $apiData;
        // Hitung data dari database
        $totalDevice = count($apiData);
        $totalServer = DB::table('server')->count();
        
        $deviceandroid = $groupedData->filter(function ($item) {
            return array_key_exists('location', $item) && $item['location'] == 'android';
        });
        $deviceandroid = count($deviceandroid);

        // dd($devicestb);
        $devicestb = $groupedData->filter(function ($item) {
            return array_key_exists('location', $item) && str_contains($item['location'], 'STB');
        });
        $devicestb = count($devicestb);
        // $devicestb = DB::table('device')->where('location', 'LIKE', 'stb%')->count();
        
        // $bca = DB::table('device')->where('bank1', 'LIKE', 'bca%')->count();
        // $bri = DB::table('device')->where('bank2', 'LIKE', 'bri%')->count();
        // $bni = DB::table('device')->where('bank3', 'LIKE', 'bni%')->count();
        // $mandiri = DB::table('device')->where('bank4', 'LIKE', 'mandiri%')->count();
        // $cimb = DB::table('device')->where('bank5', 'LIKE', 'cimb%')->count();
        // $panin = DB::table('device')->where('bank6', 'LIKE', 'panin%')->count();
        // $bsi = DB::table('device')->where('bank7', 'LIKE', 'bsi%')->count();
        $bca =$groupedBank['BCA'] ;
        $bri =$groupedBank['BRI'] ;
        $mandiri =$groupedBank['MANDIRI'] ;
        $bni =$groupedBank['BNI'] ;
        $panin =$groupedBank['PANINBANK'] ;
        $bsi =$groupedBank['BSI'] ;
        $cimb =$groupedBank['CIMB'] ;
        // Daftar server yang ingin dicek
        $servers = [
            ['name' => 'CTRL1', 'host' => '34.143.132.44', 'port' => 2260],
            ['name' => 'CTRL2', 'host' => '34.87.25.89', 'port' => 2273],
            ['name' => 'CTRL3', 'host' => '35.240.155.63', 'port' => 2222],
            ['name' => 'ANDROID-01', 'host' => '34.142.166.201', 'port' => 2223],
            ['name' => 'ANDROID-02', 'host' => '34.142.166.201', 'port' => 2224],
            ['name' => 'ADDROID-03', 'host' => '34.142.166.201', 'port' => 2225],
            ['name' => 'ADDROID-04', 'host' => '34.142.166.201', 'port' => 2226],
            ['name' => 'ADDROID-05', 'host' => '34.142.166.201', 'port' => 2227],
            ['name' => 'ADDROID-06', 'host' => '34.142.166.201', 'port' => 2230],  
            ['name' => 'RESBARRY-01', 'host' => '34.126.150.45', 'port' => 2226], 
            ['name' => 'RESBARRY-02', 'host' => '34.126.150.45', 'port' => 2228], 
             
            
        ];   
        $serverctr1 = [
                ['name' => 'STB1', 'host' => '34.143.132.44', 'port' => 2223],
                ['name' => 'STB2', 'host' => '34.143.132.44', 'port' => 2224],
                ['name' => 'STB3', 'host' => '34.143.132.44', 'port' => 2225],
                ['name' => 'STB4', 'host' => '34.143.132.44', 'port' => 2226],
                ['name' => 'STB5', 'host' => '34.143.132.44', 'port' => 2275],
                ['name' => 'STB6', 'host' => '34.143.132.44', 'port' => 2227],
                ['name' => 'STB7', 'host' => '34.143.132.44', 'port' => 2228],
                ['name' => 'STB8', 'host' => '34.143.132.44', 'port' => 2229],
                ['name' => 'STB9', 'host' => '34.143.132.44', 'port' => 2230],
                ['name' => 'STB10', 'host' => '34.143.132.44', 'port' => 2231],
                ['name' => 'STB11', 'host' => '34.143.132.44', 'port' => 2232],
                ['name' => 'STB12', 'host' => '34.143.132.44', 'port' => 2233],
                ['name' => 'STB13', 'host' => '34.143.132.44', 'port' => 2234],
                ['name' => 'STB14', 'host' => '34.143.132.44', 'port' => 2235],
                ['name' => 'STB14', 'host' => '34.143.132.44', 'port' => 2235], 
                ['name' => 'STB15', 'host' => '34.143.132.44', 'port' => 2236], 
                ['name' => 'STB16', 'host' => '34.143.132.44', 'port' => 2237], 
                ['name' => 'STB17', 'host' => '34.143.132.44', 'port' => 2238], 
                ['name' => 'STB18', 'host' => '34.143.132.44', 'port' => 2239], 
                ['name' => 'STB19', 'host' => '34.143.132.44', 'port' => 2240], 
                ['name' => 'STB20', 'host' => '34.143.132.44', 'port' => 2241], 
                ['name' => 'STB21', 'host' => '34.143.132.44', 'port' => 2242],
                ['name' => 'STB22', 'host' => '34.143.132.44', 'port' => 2243],
                ['name' => 'STB23', 'host' => '34.143.132.44', 'port' => 2244],
                ['name' => 'STB24', 'host' => '34.143.132.44', 'port' => 2245],
                ['name' => 'STB25', 'host' => '34.143.132.44', 'port' => 2246],
                ['name' => 'STB26', 'host' => '34.143.132.44', 'port' => 2247],
                ['name' => 'STB27', 'host' => '34.143.132.44', 'port' => 2248],
                ['name' => 'STB28', 'host' => '34.143.132.44', 'port' => 2249],
                ['name' => 'STB29', 'host' => '34.143.132.44', 'port' => 2250],
                ['name' => 'STB30', 'host' => '34.143.132.44', 'port' => 2251],
                ['name' => 'STB31', 'host' => '34.143.132.44', 'port' => 2252],
                ['name' => 'STB32', 'host' => '34.143.132.44', 'port' => 2253],
                ['name' => 'STB33', 'host' => '34.143.132.44', 'port' => 2254],
                ['name' => 'STB34', 'host' => '34.143.132.44', 'port' => 2255],
                ['name' => 'STB35', 'host' => '34.143.132.44', 'port' => 2256],
                ['name' => 'STB36', 'host' => '34.143.132.44', 'port' => 2257],
                ['name' => 'STB37', 'host' => '34.143.132.44', 'port' => 2258],
                ['name' => 'STB38', 'host' => '34.143.132.44', 'port' => 2259],
                ['name' => 'STB39', 'host' => '34.143.132.44', 'port' => 2276],
                ['name' => 'STB40', 'host' => '34.143.132.44', 'port' => 2261],
                ['name' => 'STB41', 'host' => '34.143.132.44', 'port' => 2262],
                ['name' => 'STB42', 'host' => '34.143.132.44', 'port' => 2263],
                ['name' => 'STB43', 'host' => '34.143.132.44', 'port' => 2264],
                ['name' => 'STB44', 'host' => '34.143.132.44', 'port' => 2265],
                ['name' => 'STB45', 'host' => '34.143.132.44', 'port' => 2266],
                ['name' => 'STB46', 'host' => '34.143.132.44', 'port' => 2267],
                ['name' => 'STB47', 'host' => '34.143.132.44', 'port' => 2268],
                ['name' => 'STB48', 'host' => '34.143.132.44', 'port' => 2269],
                ['name' => 'STB49', 'host' => '34.143.132.44', 'port' => 2270],
                ['name' => 'STB50', 'host' => '34.143.132.44', 'port' => 2271],
                ['name' => 'STB51', 'host' => '34.143.132.44', 'port' => 2272],
                ['name' => 'STB52', 'host' => '34.143.132.44', 'port' => 2273],
                ['name' => 'STB53', 'host' => '34.143.132.44', 'port' => 2274],
        ];

        $serverctrl2 = [
              ['name' => 'STB54', 'host' => '34.87.25.89', 'port' => 2223],
              ['name' => 'STB55', 'host' => '34.87.25.89', 'port' => 2224],
              ['name' => 'STB56', 'host' => '34.87.25.89', 'port' => 2225],
              ['name' => 'STB57', 'host' => '34.87.25.89', 'port' => 2226],
              ['name' => 'STB58', 'host' => '34.87.25.89', 'port' => 2227],
              ['name' => 'STB59', 'host' => '34.87.25.89', 'port' => 2228],
              ['name' => 'STB60', 'host' => '34.87.25.89', 'port' => 2229],
              ['name' => 'STB61', 'host' => '34.87.25.89', 'port' => 2230],
              ['name' => 'STB62', 'host' => '34.87.25.89', 'port' => 2231],
              ['name' => 'STB63', 'host' => '34.87.25.89', 'port' => 2232],
              ['name' => 'STB64', 'host' => '34.87.25.89', 'port' => 2233],
              ['name' => 'STB65', 'host' => '34.87.25.89', 'port' => 2234],
              ['name' => 'STB66', 'host' => '34.87.25.89', 'port' => 2235],
              ['name' => 'STB67', 'host' => '34.87.25.89', 'port' => 2236],
              ['name' => 'STB68', 'host' => '34.87.25.89', 'port' => 2237],
              ['name' => 'STB69', 'host' => '34.87.25.89', 'port' => 2238],
              ['name' => 'STB70', 'host' => '34.87.25.89', 'port' => 2239],
              ['name' => 'STB71', 'host' => '34.87.25.89', 'port' => 2240],
              ['name' => 'STB72', 'host' => '34.87.25.89', 'port' => 2241],
              ['name' => 'STB73', 'host' => '34.87.25.89', 'port' => 2242],
              ['name' => 'STB74', 'host' => '34.87.25.89', 'port' => 2243],
              ['name' => 'STB75', 'host' => '34.87.25.89', 'port' => 2244],
              ['name' => 'STB76', 'host' => '34.87.25.89', 'port' => 2245],
              ['name' => 'STB77', 'host' => '34.87.25.89', 'port' => 2246],
              ['name' => 'STB78', 'host' => '34.87.25.89', 'port' => 2247],
              ['name' => 'STB79', 'host' => '34.87.25.89', 'port' => 2248],
              ['name' => 'STB80', 'host' => '34.87.25.89', 'port' => 2249],
              ['name' => 'STB81', 'host' => '34.87.25.89', 'port' => 2250],
              ['name' => 'STB82', 'host' => '34.87.25.89', 'port' => 2251],
              ['name' => 'STB83', 'host' => '34.87.25.89', 'port' => 2252],
              ['name' => 'STB84', 'host' => '34.87.25.89', 'port' => 2253],
              ['name' => 'STB85', 'host' => '34.87.25.89', 'port' => 2254],
              ['name' => 'STB86', 'host' => '34.87.25.89', 'port' => 2255],
              ['name' => 'STB87', 'host' => '34.87.25.89', 'port' => 2256],
              ['name' => 'STB88', 'host' => '34.87.25.89', 'port' => 2257],
              ['name' => 'STB89', 'host' => '34.87.25.89', 'port' => 2258],
              ['name' => 'STB90', 'host' => '34.87.25.89', 'port' => 2259],
              ['name' => 'STB91', 'host' => '34.87.25.89', 'port' => 2260],
              ['name' => 'STB92', 'host' => '34.87.25.89', 'port' => 2261],
              ['name' => 'STB93', 'host' => '34.87.25.89', 'port' => 2262],
              ['name' => 'STB94', 'host' => '34.87.25.89', 'port' => 2263],
              ['name' => 'STB95', 'host' => '34.87.25.89', 'port' => 2264],
              ['name' => 'STB96', 'host' => '34.87.25.89', 'port' => 2265],
              ['name' => 'STB97', 'host' => '34.87.25.89', 'port' => 2266],
              ['name' => 'STB98', 'host' => '34.87.25.89', 'port' => 2267],
              ['name' => 'STB99', 'host' => '34.87.25.89', 'port' => 2268],
              ['name' => 'STB100', 'host' => '34.87.25.89', 'port' => 2269],
              ['name' => 'STB101', 'host' => '34.87.25.89', 'port' => 2270],
              ['name' => 'STB102', 'host' => '34.87.25.89', 'port' => 2271],
              ['name' => 'STB103', 'host' => '34.87.25.89', 'port' => 2272],
            
        ];   

        $serverctrl3 = [
            ['name' => 'STB104', 'host' => '35.240.155.63', 'port' => 2223],
            ['name' => 'STB105', 'host' => '35.240.155.63', 'port' => 2224],
            ['name' => 'STB106', 'host' => '35.240.155.63', 'port' => 2225],
            ['name' => 'STB107', 'host' => '35.240.155.63', 'port' => 2226],
            ['name' => 'STB108', 'host' => '35.240.155.63', 'port' => 2227],
            ['name' => 'STB109', 'host' => '35.240.155.63', 'port' => 2228],
            ['name' => 'STB110', 'host' => '35.240.155.63', 'port' => 2229],
            ['name' => 'STB111', 'host' => '35.240.155.63', 'port' => 2230],
            ['name' => 'STB112', 'host' => '35.240.155.63', 'port' => 2231],
            ['name' => 'STB113', 'host' => '35.240.155.63', 'port' => 2232],
            ['name' => 'STB114', 'host' => '35.240.155.63', 'port' => 2233],
            ['name' => 'STB115', 'host' => '35.240.155.63', 'port' => 2234],
            ['name' => 'STB116', 'host' => '35.240.155.63', 'port' => 2235],
            ['name' => 'STB117', 'host' => '35.240.155.63', 'port' => 2236],
            ['name' => 'STB118', 'host' => '35.240.155.63', 'port' => 2237],
            ['name' => 'STB119', 'host' => '35.240.155.63', 'port' => 2238],
            ['name' => 'STB120', 'host' => '35.240.155.63', 'port' => 2239],
            ['name' => 'STB121', 'host' => '35.240.155.63', 'port' => 2240],
            ['name' => 'STB122', 'host' => '35.240.155.63', 'port' => 2241],
            ['name' => 'STB123', 'host' => '35.240.155.63', 'port' => 2242],
            ['name' => 'STB124', 'host' => '35.240.155.63', 'port' => 2243],
            ['name' => 'STB125', 'host' => '35.240.155.63', 'port' => 2244],
            ['name' => 'STB126', 'host' => '35.240.155.63', 'port' => 2245],
            ['name' => 'STB127', 'host' => '35.240.155.63', 'port' => 2246],
            ['name' => 'STB128', 'host' => '35.240.155.63', 'port' => 2247],
            ['name' => 'STB129', 'host' => '35.240.155.63', 'port' => 2248],
            ['name' => 'STB130', 'host' => '35.240.155.63', 'port' => 2249],
            ['name' => 'STB131', 'host' => '35.240.155.63', 'port' => 2250],
            ['name' => 'STB132', 'host' => '35.240.155.63', 'port' => 2251],
            ['name' => 'STB133', 'host' => '35.240.155.63', 'port' => 2252],
                 
        ];   
        // $allServers = array_merge($servers, $servestb);

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
        // Proses daftar kedua
    $serverCtrl1Status = [];
    foreach ($serverctr1 as $server) {
    $result = $this->checkServer($server['host'], $server['port']);
    $serverCtrl1Status[] = [
        'name' => $server['name'],
        'host' => $server['host'],
        'port' => $server['port'],
        'status' => $result['status'],
        'latency' => $result['latency'],
        'error' => $result['error'],
    ];
    }

    $serverCtrl2Status = [];
    foreach ($serverctrl2 as $server) {
    $result = $this->checkServer($server['host'], $server['port']);
    $serverCtrl2Status[] = [
        'name' => $server['name'],
        'host' => $server['host'],
        'port' => $server['port'],
        'status' => $result['status'],
        'latency' => $result['latency'],
        'error' => $result['error'],
    ];
}
    $serverCtrl3Status = [];
    foreach ($serverctrl3 as $server) {
    $result = $this->checkServer($server['host'], $server['port']);
    $serverCtrl3Status[] = [
        'name' => $server['name'],
        'host' => $server['host'],
        'port' => $server['port'],
        'status' => $result['status'],
        'latency' => $result['latency'],
        'error' => $result['error'],
    ];
}

        // $serversStatus = [];
    
        // foreach ($servers as $server) {
        //     $result = $this->checkServer($server['host'], $server['port']);
        //     $serversStatus[] = [
        //         'name' => $server['name'],
        //         'host' => $server['host'],
        //         'port' => $server['port'],
        //         'status' => $result['status'],
        //         'latency' => $result['latency'],
        //         'error' => $result['error'],
        //     ];
        // }
    
        // Kumpulkan semua data untuk ditampilkan di view
        return view('dashboard.dashboard', compact(
            'totalDevice', 'totalServer', 
            'deviceandroid', 'devicestb',
            'bca', 'bri', 'bni', 
            'mandiri', 'cimb', 'panin', 'bsi',
            'apiData', 'serversStatus','serverCtrl1Status','serverCtrl2Status','serverCtrl3Status'
        ));
    }

    private function checkServer($host, $port)
    {
    try {
        $start = microtime(true);
        $connection = @fsockopen($host, $port, $errno, $errstr, 2);
        $latency = $connection ? (microtime(true) - $start) * 1000 : null;
        if ($connection) {
            fclose($connection);
            return ['status' => true, 'latency' => round($latency, 2), 'error' => null];
        } else {
            // Mengubah pesan error menjadi "Server Disconnect"
            return ['status' => false, 'latency' => null, 'error' => 'Server Disconnect'];
        }
    } catch (\Exception $e) {
        return ['status' => false, 'latency' => null, 'error' => 'Server Disconnect'];
    }
    }

}
