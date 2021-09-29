<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link id="styleSheet" rel="stylesheet">
    <script>
        let darkMode = window.localStorage.getItem('darkMode');
        let styleSheetElem = document.getElementById('styleSheet');

            if (darkMode){
                if (darkMode === '1'){
                    styleSheetElem.href = 'css/dark_style.css';
                }else {
                    styleSheetElem.href = 'css/style.css';
                }
            }else {
                styleSheetElem.href = 'css/style.css';
                window.localStorage.setItem('darkMode', '0')
            }

        function changeTheme() {
            let darkModeValue = window.localStorage.getItem('darkMode');
            if (darkModeValue === '1' || '0'){
                if (darkModeValue === '1'){
                    window.localStorage.setItem('darkMode', '0');
                    styleSheetElem.href = 'css/style.css';
                }else if (darkModeValue === '0') {
                    window.localStorage.setItem('darkMode', '1');
                    styleSheetElem.href = 'css/dark_style.css';
                }else{
                    window.localStorage.setItem('darkMode', '0');
                    changeTheme();
                }
            }
        }
    </script>
    <link rel="stylesheet" href="template/css/custom_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <style>
        button, a, footer, h5, span {
            font-family: 'Cairo', sans-serif;
        }
        #what-is-majhul {
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            font-size: 35px;
            letter-spacing: -2px;
        }
    </style>
    <title>مجهول | الصفحة الرئيسية</title>

</head>
<body id="body">

<!--navbar start-->
<nav class="navbar navbar-expand-lg navbar-dark bg-ternary">
    <a class="navbar-brand" href="index.php">مجهول</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <div class="form-inline mt-4 mt-md-3 mt-lg-0">
            <button href="signup.html" onclick="changeTheme()" class="btn btn-block btn-light px-4 mr-sm-2 mr-md-2 text-ternary col-md col-sm">
                <i class="fa fa-lightbulb-o fa-lg" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</nav>
<!--navbar end-->

<!--container start-->
<div class="container pt-3">

    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid rounded py-sm-3 py-md-4 py-lg-5 mb-0">
                <div class="container text-center">
                    <h1 id="welcoming" class="display-4 text-ternary" style="font-size: 45px;">...</h1>
                    <p class="text-muted">مرحباً بك في منصة مجهول</p>
                </div>
            </div>
        </div>

        <div class="col-12 my-3">
            <div class="dropdown-divider"></div>
        </div>

        <div class="col-12 align-self-center">
            <a href="signin.html" class="btn btn-secondary btn-lg btn-block">دخول</a>
        </div>

        <div class="col-12 pt-3">
            <a href="signup.html" class="btn btn-ternary btn-block btn-lg">تسجيل</a>
        </div>

        <div class="col-12 my-3">
            <div class="dropdown-divider"></div>
        </div>
    </div>

    <div class="row pl-2">
        <div class="col-12 border-ternary border-left rounded">
            <h3 id="what-is-majhul" class="text-ternary">ماهو مجهول؟</h3>
            <p class="text-muted" style="font-size: 18px;">
                مجهول هي منصة تواصل للحصول على تعليقات إيجابية وبناءة من أصدقائك أو متابعيك على وسائل التواصل الإجتماعي. مجرد تسجيلك ومشاركة رابط مجهول الخاص بك تكون قادر على إستقبال الرسائل من المجهولين دون الكشف عن هويتهم, لكن كونهم مجهولين لايعني أنهم يسيئون لمستخدمي المنصة! مجرد إبلاغك عن الرسالة لن يتم عرض رسائل المرسل مرة آخرى وبشكل نهائي! في حال ورود بلاغات إساءة إستخدام من مرسل ما سيتم حظره من إستخدام منصة مجهول.
            </p>
        </div>
    </div>

</div>
<!--container end-->

    <div id="footer" class="container-fluid px-0" style="position: relative; visibility: hidden;">
        <footer class="mt-3">
            <div class="text-center pt-3 pb-2">
                <p>جميع الحقوق محفوظة مجهول © 2021</p>
            </div>
        </footer>
    </div>

    <!--introducing DarkMode-->
    <div class="modal fade" id="introducingDarkMode" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-ternary" style="font-weight: bold; letter-spacing: -1px;">الوضع الليلي
                        <i class="fa fa-moon-o" aria-hidden="true"></i>
                    </h5>
                </div>

                <div class="modal-body text-center d-none d-sm-none d-md-none d-lg-flex">
                    <p class="text-muted" style="line-height: 28px;">يمكنك الأن تفعيل الوضع الليلي من خلال الضغط على زر
                        <span class="bg-ternary text-white pr-1 pl-2 mr-1 rounded" style="letter-spacing: 0px;">تفعيل
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        </span>
                        في الأسفل أو التبديل بين الوضع العادي والليلي من خلال الزر الموجود في الشريط العلوي في أي وقت!</p>
                </div>

                <div class="modal-body text-center d-lg-none">
                    <p class="text-muted" style="line-height: 28px;">يمكنك الأن تفعيل الوضع الليلي من خلال الضغط على زر
                        <span class="bg-ternary text-white pr-1 pl-2 mr-1 rounded" style="letter-spacing: 0px;">تفعيل
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        </span>
                        في الأسفل أو التبديل بين الوضع العادي والليلي من خلال الزر الموجود في القائمة
                        <span style="font-weight: bold">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        العلوية في أي وقت!</p>
                </div>

                <div class="modal-footer">
                    <button id="enableDarkMod" type="button" class="btn btn-ternary btn-block" data-dismiss="modal">تفعيل
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                    </button>
                    <button id="noThanks" type="button" class="btn btn-secondary btn-block mt-1" data-dismiss="modal">لا, شكراً</button>
                </div>
            </div>
        </div>
    </div>


<!--jQuery and Bootstrap Bundle (includes Popper) -->
<script src="template/js/set_footer_more_content.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3805a1b0b8.js" crossorigin="anonymous"></script>
    <script>
        // good morning or good evening
        let welcomingElem = document.getElementById('welcoming');
        let time = new Date().getHours();
        let amORpm = (time >= 12) ? 'PM' : 'AM';
        if (amORpm === 'PM'){
            welcomingElem.innerText = 'مساء الخير';
        }else {
            welcomingElem.innerText = 'صباح الخير';
        }

        // dark mode modal
        let enableBtn = document.getElementById('enableDarkMod');
        let noThanksBtn = document.getElementById('noThanks');
        setTimeout(() => {
            let newUserValue = window.localStorage.getItem('newUser');
            if (!newUserValue || newUserValue === '1') {
                $('#introducingDarkMode').modal('show');
                window.localStorage.setItem('newUser', '1');
            }
            enableBtn.addEventListener('click', () => {
                changeTheme();
                window.localStorage.setItem('newUser', '0');
            })
            noThanksBtn.addEventListener('click', () => {
                window.localStorage.setItem('newUser', '0');
            })
        },2000);
    </script>
</body>
</html>