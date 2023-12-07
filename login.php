<?php
include ('connection.php');
if(isset($_POST['email']) && isset($_POST['pass'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="SELECT `email`,`password` FROM `login`";
    $result=mysqli_query($conn, $sql);
    $na[0]="";
    $pa[0]='';
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
        $na[]=$row['email'];
        $pa[]=$row['password'];
        }
        if(in_array($email,$na)){
            if(in_array($pass,$pa)){
                echo "Login Successfully";
            }else{
                echo "Enter the correct Password";
            }
        }else{
            echo "Enter the correct Email";
        }
    }else{
        echo "register";
    }
}
?>