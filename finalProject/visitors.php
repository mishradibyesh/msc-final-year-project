<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

$email=$_POST['email'];
if(!empty($firstname) ||!empty($lastname)||!empty($email)){
$host="localhost";
$dbUsername="root"; 
$dbPassword="";
$dbname="visitors";
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
}
else{
    $SELECT="SELECT email from visitors where email=? limit 1 ";
    $INSERT="INSERT Into visitors (firstname, lastname, email
    ) values(?,?,?)";
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;
    if($rnum==0){
        $stmt->close();
        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param("sss",$firstname, $lastname,$email);
        $stmt->execute();
        echo"thanks!! your information is recorded";
    }
    else{
        echo"oh Snapp!!! email id already exist !! please insert another email id";
        echo"To return to home page please click back button ";

    }
    $stmt->close();
    $conn->close();
}
}
else{
    echo"all fields are required";
    die(); 
}
?>