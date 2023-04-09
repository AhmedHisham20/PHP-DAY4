<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Details</title>
</head>
<style>
    /* header  */
.n ul li {
    display: inline;
    padding: 25px;
}

.n ul {
    background-color: rgb(6, 10, 32);
    padding: 25px;
    margin: auto;    
}
.logo {
    width: 180px;
    height: 75px;
    position: absolute;
    right: 0;   
    border: 1px black solid ;
}
.li:hover {
    background-color: rgb(238, 94, 11);
}
.li {
    text-decoration: none;
    color: aliceblue;
    padding: 20px;
    margin: auto;
    font-size: 22px;    
}


/* body */
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
<body>
    <!-- header  -->
<div class="">
        <img class="logo" src="./ITI_logo.png" alt="ITI_logo">    
    </div>
    <div class="n">
             <ul>
                <li> <a class="li" href="./index2.php" >Users Details</a></li>
                <li> <a class="li" href="./index1.php">Registration Form</a> </li>
                <li> <a class="li" href="https://www.iti.gov.eg/iti/home">Contact</a> </li>
             </ul>
    </div>
    <br>
    <!-- body  -->

<?php 
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='day 4';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
//    if(! $conn ) {
//       die('Could not connect: ' . mysqli_error($conn));
//    }
   
//    echo 'Connected successfully';


   $sql = "SELECT * FROM users";


   $result = mysqli_query($conn,$sql );
   
//    if(! $result ) {
//       die('Could not get data: ' . mysqli_error($conn));
//    }


   if (mysqli_num_rows($result) > 0) {
     echo "<table id='customers'>";
     echo "<thead >";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Gender</th>";
    echo "<th>Mail status</th>";
    echo "</thead>";
     while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td> {$row['Name']}  </td> ";
        echo"<td>  {$row['Email']} </td> ";
        echo"<td>  {$row['Gender']} </td> ";
        echo"<td>  {$row['Mail status']} </td> ";
        echo "</tr >";
     }
     echo "</table>";

   } else {
     echo "0 results";
   }


   mysqli_close($conn);









?>




    
</body>
</html>