<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>مصرف الدم</title>
  <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
  <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/content.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>

  <!--من هنا تقدر تمسح لانه هذا تبع المحتوي الصفحه-->
  <div class="container" style="direction: rtl; ">
    <!-- start of posting-->
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="bg-white p-4 my-5" style="border-radius: 20px; color: #616263;">

          <div class="text-center">
            <h1 style="color: black;"><span>مرحبا بك</span></h1>
          </div>
          <div class="text-center">
            <h5 style="color: black;"><span>ادخل بياناتك هنا</span></h5>
          </div>
          <br>
          <form action="/" method="post" onsubmit="return checkData_LoginVisitor()">
            @csrf

            <div class="form-group">

              <label class="text" for="">البريد الالكتروني</label>
              <input type="email" id="email" name="Email" value="{{old('Email')}}"
                class="form-control text-center mt-1 mb-1" placeholder="user@email.com">
                @error('Email')
              <span style="color: red; display:block;">
              @if ($message == 'The selected email is invalid.')
               البريد الالكتروني المدخل غير صحيح . يرجى التحقق مرة اخرى او انشاء حساب
               @else
            {{ $message }}
                @endif
              </span>
              @enderror

              <label class="text mt-2" for="">كلمة المرور</label>
              <input type="password" id="password" name="Password" value="{{old('Password')}}"
                class="form-control text-center mt-1 mb-2" placeholder="ادخل  كلمة المرور">
                @error('Password')
              <span style="color: red">
              @if (
  $message == 'The password must be at least 8 characters.'
)
كلمة المرور يجب الا تقل عن 8 خانات
@elseif (
  $message == 'The selected password is invalid.'
)
                    كلمة المرور المدخلة غير صحيحة  

                 @else
                {{ $message }}
                @endif
              </span>
              @enderror
            </div>
            <br>

            <div class="form-group">

              <button type="submit" class="submit">تسجيل الدخول</button>

            </div>
            <br>

          </form>

          <div class="text-center">
            <p class="section-title px-5 "><span class="px-2">أو</span></p>
          </div>

          <div class="container-btn">
            <a class="button text-center" href="/CreateAccount"
              style="background-color: white; color:red; border:1px solid red;">
              إنشاء حساب جديد
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6  d-none d-lg-block">
        <img class="img-fluid rounded mb-5 mb-lg-0" style="height: 100%; width: 100%; align-items: center;"
          src="{{asset('img/visitorlogin.png')}}" alt="">
      </div>

    </div>
  </div>
  <!-- </div> -->


  <!-- START FOOTER -->
  <script src="/assets/js/success_msg.js"></script>
  <script src="{{asset('assets/js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/all.min.js')}}"></script>



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