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
        $name=$_POST['names'];
        $email=$_POST['emails'];
        $comment=$_POST['comments'];
       
        $data = "INSERT INTO details(Name,Email,Comment)VALUES('$name','$email','$comment')";
        $rst=mysqli_query($conn,$data);
        if($rst){
            echo " <script> alert('successful');</script> ";
        }
       else{
        echo " <script> alert(' not successful');</script> ";
       }
     }
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submission and displaying result</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .form{
           background-color: yellow;
           padding-left: 40%;
           
        }
        .detail{
            background-color: yellowgreen;
            text-align: center;
        }
        textarea{
            resize: none;
        }
       
       
    </style>
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="names"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="emails"></td>
                </tr>
                <tr>
                    <td>Comment:</td>
                    <td><textarea name="comments" id="" cols="30" rows="10" autocorrect="true"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="sub"></td>
                    <td><input type="reset" ></td>
                </tr>
            </table>
        </form>
    </div>
<?php
 $sql="SELECT *FROM details";
 $res=mysqli_query($conn,$sql);
 if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){


 


?>


    <div class="detail">
        <h2><?php echo $row['Name']; ?></h2>
        <h3><?php echo $row['Email']; ?></h3>
        <p><?php echo $row['Comment']; ?></p>

    </div>
    <?php
    }
}
 }
    else{
       echo " <script> alert(' not connected');</script> ";
    }
    ?>
</body>
</html>
