<!DOCTYPE html>
<html lang="en">
<style> 
#example1 {

background: linear-gradient(0deg, #ffffff, #ececec);
background-size: 400% 400%;

-webkit-animation: gradientAni 15s ease infinite;
-moz-animation: gradientAni 15s ease infinite;
-o-animation: gradientAni 15s ease infinite;
animation: gradientAni 15s ease infinite;
}

@-webkit-keyframes gradientAni {
    0%{background-position:50% 0%}
    50%{background-position:51% 100%}
    100%{background-position:50% 0%}
}
@-moz-keyframes gradientAni {
    0%{background-position:50% 0%}
    50%{background-position:51% 100%}
    100%{background-position:50% 0%}
}
@-o-keyframes gradientAni {
    0%{background-position:50% 0%}
    50%{background-position:51% 100%}
    100%{background-position:50% 0%}
}
@keyframes gradientAni { 
    0%{background-position:50% 0%}
    50%{background-position:51% 100%}
    100%{background-position:50% 0%}
}
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Selamat Datang | Login</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/bootstrap/bootstrap.min.css') ?>"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/helper.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>"/>
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/toastr/toastr.min.css') ?>"/>
    <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js') ?>"></script>
    <!-- scripit init - Toastr -->
    <script src="<?php echo base_url('assets/js/lib/toastr/toastr.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/toastr/toastr.init.js') ?>"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <?php
    $log_stat = $this->session->flashdata('login');
    if($this->session->userdata('login') == "gagal"){
      ?>
      <script type="text/javascript">
        // $(document).ready( function() { alert('Login Gagal'); } );
        $(document).ready( login_gagal() );
      </script>
      <?php
      } else if ($this->session->userdata('login') == "kosong") {
        ?>
        <script type="text/javascript">
        // $(document).ready( function() { alert('Login Gagal'); } );
        $(document).ready( login_kosong() );
        </script>
        <?php
      }
    ?>
    <div id="main-wrapper">
    <div id="example1">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <!-- <h4>Login</h4> -->
                                <h4>
                                    <img src="<?php echo base_url('assets/images/logo_p3i-1.png') ?>" alt="Logo" height="100">
                                </h4>
                                <form action="<?php echo site_url('login/aksi_login') ?>" method="post">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/js/sidebarmenu.js') ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>

</body>

</html>