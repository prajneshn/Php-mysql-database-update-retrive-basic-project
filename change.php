<?php
$server="localhost";
$username="prajnesh";
$password="Praj@1234";
$database="intern";
$conn=Mysqli_connect($server,$username,$password,$database);
if($conn){
    // echo" <script>alert('connected');</script>";
  if(isset($_POST['subm'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpassw=$_POST['cpass'];
    if($pass==$cpassw){
        $data="UPDATE form6 SET password='$pass' WHERE Email='$email'";
        $res=mysqli_query($conn,$data);
        if($res){
            echo" <script>alert('succesful updated');</script>";
        }else{
            echo" <script>alert('error');</script>";
        }

        // echo" <script>alert('success');</script>";
    }
    else{
        echo" <script>alert('password wrong');</script>";
    }

  }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        .form{
            background-color: yellow;
            text-align: center;
            height: 20vh;
            width: 30vw;
            margin: auto;
            margin-top: 15%;
            padding-top: 20px;
        }
        td{
            height: 10px;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>New Password:</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="text" name="cpass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="subm">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"></td>
                
                </tr>

            </table>
        </form>
    </div>
</body>
</html>