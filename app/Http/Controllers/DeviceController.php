<?php

// namespace App\Http\Controllers;

// use App\Exports\DeviceExport;
// use App\Imports\DeviceImport;
// use Maatwebsite\Excel\Facades\Excel;
// use App\Models\Device;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

// class DeviceController extends Controller
// {
//     public function index(){
//         // $data = Device::all();
        
//         $data = Device::all();
//         return view('pages.datadevice.device',compact('data'));
//     }

//     public function deviceexport(){

//         return Excel::download(new DeviceExport, 'device.xlsx');
//     }

//     public function deviceimportexcel(Request $request){

//         $file = $request->file('file');
//         $namafile = $file->getClientOriginalName();
//         $file->move('DataDevice', $namafile);

//         Excel::import(new DeviceImport, public_path('/DataDevice/'.$namafile));
//         return redirect('device');
//     }

//     public function create (){
        
//         return view('pages.datadevice.create');
//     }

//     public function insert (Request $request){

//         $dataRequest = [
//             'ipserver' => $request->ipserver,
//             'port' => $request->port,
//             'serial' => $request->serial,
//             'location' => $request->location,
//             'detaillocation' => $request->detaillocation,
//             'bank1' => $request->bank1,
//             'bank2' => $request->bank2,
//             'bank3' => $request->bank3,
//             'bank4' => $request->bank4,
//             'bank5' => $request->bank5,
//             'bank6' => $request->bank6,
//             'bank7' => $request->bank7,
//         ];
       
//         $dataSave = Device::create($dataRequest);
//         if(is_object($dataSave)){
//             return redirect()->route('pages.datadevice.device');
//         }else{
//             return redirect()->back();
//         }
//     }

    

//     public function editdevice($id)
//     {
//         $data = Device::findOrFail($id);
//         return view('pages.datadevice.edit', compact('data'));
//     }

//     public function updatedevice(Request $request, $id)
//     {
//         $device = Device::findOrFail($id);
//         $device->update($request->all());
    
//         return redirect()->route('pages.datadevice.device')
//                          ->with('success','Device berhasil diperbarui.');
//     }



//     public function deletedevice($id){
//             $dataSave = Device::find($id)->delete();
//             if($dataSave == true){
//                 return redirect()->route('pages.datadevice.device');
//             }else{
//                 return redirect()->back();
//             }
          
//     }
// }
