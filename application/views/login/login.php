

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url('landing_page'); ?>"><b>Hyura</b> Movies</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php
      $message = $this->session->flashdata('message');
      if ($message == "success register"){
        ?>
        <script type="text/javascript">
          Swal.fire(
            "Berhasil !",
            "Sign Up Berhasil!",
            "success"
          )
        </script>
     <?php } ?>

     <?php
      $message = $this->session->flashdata('message');
      if ($message == "error kosong"){
        ?>
        <script type="text/javascript">
          Swal.fire(
            "Erorr !",
            "Username dan Password kosong",
            "error"
          )
        </script>
     <?php } ?>
     
     <?php
      $message = $this->session->flashdata('message');
      if ($message == "error password"){
        ?>
        <script type="text/javascript">
          Swal.fire(
            "Erorr !",
            "Password kosong",
            "error"
          )
        </script>
     <?php } ?>
                <form action="<?= base_url()?>user/login" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="<?= base_url('admin/forgot_password'); ?>">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="<?= base_url('admin/register'); ?>" class="text-center">Don't have an account?</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/login/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/login/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets/login/dist/js/adminlte.min.js"></script>
</body>

</html>