<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  
  <link rel="stylesheet" href= '{{asset("../assets/css/styles.min.css")}}' />
  <link rel="stylesheet" href="{{asset("../assets/css/dashboard.css")}}">
</head>

<body>



  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
 
    <aside class="left-sidebar" style="background: linear-gradient(to right, lightgray, darkgray);">
   
      <div>
      <div class="brand-logo d-flex align-items-center justify-content-center">
       <div class="h1">
         <h1>{{strtoupper(Auth::User()->role)}}</h1>
       </div>

        
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
           
          </div>
        </div>
        
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
          @if(Auth::User()->role == 'admin')
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('home')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('user.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Users</span>
              </a>
            </li>
 
           
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Portfolio</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('about.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">About</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('education.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-book"></i>
                </span>
                <span class="hide-menu">Educational Attainment</span>
              </a>
            </li>
          
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('skill.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Skills</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('experience.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Experiences</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('contact.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-phone"></i>
                </span>
                <span class="hide-menu">Contacts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('blog.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">My Blog</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('seminar.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Seminar / Webinar</span>
              </a>
            </li>
            @endif 
           
        </nav>    
      </div>
    </aside>
     
    <div class="body-wrapper">
  
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
           
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <div style="padding: 8px;">{{ucwords(Auth::User()->name)}}</div>
                  <img src='{{asset("images/user.png")}}' alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
             
                   <div class="btn btn-outline-primary mx-3 mt-2 d-block">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit(); ">Logout</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                    </form>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
     
      <div class="container-fluid">
        @yield("content")

        @if(Auth::user()->role == 'admin')
        @if(Route::is('home'))
        
        <div class="container-count">
         <p>Total Users: {{$total_users}}</p>
        </div>

        <div class="container-count">
         <p>Education: {{$total_educ}}</p>
        </div>

        <div class="container-count">
         <p>Total Skills: {{$total_skills}}</p>
        </div>

        <div class="container-count">
         <p>Total Experiences: {{$total_exp}}</p>
        </div>
        
        <div class="container-count">
         <p>Total Blogs: {{$total_blogs}}</p>
        </div>

        <div class="container-count">
         <p>Total Seminar: {{$total_seminar}}</p>
        </div>

        @endif
        @endif

   
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>


</body>

</html>
