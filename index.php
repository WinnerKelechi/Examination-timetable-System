<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page -
        <?php include('dist/includes/title.php');?>
    </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


</head>


<body class="hold-transition login-page" style="background:white;">
    <header>
        <marquee>
            <div class="login-logo">
                <h1>Examination Timetable System</h1>
            </div>
        </marquee>
        <center>
            <a href="pages/student.php">
                <div class="col-xs-11" style="margin-left:30px">
                    <button type="submit" name="student" class="btn btn-primary btn-block btn-flat">STUDENTS! Click here to view your exam timetable</button>
                </div>
            </a>
        </center>
    </header>

    <div class="login-box">
        <div class="login-box-body">
            <p class="login-box-msg">Only Exam officer and Lecturers can sign-in</p>
            <form action="login.php" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">

                    <div class="col-xs-6 pull-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" default>Sign In</button>
                    </div>
                </div>
            </form>



        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->



    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>
