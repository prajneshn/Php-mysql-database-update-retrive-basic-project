<?php

$server="localhost";
$username="prajnesh";
$password="Praj@1234";
$database="intern";
 $conn=Mysqli_connect($server,$username,$password,$database);
 if($conn){
     echo " <script> alert('connected');</script> ";
     if(isset($_POST['sub']))
     {
        $name=$_POST['inp1'];
        $email=$_POST['inp2'];
        $gender=$_POST['r1'];
        $address=$_POST['add'];
        $numb=$_POST['num'];
        $data = "INSERT INTO form6(Name,Email,Gender,Number,Address)VALUES('$name','$email','$gender','$numb','$address')";
        $rst=mysqli_query($conn,$data);
        if($rst){
            echo " <script> alert('successful');</script> ";
        }
        //  echo " <script> alert('submitted');</script> ";
     }
 }
 else{
    echo " <script> alert(' not connected');</script> ";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form submission</title>
</head>
<style>
    .form1{
        width: 50vw;
        height: 70vh;
        background-color: green;
        margin: auto;
    }
    .fm{
        padding-left: 100px;
        padding-top: 100px;
    }
</style>
<body>
    <div class="form1">
        <div class="fm">
    <form action="" method="POST">
        <table>
        <tr>
        <td>Name:</td>
        <td><input type="text" name="inp1"></td>
        </tr>
        <tr>
        <td>Email:</td>
        <td><input type="text" name="inp2"></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>Male:<input type="radio" name="r1" value="male"/></td>
          <td>female:<input type="radio" name="r1" value="female"/></td>
        </tr>
        <tr>
            <td>Mob:</td>
            <td><input type="number" name="num"> </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="add" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="sub"></td>
            <td><input type="reset"  name="res"></td>
        </tr>
    </table>
</form>
</div>
</div>

</body>
</html>