<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php

    // connection whit dabase
    $con = new mysqli('','root','','userinfo');
    session_start();

    // register
    function signIn(){
        global $con;
        if(isset($_POST['btn-submit'])){
            $username = $_POST['txt-username'];
            $password = $_POST['txt-pw'];
            if(!empty($username) && !empty($password)){
                $sql = "
                    SELECT `id` FROM `tbl_user` WHERE `username` = '$username' AND (`password`='$password')
                ";
                $res = $con->query($sql);
                $row = mysqli_fetch_assoc($res);
                if(!empty($row)){
                    $_SESSION['user']=$row['id'];
                    header('location:wellcom.php');
                }else{
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Has been not signin . . .",
                                    text: "something went wrong . . . !",
                                    icon: "error",
                                    button: "Try again!",
                                });
                            })
                        </script>
                    ';
                }
           }   
        }
    }  
    signIn();

?>