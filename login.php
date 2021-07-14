<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="admin/css/feather.css">
    <link rel="stylesheet" type="text/css" href="admin/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="admin/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/pages.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body style="background-color: #e1e5e9;">
    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" method="post" action="cek_login.php">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-15">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">LOGIN</h3>
                                        <h4 class="text-center txt-primary mt-3">TI2018 UMSORONG</h4>
                                        <hr style="color:blue;">
                                        <?php if(isset($_GET["pesan"])):
                                            if($_GET["pesan"] == "salah"): ?>
                                                <div>
                                                    //jika code captcha salah maka akan kembali ke halaman sebelumnya
                                                    echo "<script>alert('email atau password yang anda masukkan salah');window.history.go(-1);</script>";
                                                </div>
                                                <?php
                                            endif;
                                        endif; ?>
                                        <?php if(isset($_GET["pesan"])):
                                            if($_GET["pesan"] == "chaptca"): ?>
                                                <div>
                                                    //jika code captcha salah maka akan kembali ke halaman sebelumnya
                                                    echo "<script>alert('captcha yang anda masukkan salah');window.history.go(-1);</script>";
                                                </div>
                                                <?php
                                            endif;
                                        endif; ?>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="form-group" style="text-align:center;">
                                <center>
                                    <div class="g-recaptcha text-center" data-sitekey="6LfZl4EbAAAAAGurG_NsiIxtPNPK4Jjq_ZuR3jM2"></div>
                                </center>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="login" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small text-center mt-5 text-secondary"> Copyright &copy; <a href="index.php" class="text-secondary"><a href="https://ti18umsorong.com/">IT18UMSORONG.COM</a> 2021</div>
                    </form>

                </div>

            </div>

        </div>

        </div>

    </section>



    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="admin/js/jquery.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="admin/js/jquery-ui.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="admin/js/popper.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="admin/js/bootstrap.min.js"></script>

    <script src="admin/js/waves.min.js" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>

    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="admin/js/jquery.slimscroll.js"></script>

    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="admin/js/modernizr.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="admin/js/css-scrollbars.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="admin/js/common-pages.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="admin/js/rocket-loader.min.js" data-cf-settings="4878d7dfa7bc22a8dfa99416-|49" defer=""></script>
</body>

</html>
