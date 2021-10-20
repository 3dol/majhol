<?php require_once __DIR__. '/template/header.php';?>
<style>
        button, a, footer {
            font-family: 'Cairo', sans-serif;
        }
    </style>
    <title>مجهول | التسجيل</title>
</head>
<body id="body">


    <!--navbar start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-ternary">
        <a class="navbar-brand" href="index.php">مجهول</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link" href="index.php">الرئيسية</a>-->
<!--                </li>-->
            </ul>
            <div class="form-inline mt-4 mt-md-3 mt-lg-0">
                <a href="signup.php" class="btn btn-block btn-light px-4 mr-sm-2 mr-md-2 text-ternary col-md col-sm">تسجيل</a>
                <a href="signin.php" class="btn btn-block btn-outline-light px-1 mt-sm-0 mt-md-0 col-md col-sm">دخول</a>
            </div>
        </div>
    </nav>
    <!--navbar end-->


    <!--container start-->
    <div class="container pt-3">

        <div class="jumbotron jumbotron-fluid rounded py-sm-3 py-md-4 py-lg-5 mb-3">
            <div class="container text-center">
                <h1 class="display-4 text-ternary" style="font-size: 45px;">إنشاء حساب</h1>
            </div>
        </div>

        <hr class="pb-1">

        <div class="jumbotron shadow py-4">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input name="name" type="text" class="form-control" placeholder="الإسم">
                        <span class="small" style="font-size: small;">يتم عرض الإسم للمجهولين عند رغبتهم في إرسال رسالة لك.</span>
                    </div>
                    <div class="form-group col-md-6">
                        <input name="username" type="text" class="form-control" placeholder="إسم المستخدم">
                        <span class="small" style="font-size: small;">إسم المستخدم هو المعرف الفريد الخاص بك (بالإنجليزية فقط)<span class="text-danger">*</span>.</span>
                    </div>
                </div>

                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="البريد الإلكتروني">
                    <span class="small" style="font-size: small;">يتم تأمين حسابك وضمان عدم فقدانه بواسطة بريدك الإلكتروني.</span>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input name="password" type="password" class="form-control" placeholder="كلمة المرور">
                        <span class="small" style="font-size: small;">يجب أن تكون كلمة المرور أكثر من 8 خانات (حروف وأرقام)<span class="text-danger">*</span>.</span>
                    </div>
                    <div class="form-group col-md-6">
                        <input name="password2" type="password" class="form-control" placeholder="تأكيد كلمة المرور">
                        <span class="small" style="font-size: small;">أعد إدخال كلمة المرور مرة آخرى.</span>
                    </div>
                </div>

                <div class="form-group">
                    <a href="signin.php" style="color: #339aa5;">لديك حساب؟ سجل الدخول</a>
                </div>

                            <!--production-->
                <button type="submit" class="btn btn-block btn-ternary">تسجيل
                    <i class="fa fa-check" aria-hidden="true"></i>
                </button>

<!--                <a href="home.php" class="btn btn-block btn-ternary">تسجيل-->
<!--                    <i class="fa fa-check" aria-hidden="true"></i>-->
<!--                </a>-->
            </form>
        </div>

        <?php

        function filterString($string){
            $string = filter_var(trim($string), FILTER_SANITIZE_STRING);
            return $string;
        }

        function filterEmail($email){
            $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return $email;
            }else{
                return false;
            }
        }

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                // validate email
                if(!filterEmail($_POST['email'])){
                    die('Sorry your email is incorrect.');
                }

                echo '<pre>';
                print_r($_POST);
                echo '</pre>';
            }
        ?>

    </div>
    <!--container end-->

    <div id="footer" class="container-fluid px-0" style="position: relative; visibility: hidden;">
        <footer class="mt-3">
            <div class="text-center pt-3 pb-2">
                <p>جميع الحقوق محفوظة مجهول © 2021</p>
            </div>
        </footer>
    </div>



    <!--jQuery and Bootstrap Bundle (includes Popper) -->
<script src="template/js/set_footer_more_content.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3805a1b0b8.js" crossorigin="anonymous"></script>
</body>
</html>