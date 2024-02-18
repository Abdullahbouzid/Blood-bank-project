<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حول</title>
    <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
  
    <link rel="stylesheet" href="{{asset('assets/css/bondi.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blood_donation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content.css')}}">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body style=" font-family: 'Cairo', sans-serif;"> 
  <!-- START NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-expand-md ">
    <div class="container">

      <!-- للرجوع الى القائمة الرئيسية -->
      <img src="{{asset('img/blood bank white and black.png')}}" alt="Logo" height="78px">


      <!-- بوتن وظيفتها الظهور عندما يتم تصغير الشاشة  -->

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="barmeun fa-solid fa-bars"></i>
      </button>

      <!-- ---?--- -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mb-0 mb-lg-0 fw-bolder ms-auto ">
          <li class="nav-item" >
            <a class="nav-link fs-5 pt-1 " href="home">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 pt-1 " href="blood_donation">طلب التبرع بالدم</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 pt-1 " href="BloodRequest">طلب دم</a>
          </li>
          <li class="nav-item " style="background-color: #fd563f;">
            <a class="nav-link fs-5 pt-1 " href="Blood_Center">مراكز التبرع</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link fs-5 pt-1 " href="about">حول</a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link fs-5 pt-1 " href="">تسجيل الخروج</a>
          </li>

        </ul>

      </div>

  </nav>

  <!-- END NAVBAR -->

            <!--من هنا تقدر تمسح لانه هذا تبع المحتوي الصفحه-->
           
        <div class="container text-center pt-5"> 
 
        
         

                

                <!-- start of posting-->
                  <div class="row align-items-center">
                    
                  
                    <div class="row " style="direction: rtl">
                        <div class="col-lg-3 col-sm-12">
                            <div class="form-control exception">
                                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                  <option selected>اختر مكان التبرع</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                                </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                          <div class="form-control exception">
                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                              <option selected>اختر نوع المركز</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>

{{-- جدول المراكز --}}

<div class="col-lg-12 col-sm-12 pt-5">

<table class="table table-striped " style="direction: rtl">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">اسم المركز</th>
      <th scope="col">نوع المركز</th>
      <th scope="col">مكان المركز</th>
    </tr>
  </thead>

  @foreach ($centers as $center)
  <tbody>
    <tr>
      <th scope="row">{{$center->$Center_id}} </th>
      <td>{{$center->$Name_Center}}</td>
      <td>{{$center->$Type_of_Center }}</td>
      <td>{{ $center->$Adds_Center}} </td>
      
    </tr>
  </tbody>
</table>
@endforeach
</div>
            </div>
            </div>
            <br>
           
    <!-- الي هنا -->
<!-- START FOOTER -->

<script src="/assets/js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js"></script>
<script src="/assets/js/all.min.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- هذم سكربت متع البوتس تراب -->
<footer class="footer text-white py-0">
  <div class="contact">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-youtube fa-sm"></i></a>
    <a href="#"><i class="fa-brands fa-telegram"></i></a>
    <a href="#"><i class="fa-solid fa-at"></i></a>
  </div>

</footer>

<!-- END FOOTER -->

</body>
</html>