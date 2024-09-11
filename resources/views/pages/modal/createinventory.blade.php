<form action="{{route('pages.dataiventory.insert')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left" id="ModalIventory" tabindex="-1" ria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"  id="exampleModalLabel">Input Device</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama_Barang</label>
                    <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock_in</label>
                    <input type="text" name="stockin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock_out</label>
                    <input type="text" name="stockout" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock</label>
                    <input type="text" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
            
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Submit</button>
              
            </div>
          </div>
        </div>
      </div>



    {{-- <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-diaglog modal-lg" role="document" >
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Add Data Devices</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
            </div>
        </div>
    </div> --}}
</form>