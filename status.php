<?php 
if(!isset($_SESSION)){session_start();}

include("mysqli_connect.php"); 
include("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add New User | SFA Admin Panel</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="newtheme/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="newtheme/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="newtheme/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><img class="img-responsive" src="logo/logo.png" alt="SFA" style="padding:5px; height:60px; margin-top:-20px;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
<?php if(isset($_SESSION['id'])){?>
<ul class="nav navbar-nav navbar-right">
    <li class="hidden active">
        <a href="#page-top"></a>
    </li>
    <li class="page-scroll">
         <a href=""><?php if(isset($r)) echo $r['username'];?></a>
    </li>
    <li class="page-scroll">
         <a href="">LoginTime</a>
    </li>
    <li class="page-scroll">
         <a href="functions/logout">Logout</a>
    </li>
</ul>
<?php 
}
      ?>      
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->

    <style type="text/css">
/*html, body {
  overflow: hidden;
}*/
</style>
    <header>
    	<div class="container">
            <div class="row">
                    <img class="img-responsive" src="logo/logo.png" alt="">
                    <div class="intro-text">
                        <!-- <span class="name">SFA PILOT COMPASS TEST</span> -->
                        <h1>Thank You Test is Complete Now. You can <a href="functions/logout" style="color:white">Logout</a></h1>
                    </div>
                    </div>
        </div>
    </header>
     <!-- Footer -->
    <footer class="navbar-fixed-bottom text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; SFA <?php echo date('Y');?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    

    <!-- jQuery -->
    <script src="newtheme/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="newtheme/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="newtheme/js/classie.js"></script>
    <script src="newtheme/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="newtheme/js/jqBootstrapValidation.js"></script>
    <script src="newtheme/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="newtheme/js/freelancer.js"></script>

</body>

</html>
