
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
    <link rel="stylesheet" href="style/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <title>FeIte</title>
</head>
<body>
   <div class="container-fluid">
      <div class="row">
         <div class="box">
            <img src="img/logo.jpg" alt="">
         </div>
      </div>
      <div class="row">
        <div class="col-xl-6">
            <div class="box2">
                <img src="img/department.jpg" alt="">
            </div>
        </div>
        <div class="col-xl-6">
            <div class="box3">
                <?php
                    $user_id = $_SESSION['user'];
                    $sql = "SELECT * FROM tbl_user WHERE id = '$user_id'";
                    $res = $con->query($sql);
                    $row = mysqli_fetch_assoc($res);
                ?>
                <h2>Wellcom <?php echo $row['username']?></h2>
                <div>
                    <span>
                        Bachelor of Information Technology Engineering
                        (ITE) program at Faculty of Engineering, Royal University of 
                        Phnom Penh  is design to provide high quality training Information
                        technology which meets the current and future labor market 
                        requirements by emphasizing a broad foundation of computer 
                        organizatio, software, and mathematics both theoretical and
                        practical aspects.
                    </span>
                </div>
                <div id="txt-research">Research:</div>
                <ul>
                    <li><i class="fa-brands fa-kickstarter"></i>Artical Intelligence</li>
                    <li><i class="fa-brands fa-kickstarter"></i>Data Mining</li>
                    <li><i class="fa-brands fa-kickstarter"></i>Image Processing and Analysis</li>
                </ul>
                <input type="button" value="Get Started" id="btn-getstarted" name="btn-getstarted">
            </div>
        </div>
      </div>
   </div>
</body>
</html>