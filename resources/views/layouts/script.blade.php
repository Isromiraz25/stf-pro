<!-- jQuery -->
<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('admin/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('admin/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('admin/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('admin/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('admin/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('admin/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('admin/build/js/custom.min.js')}}"></script>


<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>



{{-- openCMD --}}

<script>
   
    $(document).on('click', '#opencmd', function(event) {
        let ip = $(this).attr("data-ip");
        let user = $(this).attr("data-user");
        let port = $(this).attr("data-port");
        
        let param = {
            "ip": ip,
            "user": user,
            "port": port,
        }

        console.log(param);

        let url = '{{url("api/open-cmd")}}'

        $.ajax({
            type: "POST",
            dataType: "json",
            data: param,
            url: url,
            success: function(val) {
                console.log("isro ganteng");
            }
        });

    });
</script>


{{-- password hiden --}}

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var passwordFields = document.querySelectorAll('.password-hidden');
        passwordFields.forEach(function(field) {
            var passwordLength = field.innerText.length;
            field.innerText = '*'.repeat(passwordLength);
        });
    });
</script>


{{-- datatable --}}

<script>
     $(document).ready(function() {
                // Inisialisasi DataTable
                $('#iventory').DataTable({
                    paging: true // Mengaktifkan paging
                });
                
    });
</script>


<script>
$(document).ready(function() {
    $('#device').DataTable({
        paging: true // Mengaktifkan paging
    });
});
</script>

<script>
    $(document).ready(function() {
               // Inisialisasi DataTable
               $('#server').DataTable({
                paging: true // Mengaktifkan paging
               });
   });
</script>

<script>
    $(document).ready(function() {
        $('#apidevices').DataTable({
            paging: true 
        });
    });

</script>

{{-- <script src="https://jsuites.net/v4/jsuites.js"></script>
     
      <script>
      jSuites.calendar(document.getElementById('calendar-2'),{
          format: 'DD/MM/YYYY'
      });
</script> --}}


{{-- <script>
    $(document).ready(function() {
      $('#searchButton').click(function() {
        var searchSerial = $('#searchInput').val();
        window.location.href = '/devices?search=' + searchSerial;
      });
    });
</script> --}}
  

{{-- <script>
    $(document).ready(function() {
        $('#serversTable').DataTable();
    });
</script> --}}

{{-- <script>
    document.getElementById('opencmd').addEventListener('click', function(event) {
    event.preventDefault();
    
    var ip = this.getAttribute('data-ip');
    var user = this.getAttribute('data-user');
    var port = this.getAttribute('data-port');
    
    // Kirim data ke server menggunakan AJAX
    fetch('/open-cmd', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            ip: ip,
            user: user,
            port: port
        })
    }).then(response => response.json())
    .then(data => {
        if (data.status === 'CMD opened') {
            alert('Command Prompt opened successfully.');
        } else {
            alert('Failed to open Command Prompt.');
        }
    }).catch(error => console.error('Error:', error));
});

</script> --}}