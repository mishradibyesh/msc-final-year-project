<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$symptoms=$_POST['symptoms'];
if(!empty($firstname) ||!empty($lastname)||!empty($country)||!empty($phone)||!empty($address)||!empty($symptoms)||!empty($email)){
$host="localhost";
$dbUsername="root"; 
$dbPassword="";
$dbname="details";
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
}
else{
    $SELECT="SELECT email from details where email=? limit 1 ";
    $INSERT="INSERT Into details (firstname, lastname, country,phone,address,email,symptoms
    ) values(?,?,?,?,?,?,?)";
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;
    if($rnum==0){
        $stmt->close();
        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param("sssisss",$firstname, $lastname,$country,$phone,$address,$email,$symptoms);
        $stmt->execute();
        echo"thanks!! your information is recorded";
    }
    else{
        echo"oh Snapp!!! email id already exist !! please insert another email id";
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