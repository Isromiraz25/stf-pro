<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        {{-- <h3><i class="fa fa-user" aria-hidden="true"></i>{{auth()->user()->name}}</h3> --}}
        <ul class="nav side-menu">
            @if (auth()->user()->role == 'user')
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/dashboard">Log Indikator</a></li>
                        <li><a href="{{ route('pages.datadevice.device') }}">Data Device</a></li>

                    </ul>
                </li>
            @else
                <li>
                    <a href="/dashboard"><i class="fa fa-bug" aria-hidden="true"></i> Log Indikator</a>
                </li>



                {{-- <li><a><i class="fa fa-edit"></i> Show Screen STB <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu"> --}}
                {{-- <li><a href="{{route('pages.showdevice.url')}}">Status Server </a></li> --}}
                {{-- <li><a href="{{route('pages.showdevice.showall')}}">Show All Device </a></li>
            <li><a href="{{route('pages.showdevice.android')}}">Android </a></li> --}}
                {{-- <li><a href="{{route('pages.showdevice.ctrl1')}}">Ctrl1 </a></li>
            <li><a href="{{route('pages.showdevice.ctrl2')}}">Ctrl2 </a></li>
            <li><a href="{{route('pages.showdevice.ctrl3')}}">Ctrl3 </a></li> --}}
                {{-- <li><a href="{{route('pages.showdevice.showstb2')}}">STB2</a></li>
            <li><a href="form_advanced.html">Show device Ctrl2</a></li>
            <li><a href="form_advanced.html">Show device Android</a></li> --}}

                {{-- </ul>
        </li>
         --}}

                {{-- <li><a><i class="fa fa-desktop"></i>Data <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu"> --}}
                {{-- <li><a href="{{route('pages.datadevice.device')}}">Data Device</a></li> --}}
                {{-- <li><a href="{{route('pages.dataserver.server')}}">Data Server</a></li>
            <li><a href="{{route('pages.dataiventory.iventory')}}">Data Iventory</a></li> --}}
                {{-- <li><a href="{{route('fetch.data')}}">Data Devices</a></li>
            <li><a href="{{route('fetch.log')}}">Data Log Device</a></li> --}}
                {{-- <li><a href="{{route('server.ping')}}">ping</a></li> --}}
                {{-- </ul>
        </li> --}}
            @endif
            {{-- <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="tables.html">Tables</a></li>
            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
          </ul>
        </li> --}}
            {{-- <li><a><i class="fa fa-bar-chart-o"></i> Login Your Server <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="/">AndroidBOX</a></li>
           
            <li><a href="/">Controller2</a></li>
            
        </ul>
        </li> --}}

        </ul>

    </div>
    {{-- <div class="menu_section">
      <h3>Live On</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="e_commerce.html">E-commerce</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="project_detail.html">Project Detail</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="profile.html">Profile</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="page_403.html">403 Error</a></li>
            <li><a href="page_404.html">404 Error</a></li>
            <li><a href="page_500.html">500 Error</a></li>
            <li><a href="plain_page.html">Plain Page</a></li>
            <li><a href="login.html">Login Page</a></li>
            <li><a href="pricing_tables.html">Pricing Tables</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
              <li><a href="#level1_1">Level One</a>
              <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li class="sub_menu"><a href="level2.html">Level Two</a>
                  </li>
                  <li><a href="#level2_1">Level Two</a>
                  </li>
                  <li><a href="#level2_2">Level Two</a>
                  </li>
                </ul>
              </li>
              <li><a href="#level1_2">Level One</a>
              </li>
          </ul>
        </li>                  
        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
      </ul>
    </div> --}}

</div>
