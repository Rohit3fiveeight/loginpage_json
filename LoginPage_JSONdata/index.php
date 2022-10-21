<?php
$email=$_POST['email'];
$password=$_POST['password'];
$con = mysqli_connect("localhost", "root", "","loginform" );
if($con->connect_error){
    die('Failed to connect:'.$con->connect_error);
}else{
    $stmt=$con->prepare("select * from loginform where email= ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data=$stmt_result->fetch_assoc();
        if($data['password']===$password){
            echo"<h3>login successfull</h3>";
        }else {
            echo"<h3>invalid email or password</h3>";
        }
    }else{
        echo"<h2> Invalid email or password</h2>";
    }
}
 
 ?>