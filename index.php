<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="NarayaN Yaduvanshi">

    <title>NarayaN Yaduvanshi | Biker | Coder | Gamer</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <?php
        require('./src/nav.php');
    ?>

        <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
        <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>NarayaN Yaduvanshi</h1>
                            <hr class="small">
                            <span class="subheading">Also known as NarayaN Singh in official documents</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-preview">

                        <h2 class="post-title">
                            Skills
                        </h2>
                        <div>
                            <label>Server Side : </label> NodeJS, ExpressJs, VueJs
                        </div>
                        <div>
                            <label>AI & ML : </label> Machine learning, API.ai, Wit.ai
                        </div>
                        <div>
                            <label>Databases & frameworks : </label> Mysql, Mongo, Mongoose, SQL, Cassandra<sup>*</sup>
                        </div>
                        <div>
                            <label>Frontend : </label> React, Angular, Vue<sup>*</sup>
                        </div>
                        <div>
                            <label>Mobile : </label> React Native, <a href="http://nativebase.io">Native Base</a>,Ionic
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php
            require('./src/footer.php');
        ?>

</body>

</html>
