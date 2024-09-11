<?php

namespace App\Http\Controllers;
use App\Exports\ServerExport;
use App\Imports\ServerImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Device;
use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function server(){
        $data = Server::all();
        return view('pages.dataserver.server', compact('data'));
    }


    public function serverexport(){

        return Excel::download(new ServerExport, 'server.xlsx');
    }

    public function serverimportexcel(Request $request){

        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('DataServer', $namafile);

        Excel::import(new ServerImport, public_path('/DataServer/'.$namafile));
        return redirect('server');
    }

    
    public function create (){
        return view('pages.dataserver.create');
    }

    public function insert (Request $request){

        $dataRequest = [
            'ippublic' => $request->ippublic,
            'ssh' => $request->ssh,
            'user' => $request->user,
            'pass' => $request->pass,
            'ket' => $request->ket,
        ];
       
        $dataSave = Server::create($dataRequest);
        if(is_object($dataSave)){
            return redirect()->route('pages.dataserver.server');
        }else{
            return redirect()->back();
        }
    }


    public function editserver($id)
    {
        $data = Server::findOrFail($id);
        return view('pages.dataserver.edit', compact('data'));
    }

    public function updateserver(Request $request, $id)
    {
        $device = Server::findOrFail($id);
        $device->update($request->all());
    
        return redirect()->route('pages.dataserver.server')
                         ->with('success','Device berhasil diperbarui.');
    }

    
    public function deleteserver($id){
        $dataSave = Server::find($id)->delete();
        if($dataSave == true){
            return redirect()->route('pages.dataserver.server');
        }else{
            return redirect()->back();
        }
      
}
}


