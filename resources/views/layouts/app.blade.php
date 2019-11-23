<!DOCTYPE html>
<html lang="en">
<?php 
  use Carbon\Carbon;
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>iSIHP | Sistem Indeks Harga Pengguna</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('node_modules/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('node_modules/flag-icon-css/css/flag-icon.min.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('node_modules/chartist/dist/chartist.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('node_modules/jvectormap/jquery-jvectormap.css') }}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('datepicker/css/bootstrap-datepicker3.standalone.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body class="sidebar-fixed">

  <div class="container-scroller"  >
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #FFFFFF" >
      
      <div class="text-center navbar-brand-wrapper">
        
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
            <p class="page-name d-none d-lg-block">  
              <h1 style="color: #000000;font-size: 23px;font-family:Lucida Fax;text-align:left;margin-top: 5px;margin-bottom: 5px">iSIHP | Sistem Indeks Harga Pengguna</h1>
            </p>

            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                @guest
                  <li class="nav-item">
                      
                  </li>
                 
                @endguest
              </li>

              <li class="nav-item dropdown notification-dropdown show ">
               
                </a>

                <div class="dropdown-menu navbar-dropdown preview-list notification-drop-down dropdownAnimation " aria-labelledby="notificationDropdown" style="background-color: #A8AAB1;color: #000000">
             
                  <div class="preview-item-content">
                    
                 
                     
                  </div>

                  <div class="preview-item-content">
                    <a class="dropdown-item nav-link " href="/profile/myProfile">
                      <i class="fas fa-user-circle"></i> Profile
                    </a> 
                  </div>
                </div>
              </li>
            </ul>
      </div>
    </nav>
  
    <!-- partial -->
    <!-- <div class="container-fluid page-body-wrapper " > -->
      <div class="row row-offcanvas row-offcanvas-right" >
        <!-- partial:partials/_sidebar.html -->
       <nav class="sidebar sidebar-offcanvas" id="sidebar" >
          <ul class="nav">
            <li class="nav-item nav-category">
              <a class="nav-link bg-dark"><span class="nav-link"> </span></a>
            </li>




  {{-- Report --}}

             <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="report">
                  <span class="menu-title">REPORT</span>
                  <i class="far fa-file-alt"></i>
                </a>
                <div class="collapse" id="report">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/report/px01" class="nav-link bg-dark">PX01</a></li>
                    <li class="nav-item"><a href="/report/px15" class="nav-link bg-dark">PX15</a></li>
                    <li class="nav-item"><a href="/report/px05" class="nav-link bg-dark">PX05</a></li>
                    <li class="nav-item"><a href="/report/px25" class="nav-link bg-dark">PX25</a></li>
                  </ul>
                </div>
              </li>

{{-- Download --}}

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#download" aria-expanded="false" aria-controls="download">
                  <span class="menu-title">DOWNLOAD</span>
                  <i class="fas fa-download"></i>
                </a>
                <div class="collapse" id="download">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/download" class="nav-link bg-dark">Download Document</a></li>
                  </ul>
                </div>
              </li>

  
{{-- Mobile Export --}}
                <!-- <li class="nav-item" >
                <li class="nav-item"><a href="/mobileJsonExport" class="nav-link">MOBILE EXPORT
                <i class="fas fa-mobile-alt"></i></a>
                </li> -->

                <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#mobileExport" aria-expanded="false" aria-controls="mobileExport">
                  <span class="menu-title">MOBILE EXPORT</span>
                  <i class="fas fa-mobile-alt"></i>
                </a>
                <div class="collapse" id="mobileExport">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/mobileExport" class="nav-link bg-dark">List FE</a></li>
                  </ul>
                </div>
              </li>

  {{-- Setting --}}
              {{-- <li class="nav-item nav-category">
                <span class="nav-link">SETTING</span>
              </li> --}}
        <!-- Separator with title --><br><br> 
              <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed bg-dark" >
                <small><b>SETTING</b></small>
              </li>
              
  {{-- User Management --}} 
              <li class="nav-item ">
                <a class="nav-link bg-dark  " data-toggle="collapse" href="#userM" aria-expanded="false" aria-controls="userM">
                  <span class="menu-title ">User Managament</span>
                  <i class="fas fa-user"></i>
                </a>
                <div class="collapse " id="userM">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/permissions/index" class="nav-link">Permission</a></li>
                    <li class="nav-item "><a href="/roles/index" class="nav-link bg-dark">Role</a></li>
                    <li class="nav-item "><a href="/profile/index" class="nav-link bg-dark">User</a></li>
                  </ul>
                </div>
              </li>
              
  {{-- Item Management --}}
              <li class="nav-item">
                <a class="nav-link bg-dark" data-toggle="collapse" href="#itemM" aria-expanded="false" aria-controls="itemM">
                  <span class="menu-title">Item Management</span>
                  <i class="fas fa-shopping-cart"></i>
                </a>
                <div class="collapse" id="itemM">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/classification" class="nav-link bg-dark">Classification</a></li>
                    <li class="nav-item"><a href="/maingroups/index" class="nav-link bg-dark">2D Main Group</a></li>
                    <li class="nav-item"><a href="/submaingroups/index" class="nav-link bg-dark">3D Sub Main Group</a></li>
                    <li class="nav-item"><a href="/expenditures/index" class="nav-link bg-dark">4D Expenditure Class</a></li>
                    <li class="nav-item"><a href="/items/index" class="nav-link bg-dark">6D Item</a></li>
                    <li class="nav-item"><a href="/itemspecifications/index" class="nav-link bg-dark">7D Item Specification</a></li>
                    <li class="nav-item"><a href="/maingroups/" class="nav-link bg-dark">Item Codes Hierarchy</a></li>
                    <li class="nav-item"><a href="/pungutans/index" class="nav-link bg-dark">Collection</a></li>
                  </ul>
                </div>
              </li> 
                
  {{-- Outlet Management --}}
              <li class="nav-item">
                <a class="nav-link bg-dark" data-toggle="collapse" href="#outletM" aria-expanded="false" aria-controls="outletM">
                  <span class="menu-title">Outlet Management</span>
                  <i class="fas fa-store"></i>
                </a>
                <div class="collapse" id="outletM">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/outlet/index" class="nav-link bg-dark">Outlet</a></li>
                    <!-- <li class="nav-item"><a href="/outlet/choose" class="nav-link bg-dark">Select Outlet</a></li> -->
                  </ul>
                </div>
              </li>

  {{-- Batch Management --}}
              <li class="nav-item">
                <a class="nav-link bg-dark" data-toggle="collapse" href="#batchM" aria-expanded="false" aria-controls="batchM">
                  <span class="menu-title">Batch Management</span>
                  <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="batchM">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/batchs/index" class="nav-link bg-dark">Batch</a></li>

                    <!-- <li class="nav-item"><a href="/batchsoutlet/" class="nav-link bg-dark">Batch - Outlet Manangement</a></li>
                    <li class="nav-item"><a href="/batchsfe/" class="nav-link bg-dark">Batch - FE Management</a></li> -->

                    <li class="nav-item"><a href="/batchsfe/" class="nav-link bg-dark">Batching Management</a></li> 
                  </ul>
                </div>
              </li>
              
 {{-- Center Management --}}
              <li class="nav-item">
                <a class="nav-link bg-dark" data-toggle="collapse" href="#centerM" aria-expanded="false" aria-controls="centerM">
                  <span class="menu-title">Center Management</span>
                  <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="centerM">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/pos" class="nav-link bg-dark">Operational Center</a></li>
                    <li class="nav-item"><a href="/center/index" class="nav-link bg-dark">Center</a></li>
                  </ul>
                </div>
              </li>
              
  {{-- Other Management --}}
              <li class="nav-item">
                <a class="nav-link bg-dark" data-toggle="collapse" href="#otherM" aria-expanded="false" aria-controls="otherM">
                  <span class="menu-title">Other Management</span>
                  <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="otherM">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/regions/index" class="nav-link bg-dark">Region</a></li>
                    <li class="nav-item"><a href="/strata" class="nav-link bg-dark">Strata</a></li>
                    <li class="nav-item"><a href="/state" class="nav-link bg-dark">State</a></li>
                    <li class="nav-item"><a href="/district" class="nav-link bg-dark">District</a></li>
                    <li class="nav-item"><a href="/enumerationblock/index" class="nav-link bg-dark">Enumeration Block</a></li>
                    <li class="nav-item"><a href="/enumerationdistrict/index" class="nav-link bg-dark">Census District</a></li>
                    <li class="nav-item"><a href="/formactivities" class="nav-link bg-dark">Form Activities</a></li>
                    <li class="nav-item"><a href="/businessActivities" class="nav-link bg-dark">Business Activities</a></li>
                    <li class="nav-item"><a href="/unit" class="nav-link bg-dark">Unit</a></li>
                    <li class="nav-item"><a href="/categoryoutlet/index" class="nav-link bg-dark">Category Outlet</a></li>
                    <li class="nav-item"><a href="/weight" class="nav-link bg-dark">Weight</a></li>
                    <!-- <li class="nav-item"><a href="/month" class="nav-link bg-dark">Month</a></li>
                    <li class="nav-item"><a href="/week" class="nav-link bg-dark">Week</a></li>
                    <li class="nav-item"><a href="/year" class="nav-link bg-dark">Year</a></li>-->
                     
                    <li class="nav-item"><a href="/actions" class="nav-link bg-dark">Action Code</a></li>
                    <!-- <li class="nav-item"><a href="/tkcode" class="nav-link bg-dark">Living Quarters</a></li> -->
                  </ul>
                </div>
              </li>    



  {{-- Home/Dashboard --}}
                <li class="nav-item"><a href="/summary/summary" class="nav-link bg-dark">HOME</a></li>

  {{-- Data --}}
              <li class="nav-item ">
                <a href="#Data" class="nav-link bg-dark " data-toggle="collapse" aria-expanded="false" aria-controls="sidebar-layouts">
                  <span class="menu-title">DATA</span>
                  <i class="fas fa-ellipsis-v"></i>
                </a>
                <div class="collapse" id="Data">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/prices/dataSummary" class="nav-link">Data Summary</a></li>
                   <!--  <li class="nav-item"><a href="/prices/validationHQ/0" class="nav-link">Data Validation</a></li> -->
<!-- 
                    <li class="nav-item"><a href="/prices/index" class="nav-link bg-dark">Data Capture</a></li> -->

                    <li class="nav-item"><a href="/table1/index" class="nav-link bg-dark">Table 1</a></li>
                  </ul>
                </div>
              </li>

  

  {{-- Setting --}}
              <!-- Separator with title --><br><br> 
              <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed bg-dark" >
                <small><b>SETTING</b></small>
              </li>

  {{-- Item Management --}}
              <li class="nav-item">
                <a class="nav-link bg-dark" data-toggle="collapse" href="#itemM" aria-expanded="false" aria-controls="itemM">
                  <span class="menu-title">Item Management</span>
                  <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="itemM">
                  <ul class="list-group">
                    <li class="nav-item"><a href="/maingroups/" class="nav-link bg-dark">Item Codes Hierarchy</a></li>
                    <!-- <li class="nav-item"><a href="/maingroups/index" class="nav-link bg-dark">2D Main Group</a></li>
                    <li class="nav-item"><a href="/submaingroups/index" class="nav-link bg-dark">3D Sub Main Group</a></li>
                    <li class="nav-item"><a href="/expenditures/index" class="nav-link bg-dark">4D Expenditure Class</a></li>
                    <li class="nav-item"><a href="/items/index" class="nav-link bg-dark">6D Item</a></li>
                    <li class="nav-item"><a href="/itemspecifications/index" class="nav-link">7D Item Specification</a></li>
                    <li class="nav-item"><a href="/classification" class="nav-link bg-dark">Classification</a></li>
                    <li class="nav-item"><a href="/pungutans/index" class="nav-link bg-dark">Collection</a></li> -->
                  </ul>
                </div>
              </li> 

            </li>




  <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

{{--    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>--}}
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('node_modules/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('node_modules/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('node_modules/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->

    <link rel="stylesheet" type="text/css" href="{{ asset('datatable/css/jquery.dataTables.min.css')}}"/>
 
    <script type="text/javascript" src="{{ asset('datatable/js/jquery.dataTables.min.js')}}"></script>

    <!-- <script type="text/javascript" src="{{ asset('datatable/js/jquery.dataTables.buttons.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('datatable/js/jquery.dataTables.select.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('datatable/js/jquery.dataTables.keyTable.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('datatable/js/jquery.dataTables.editor.min.js')}}"></script>

     <script type="text/javascript" src="{{ asset('datatable/js/jquery.dataTables.buttons.min.js')}}"></script>
 -->
     @yield('script')
</body>

</html>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

  }
</style>
</head>
</body>

</html>

@section('script')

<script type="text/javascript">
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

@endsection