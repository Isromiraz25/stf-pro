<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\IventoryExport;
use App\Models\Iventory;
use Illuminate\Http\Request;

class IventoryController extends Controller
{
    public function iventory(){
        $ivent = Iventory::all();
        return view('pages.dataiventory.iventory', compact('ivent'));
    }

  
    public function iventoryexport(){

        return Excel::download(new IventoryExport, 'iventory.xlsx');
    }

public function create (){
        return view('pages.dataiventory.create');
    }

public function insert (Request $request){

if(!$request->stockout){
    $stockout= 0;
}else{
    $stockout = $request->stockout;
}

$stock = $request->stockin - $stockout;
        $dataRequest = [
            'namabarang' => $request->namabarang,
            'stockin' => $request->stockin,
            'stockout' => $request->stockout,
            'stock' => $stock,
        ];
       
        $dataSave = Iventory::create($dataRequest);
        if(is_object($dataSave)){
            return redirect()->route('pages.dataiventory.iventory');
        }else{
            return redirect()->back();
        }
    }

public function editiventory($id)
    {
        $data = Iventory::findOrFail($id);
        return view('pages.dataiventory.edit', compact('data'));
    }



    public function updateiventroy(Request $request, $id)
{
    if (!$request->stockout) {
        $stockout = 0;
    } else {
        $stockout = $request->stockout;
    }
    
    $stock = $request->stockin - $stockout;
    
    $device = Iventory::findOrFail($id);
    $device->namabarang = $request->namabarang;
    $device->stockin = $request->stockin;
    $device->stockout = $request->stockout;
    $device->stock = $stock;
    $device->save();

    return redirect()->route('pages.dataiventory.iventory')->with('success', 'Device berhasil diperbarui.');
}



    public function delete($id){
            $dataSave = Iventory::find($id)->delete();
            if($dataSave == true){
                return redirect()->route('pages.dataiventory.iventory');
            }else{
                return redirect()->back();
            }
          
    } 

}
