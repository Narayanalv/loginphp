<?php
include ('connection.php');
$confirm="hidden";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword']) && isset($_POST['address']) && isset($_POST['number'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $add=$_POST['address'];
    $no=$_POST['number'];
    if($pass==$cpass){
        $sql="INSERT INTO `login`(`name`, `email`, `password`, `address`, `phone`) VALUES ('$name','$email','$pass','$add','$no')";
        mysqli_query($conn, $sql);
    }elseif($cpass!=$pass){
        $confirm="visible";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        *{font-size: 20px;}
        .login{width: 40%;height: 100%;display: block;border-radius: 20px;border: 5px black;position: relative;background-color: yellow;margin-top: 5%;box-shadow: 2px 2px 5px;}
        #show{font-size: 15px;cursor: pointer;}
        #miss{visibility: <?php echo $confirm; ?>;color:red;}
        @media screen and (max-width:1200px) {
            input{width: 70%;height: auto;}
            #blogin{width: 20%;height: auto;}
            #show{font-size: 10px;}
        }
    </style>
</head>
<body>
    <center>
        <div class="login">
            Register <br><br>
            <form action="" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required><br><br>
            <input type="email" name="email" id="email" placeholder="Enter Your email" required><br><br>
            <input type="password" name="password" id="pass" placeholder="Enter Your password" required><br>
            <p id="miss"></p>
            <input type="password" name="cpassword" id="cpass" placeholder="Confirm Your password" required><br>
            <input type="checkbox" name="" id="check" title="Show Password"><span id="show">Show Password</span>
            <br><br>
            <input type="text" name="address" id="add" placeholder="Enter Your Address" required><br><br>
            <input type="number" name="number" id="no" placeholder="Enter Your number" required><br><br>
            <input type="submit" value="Register" id="reg"><input type="submit" value="Login" id="blogin">
            </form>
            <br><p></p>
        </div>
    </center>
    <script>
        let reg=document.getElementById('reg');
        let miss=document.getElementById('miss');
        let name=document.getElementById('name').value;
        let email=document.getElementById('email').value;
        let pass=document.getElementById('pass').pass;
        let cpass=document.getElementById('cpass').cpass;
        let add=document.getElementById('add').value;
        let no=document.getElementById('no').value;
        const blogin=document.getElementById('blogin');
        blogin.addEventListener('click',()=>{
            window.location.href="index.html"
        })
    </script>
</body>
</html>