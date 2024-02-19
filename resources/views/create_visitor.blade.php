<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انشاء حساب</title>
    <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet"
        href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/login.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/create_account.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <!--من هنا تقدر تمسح لانه هذا تبع المحتوي الصفحه-->
    <div class="container" style="direction: rtl; ">
        <!-- start of posting-->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="bg-white p-4 pb-0  mt-5" style="border-radius: 20px; color: #616263;">

                    <div class="container">

                        <img src="{{asset('img/blood bank.png')}}" alt="Logo" height="100px"
                            style="padding-right: 39%;">


                        <br>
                        <form action="/CreateAccount" method="" onsubmit="return checkData_CreateVisitor()">
                            {{-- @csrf --}}

                            <div class="form-group">

                                <label class="text" for="">الاسم الثلاثي</label>
                                <input type="username" id="username" name="visitoremail"
                                    class="form-control text-center" placeholder="اكتب اسمك الثلاثي">
                                <br>

                                <label class="text" for="">البريد الالكتروني</label>
                                <input type="email" id="email" name="email" class="form-control text-center"
                                    placeholder="user@email.com">
                                <br>

                                <label class="text" for="">كلمة المرور</label>
                                <input type="password" id="password" name="visitorpassword"
                                    class="form-control text-center" placeholder="ادخل  كلمة المرور"><br>

                                <label class="text" for="">تاكيد كلمة المرور</label>
                                <input type="password" id="password_again" name="visitorpassword"
                                    class="form-control text-center" placeholder="ادخل  كلمة المرور مجددا"><br>

                                <label class="date exception" style="display: block" for="">تاريخ الميلاد</label>
                                <input type="date" id="DOB_Visitor" name="DOB_Visitor" class="form-control exception"
                                    style="cursor: pointer; width:50%; display: inline;">

                                <button type="submit" class="submit" style="">إنشاء حساب جديد</button>

                            </div>
                            <br>

                            <!-- <div class="form-group"> -->

                            <!-- <button type="submit" class="submit">إنشاء حساب جديد</button> -->
                            {{-- <button type="submit" class="submit"><a href="home" --}} {{--
                                    style=" color: white; font-size: 18px; font-weight: bold;">تسجيل
                                    الدخول</a></button> --}}

                            <!-- </div> -->
                        </form>
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