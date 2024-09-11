<form action="{{route('pages.datadevice.insert')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Input Device</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">IpServer</label>
                    <input type="text" name="ipserver" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Port</label>
                    <input type="text" name="port" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Serial</label>
                    <input type="text" name="serial" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Detail_Location</label>
                    <input type="text" name="detaillocation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank1</label>
                    <input type="text" name="bank1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank2</label>
                    <input type="text" name="bank2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank3</label>
                    <input type="text" name="bank3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank4</label>
                    <input type="text" name="bank4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank5</label>
                    <input type="text" name="bank5" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank6</label>
                    <input type="text" name="bank6" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank7</label>
                    <input type="text" name="bank7" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  
                  
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Submit</button>
              {{-- <button type="back" class="btn btn-primary">back</button> --}}
            </div>
          </div>
        </div>
      </div>
</form>