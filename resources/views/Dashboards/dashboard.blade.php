<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/bondi.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
<style>

  .container-fluid a{
    color: white;
    text-decoration: none;
    }
</style>
    <title>Dashboard</title>
      </head>
      <body style="direction: rtl ; ">
          <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid mr-2">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
          </button>
          {{-- <h2 style="color: white  "  >Blood Bank</h2> --}}
          <img src="{{asset('img/blood bank white (1).png')}}" alt="Logo" height="60px" style="margin-right: 100px">

       

      
        </div>
      </nav>
      <!-- top navigation bar -->
      <!-- offcanvas -->
      <div
        class="offcanvas offcanvas-end sidebar-nav bg-dark" tabindex="-1" id="sidebar" >
        <div class="offcanvas-body p-0">
          <nav class="navbar-dark">
          
            <ul class="navbar-nav">
              
              <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            
              <li>
                <div class="  bg-primary " >
                <a href="dashboard" class="nav-link px-3 active bg-primary ">
                  <span class="me-2"><i class="bi bi-speedometer2" style="color: white;"></i></span>
                  <span style="color: white;" >Dashboard</span>
                </a></div>
              </li>
              <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
                <li>
                  <a href="admincontrol" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-person px-3" style="color: white;"></i></span>
                    <span  style="color: white;">المسؤولين</span>
                  </a>
                </li>
                <li>
                  <a href="empcontrol" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-people px-3" style="color: white;"></i></span>
                    <span  style="color: white;">الموظفين</span>
                  </a>
                </li>
                <li>
                  <a href="visitcontrol" class="nav-link px-3" >
                    <span class="me-2"><i class="bi bi-person-circle px-3" style="color: white;"></i></span>
                    <span  style="color: white; ">المستخدمين</span>
                  </a>
                </li>
                <a  class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"  href="#layouts">
                  <span class="me-2"><i class="bi bi-geo-alt-fill px-3"  style="color: white;"></i></span>
                  <span  style="color: white;">مواقع التبرع</span>
                  <span class="ms-auto">
                    <span class="right-icon px-3">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <div class="collapse" id="layouts">
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="bankcontrol" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-geo-alt-fill "  style="color: white;"></i></span>
                        <span  style="color: white;">مصرف الدم</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="collapse" id="layouts">
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="centercontrol" class="nav-link px-3">
                        <span class="me-2"
                          ><i class="bi bi-geo-alt-fill "  style="color: white;"></i></span>
                        <span  style="color: white;">مراكز تبرع</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="requestcontrol" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-droplet px-3"  style="color: white;"> </i></span>
                  <span  style="color: white;">طلبات طلب دم</span>
                </a>
              </li>
              <li>
                <a href="donationcontrol" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-droplet-half px-3" style="color: white;"></i></span>
                  <span style="color: white;">طلبات تبرع بالدم</span>
                </a>
              </li>
              <li>
                <a href="blood_storage" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-moisture px-3"style="color: white;"></i></span>
                  <span style="color: white;">مخزون فصائل الدم</span>
                </a>
              </li>
       
              </ul>
            </nav>
          </div>
          <span style="color: white; padding-right: 30%;">{{$_COOKIE["Type"]}}: {{$_COOKIE["User"]}}</span>
          <a href="login_admin" style="color: white; padding-right: 30%; text-decoration: none;">تسجيل الخروج</a>

        </div>
      <!-- offcanvas -->
      <main class="mt-5 pt-1" >
        <div class="container-fluid">
         <div class="row mt-5" style="color: white">
            <div class="col-md-3 mb-3">
              <div class="card bg-primary text-white h-100">
                <div class="card-body py-5  offcanvas-center "><h1>{{$AdminCount}}</h1>
                  <img src="{{asset('img/icon/user.png')}}" alt="Logo" height="100px" style="margin-right: 100px">
               </div>
                <div class="card-footer d-flex">
                  <a href="admincontrol">عرض المسؤولين</a>
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card bg-warning text-white  h-100">
                <div class="card-body py-5  offcanvas-center "><h1>{{$EmpCount}}</h1>
                  <img src="{{asset('img/icon/emp.png')}}" alt="Logo" height="100px" style="margin-right: 100px">
               </div>
                <div class="card-footer d-flex">
                  <a href="empcontrol"> الموظفين</a>
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card bg-info text-white h-100">
                <div class="card-body py-5  offcanvas-center "><h1>{{$vistorCount}}</h1>
                  <img src="{{asset('img/icon/userinfo.png')}}" alt="Logo" height="100px" style="margin-right: 100px">
               </div>
                <div class="card-footer d-flex">
                  <a href="visitcontrol"> المستخدمين</a>
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card bg-success text-white h-100">
                <div class="card-body py-5  offcanvas-center ">
                  <h1>{{$BanksCount}}</h1>
                  <img src="{{asset('img/icon/hospital.png')}}" alt="Logo" height="100px" style="margin-right: 100px">
               </div>
                <div class="card-footer d-flex">
                  <a href="bankcontrol">مصارف الدم</a>
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card bg-dark text-white h-100">
                <div class="card-body py-5  offcanvas-center "><h1>{{$CentersCount}}</h1>
                  <img src="{{asset('img/icon/ambulance.png')}}" alt="Logo" height="100px" style="margin-right: 100px">
               </div>
                <div class="card-footer d-flex">
                  <a href="centercontrol">مراكز التبرع</a>
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card bg-secondary text-white h-100">
                <div class="card-body py-5  offcanvas-center "><h1>{{$req}}</h1>
                  <img src="{{asset('img/icon/blood-test.png')}}" alt="Logo" height="100px" style="margin-right: 100px">
               </div>
                <div class="card-footer d-flex">
                 <a href="donationcontrol"> طلبات طلب دم</a>
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card bg-danger text-white h-100">
                <div class="card-body py-5  offcanvas-center "><h1>{{$don}}</h1>
                  <img src="{{asset('img/icon/blood-donation.png')}}" alt="Logo" height="100px" style="margin-right: 100px">
               </div>
                <div class="card-footer d-flex">
                 <a href="donationcontrol"> طلبات تبرع بالدم</a>
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card bg-danger text-white h-100">
                <div class="card-body py-5  offcanvas-center "><h1>{{$don}}</h1>
                  <img src="{{asset('img/icon/Bloodpak.png')}}" alt="Logo" height="100px" style="margin-right: 100px">
               </div>
                <div class="card-footer d-flex">
                 <a href="blood_storage">  فصائل الدم</a>
                  <span class="ms-auto">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
              </div>
            </div>

          </div>
          
        </div>
      </main>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.map.js')}}"></script>        
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
        <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets//js/script.js')}}"></script>
      </body>
    </html>
    