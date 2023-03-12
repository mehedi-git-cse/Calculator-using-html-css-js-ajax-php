<?php 
$val1  =$_POST['data1'];
$val2 =$_POST['result'];
echo $val1;
echo $val2;

 $DB_servername="localhost";
 $DB_username="root";
 $DB_password="";
 $DB_Name="test";

 $connection=mysqli_connect($DB_servername,$DB_username,$DB_password,$DB_Name);
 if(!$connection){
     die("Failed".mysqli_connect_error());
 } 
 if(isset($val1,$val2)){
    //$query1="INSERT INTO calculator ('store','result') VALUES ($val1,$val2)";
    $query1="INSERT INTO `calculator`(`store`, `result`) VALUES ('$val1',$val2)";
    if(mysqli_query($connection,$query1))
    echo "successfull";

 }

?>
