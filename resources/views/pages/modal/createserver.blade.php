<form action="{{route('pages.dataserver.insert')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalServer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label for="exampleInputEmail1" class="form-label">Ip_public</label>
                    <input type="text" name="ippublic" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ssh</label>
                    <input type="text" name="ssh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User</label>
                    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
          
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Pass</label>
                      <input type="text" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
          
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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