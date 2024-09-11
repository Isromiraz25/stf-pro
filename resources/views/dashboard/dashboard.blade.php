@extends('master.index')
@section('title', 'Dashboard')
@section('content')

<!-- Device Statistics Section -->
<div class="container">
    <div class="tile_count">
        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-tablet" aria-hidden="true"></i> Total Device </span>
            <div class="count red">{{ $totalDevice }}</div>
            <span class="count_bottom"><i class="green">All devices</i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-tablet" aria-hidden="true"></i> Total Device Android</span>
            <div class="count red">{{ $deviceandroid }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Android box </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-desktop" aria-hidden="true"></i> Total Server</span>
            <div class="count red">{{ $totalServer }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Server Plugin end Android box </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-tablet" aria-hidden="true"></i> Total Plugin</span>
            <div class="count red">{{ $devicestb }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> Plugin </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-university" aria-hidden="true"></i> Total BCA</span>
            <div class="count red">{{ $bca }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> Account BCA </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-university" aria-hidden="true"></i> Total BRI</span>
            <div class="count red">{{ $bri }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> Account BRI </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-university" aria-hidden="true"></i> Total BNI</span>
            <div class="count red">{{ $bni }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> Account BNI </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-university" aria-hidden="true"></i> Total Mandiri</span>
            <div class="count red">{{ $mandiri }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> Account Mandiri </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-university" aria-hidden="true"></i> Total CIMB</span>
            <div class="count red">{{ $cimb }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> Account CIMB </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-university" aria-hidden="true"></i> Total PANIN</span>
            <div class="count red">{{ $panin }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> Account PANIN </i></span>
        </div>

        <div class="col-md-2 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fa fa-university" aria-hidden="true"></i> Total BSI</span>
            <div class="count red">{{ $bsi }}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i> Account BSI </i></span>
        </div>
       <div class="col-md-2 col-sm-4 tile_stats_count">
          <span class="count_top"><i class="fa fa-database" aria-hidden="true"></i></span>
          <div class="count red"> DATA BANK</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i>---------------------------------------------------</i></span>
      </div>
    </div>
</div>

<!-- Server Status Section -->

<div class="card">
  <div class="card-header">
    <h5>Server Status</h5>
  </div>
  <div class="card-body">
    
      <tbody>
        
        <span class="border-start">
        @foreach($serversStatus as $index => $server)
          <tr>
            <td>
              {{ $server['name'] }}
              @if($server['status'])
                    <span class="status-indicator online"></span>
                    @else
                    <span class="status-indicator offline"></span>
                @endif
            </td>
            {{-- <td>
             
              @if($server['status'])
                    <span class="status-indicator online"></span>
                    @else
                    <span class="status-indicator offline"></span>
                @endif
            </td> --}}
            <td>
              @if($server['error'])
                {{ $server['error'] }}
              @else
                
              @endif
            </td>
          </tr>
        @endforeach
      </span>
      </tbody>
    
  
  </div>
</div>


<div class="card card-custom">
  <div class="card-header">
    <h5>Controller 1</h5>
  </div>
  <div class="card-body">
    
      <tbody>
        
        <span class="border-start">
        @foreach($serverCtrl1Status as $index => $serverctr1)
          <tr>
            <td>
              {{ $serverctr1['name'] }}
              @if($serverctr1['status'])
                    <span class="status-indicator online"></span>
                    @else
                    <span class="status-indicator offline"></span>
                @endif
            </td>
            {{-- <td>
             
              @if($server['status'])
                    <span class="status-indicator online"></span>
                    @else
                    <span class="status-indicator offline"></span>
                @endif
            </td> --}}
            <td>
              @if($serverctr1['error'])
                {{ $serverctr1['error'] }}
              @else
                
              @endif
            </td>
          </tr>
        @endforeach
      </span>
      </tbody>
    
  
  </div>
</div>


<div class="card card-custom">
  <div class="card-header">
    <h5>Controller 2</h5>
  </div>
  <div class="card-body">
    
      <tbody>
        
        <span class="border-start">
        @foreach($serverCtrl2Status as $index => $serverctrl2)
          <tr>
            <td>
              {{ $serverctrl2['name'] }}
              @if($serverctrl2['status'])
                    <span class="status-indicator online"></span>
                    @else
                    <span class="status-indicator offline"></span>
                @endif
            </td>
            {{-- <td>
             
              @if($server['status'])
                    <span class="status-indicator online"></span>
                    @else
                    <span class="status-indicator offline"></span>
                @endif
            </td> --}}
            <td>
              @if($serverctrl2['error'])
                {{ $serverctrl2['error'] }}
              @else
                
              @endif
            </td>
          </tr>
        @endforeach
      </span>
      </tbody>
    
  
  </div>
</div>

<div class="card card-custom">
  <div class="card-header">
    <h5>Controller 3</h5>
  </div>
  <div class="card-body">
    
      <tbody>
        
        <span class="border-start">
        @foreach($serverCtrl3Status as $index => $serverctrl3)
          <tr>
            <td>
              {{ $serverctrl3['name'] }}
              @if($serverctrl3['status'])
                    <span class="status-indicator online"></span>
                    @else
                    <span class="status-indicator offline"></span>
                @endif
            </td>
            {{-- <td>
             
              @if($serverctrl3['status'])
                    <span class="status-indicator online"></span>
                    @else
                    <span class="status-indicator offline"></span>
                @endif
            </td> --}}
            <td>
              @if($serverctrl3['error'])
                {{ $serverctrl3['error'] }}
              @else
                
              @endif
            </td>
          </tr>
        @endforeach
      </span>
      </tbody>
    
  
  </div>
</div>

@endsection
