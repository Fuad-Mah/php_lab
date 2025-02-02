<?php
    include("connection.php");
?>

<?php
  session_start();
      $fn=$_POST['fn'];
      $email=$_POST['email'];
      $pass1=$_POST['pw1'];
      $pass2=$_POST['pw2'];
       if(!empty($fn)&& !empty($email) &&!empty($pw1) &&!empty($pw2));{
        if($pass1==$pass2){
            $pass=$pass2;
            $_SESSION['fullname']=$fn;
            $_SESSION['email']=$email;
            $_SESSION['password']=$pass;
            echo"full name:".$fn;
            echo"<br>";
            echo"email:".$email;
        }
        else{
            ?>
            <script>
                alert('password dont match pls try again');
                window.location.href='../register.html';
            </script>   
            <?php
        }
       }
?>