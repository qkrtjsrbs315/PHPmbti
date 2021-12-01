<html>
    <head>
        <meta charset="utf-8" />
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>MBTI TEST PAGE</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Font Awesome icons (free version)-->
            <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
            <!-- Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/styles.css" rel="stylesheet" />
            <link href="css/checkbox1.css" rel="stylesheet" />
            <style>
                .center{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            <script>
                function submit(){
                    form = document.getElementById('name').submit();

                }
                function enterkey(){
                    if(window.event.keyCode == 13){
                        submit()
                    }
                }    
            </script>
        </head>
<body background-color="#198754">
       <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand" href="#page-top">MBTI TEST</a>
                        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./main.html">메인으로 돌아가기</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">이름을 입력하세요.</h1>
            <div class="text-center mt-4">
            </div>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
                <br>
            </div>
            <section class="bg-primary text-white mb-0" id="about">
                    <!-- About Section Content-->
                    <div class="row">
                    
                </div class="row justify-content-center text-center center">

                            <!-- Contact Section Form-->
                                    <form action="register.php" method="get" id="name">
                                        <!-- Name input--> 
                                            <label for=""><input class="form-control" name ="user_name"id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" size="50" style="border-radius: 25px;"/></label>
                                            <br><br>
                                            <div class="divider-custom divider-light">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <a class="btn btn-xl btn-outline-light"  onclick ="submit()" onkeyup="enterkey()">
                                                    검사 시작하기
                                                </a>
                                            </div>
            </section>  
            <section class="page-section portfolio" id="portfolio">
                <div class="container">
                </section>
                <section class="page-section portfolio" id="portfolio">
                    <div class="container">
                    </section>

                    
    

</body>
</html>