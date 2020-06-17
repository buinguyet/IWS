<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet" id="bootstrap-css">
        <script
        src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
              ">

        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet" id="bootstrap-css">
        <script
        src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
              integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
              crossorigin="anonymous">

        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet" id="bootstrap-css">
        <script
        src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet" id="bootstrap-css">
        <script
        src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet"
              href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <script
        src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet" id="bootstrap-css">
        <script
        src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet" id="bootstrap-css">
        <script
        src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"
              href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript"
        src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <title>Vietnam Corona Statistic Tracking</title>

        <style>
<?php include('../public/css/myStyle.css') ?>
        </style>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery("#open-menu").click(function () {
                    if (jQuery('#page-container').hasClass('show-menu')) {
                        jQuery("#page-container").removeClass('show-menu');
                    } else {
                        jQuery("#page-container").addClass('show-menu');
                    }
                });
            });
        </script>

        <!-- News -->
        <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap core JavaScript -->
        <script src="../public/vendor/jquery/jquery.min.js"></script>
        <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body style="background-color: #eef4fb;">
        <div id="page-container" class="main-admin">
            <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100 navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#"></a>
                <div id="open-menu" class="menu-bar">
                    <div class="bars">
                    </div>
                    <h2 style="margin-left:600px;">Corona_Tracking</h2>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown ets-right-0"><a
                            class="nav-link dropdown-toggle" href="index.php"
                            role="button" aria-expanded="false"> <img
                                src="https://thumbs.dreamstime.com/z/vector-icon-coronavirus-ncov-stop-sign-isolated-white-background-wuhan-coronavirus-illustration-crossed-out-stop-170792692.jpg"
                                class="img-fluid rounded-circle border user-profile">
                        </a></li>
                </ul>
            </nav>
            <div class="side-bar">
                <div class="side-bar-links">
                    <div class="side-bar-logo text-center py-3">
                        <img
                            src="https://thumbs.dreamstime.com/z/vector-icon-coronavirus-ncov-stop-sign-isolated-white-background-wuhan-coronavirus-illustration-crossed-out-stop-170792692.jpg"
                            class="img-fluid rounded-circle border bg-secoundry mb-3">
                        <h5>Vietnam Corona Statistic Tracking</h5>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a></li>
                        <li class="nav-item">
                            <a href="new.php" class="nav-links d-block"><i class="fa fa-newspaper-o" aria-hidden="true"></i> NEWS</a></li>
                        <?php if ($_SESSION["username"] == FALSE) { ?>
                            <li class="nav-item"><a
                                    href="login.php"
                                    class="nav-links d-block"><i class="fa fa-user-o"
                                                             aria-hidden="true"></i> LOGIN</a></li>
                            <?php } ?>
                            <?php if ($_SESSION["username"] == TRUE) { ?>
                            <li class="nav-item"><a
                                    href="updateAccount.php"
                                    class="nav-links d-block"><i class="fa fa-user-md"
                                                             aria-hidden="true"></i> UPDATE ACCOUNT</a></li>
                            <?php } ?>
                            <?php if ($_SESSION["username"] == true) { ?>
                            <li class="nav-item"><a href="logout.php"
                                                    class="nav-links d-block"><i class="fa fa-power-off"
                                                             aria-hidden="true"></i> LOGOUT</a></li>
                            <?php } ?>
                    </ul>
                </div>
                <div class="side-bar-icons">
                    <div class="icons d-flex flex-column align-items-center">
                        <a href="index.php"
                           class="set-width text-center display-inline-block my-1"><i
                                class="fa fa-home"></i></a> 
                        <a href="new.php"
                           class="set-width text-center display-inline-block my-1"><i
                                class="fa fa-newspaper-o"></i></a> 
                            <?php if ($_SESSION["username"] == FALSE) { ?>
                            <a href="login.php"
                               class="set-width text-center display-inline-block my-1"><i
                                    class="fa fa-user-o" aria-hidden="true"></i></a> 
                            <?php } ?>
                            <?php if ($_SESSION["username"] == true) { ?>
                            <a
                                href="updateAccount.php"
                                class="set-width text-center display-inline-block my-1"><i
                                    class="fa fa-user-md" aria-hidden="true"></i></a>
                            <?php } ?>
                            <?php if ($_SESSION["username"] == true) { ?>  
                            <a
                                href="logout.php"
                                class="set-width text-center display-inline-block my-1"><i
                                    class="fa fa-power-off" aria-hidden="true"></i></a>
                            <?php } ?>
                    </div>
                </div>
            </div>

