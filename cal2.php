<?php

$DB_servername="localhost";
 $DB_username="root";
 $DB_password="";
 $DB_Name="test";

 $connection=mysqli_connect($DB_servername,$DB_username,$DB_password,$DB_Name);
 if(!$connection){
     die("Failed".mysqli_connect_error());
 } 

function fetch_data($connection){
 
  $query="SELECT * from calculator ";
  $exec=mysqli_query($connection, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data($connection);
show_data($fetchData);

function show_data($fetchData){
 echo '<table border="1">
        <tr>
            <th>store</th>
            <th>result</th>
            
        </tr>';

 if(count($fetchData)>0){
    
      foreach($fetchData as $data){ 

  echo "<tr>
          
          <td>".$data['store']."</td>
          <td>".$data['result']."</td>
        
   </tr>";

     }
}else{
     
}
  echo "</table>";
}

?>