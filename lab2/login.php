<!DOCTYPE html>
<html lang="en">
<?php
    include('func.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>FeIte</title>
</head>
<body>
    
        <div class="row">
            <div class="col-xl-4">
                <div class="box">
                    <img src="http://www.fe.rupp.edu.kh/static/media/logo-fe.c04ca1d6.svg" alt="">
                    <h1>Join Us</h1>
                    <div>
                        <span>
                            Being a student is easy. learning <br>
                            require actual work.
                        </span>
                    </div>
                    <div class="sub-box">
                        <div class="row">
                            <div class="col">
                               <i class="fa-solid fa-code"></i>
                                <span>IT Engineering</span>
                            </div>
                            <div class="col">
                                <span>Privacy Terms</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <form action="" method="post" class="box2">
                    <div class="title-box">
                        <h1>Hello M2</h1>
                        <span>Login to your account</span>
                    </div>
                    <div class="login-form">
                        <label for="">Username</label>
                        <input type="text" placeholder="Your username" name="txt-username" id="txt-username" class="frm-control">
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="txt-pw" id="txt-ps" class="frm-control">
                    </div>
                    <div class="keep-user">
                        <input type="checkbox" name="txt-checkbox" id="txt-checkbox">
                        <label for="">Keep me login</label>
                        <input type="button" value="forgot password?" id="btn-forgotPW" name="btn-forgotPW">
                    </div>
                    <div class="login-form">
                        <input type="submit" value="Sign In" class="frm-control" id="btn-submit" name="btn-submit">
                    </div>
                    <div class="not-user">
                        <span>Don't have an account yet?</span>
                        <input type="button" value="Register" id="btn-register" name="btn-register">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>