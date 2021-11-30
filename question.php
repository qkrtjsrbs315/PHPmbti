<?php
    $idx = (int)$_GET['idx'];
    $idx = $idx+1;
    $query = 'select * from question where idx="'.$idx.'";';
    $url = 'https://localhost.com/question.php?idx="'.$idx.'"';
?>
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
        </head>
<body background-color="#198754">
                    <!-- Navigation-->
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand" href="#page-top">MBTI TEST</a>
                        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">MBTI TEST</h1>
            <div class="text-center mt-4">
            </div>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <section class="bg-primary text-white mb-0" id="about">
                    <!-- About Section Content-->
                    <div class="row">
                        <?php $result = connect($query);  $row = mysql_fetch_array($result); echo $row['question']; ?>
                    </div>

                    <div class="text-center mt-4">
                    <form  method="post" action='./user.php'>
                        <?php echo  '<input type="button" name = "mybutton" class="fs-4 btn btn-xl btn-outline-light" onclick="location.href="'.$url.'"" value="YES">'?>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <?php echo '<input type="button" name = "mybutton" class="fs-4 btn btn-xl btn-outline-light" onclick="location.href="'.$url.'"" value="NO">'?>
                    </form>
                </div>

                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
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