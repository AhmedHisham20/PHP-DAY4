<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  
}
</style>
<body >

<!--  header   -->
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




<!-- body -->


    <div style="padding: 20px; height: 500px;" >
                 <h2>Registration Form</h2><hr>
                <h5>Please fill this form and submit to add user to database :</h5>
        <form action="<?php $_PHP_SELF ?>" method="post" >           
                Name : <br>
                <input type="text" name="name"> <br>
                Email : <br>
                <input type="text" value="" name="email"> <br>
                Gender : <br>
                 <input type="radio" name="gender" value="male">Male   <br>
                 <input type="radio" name="gender" value="female">Female <br>
                 <input  type="checkbox" name="agree">Receive Emails from US <br>
                 <input type="submit" name="submit">            
        </form>
    </div>

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

$name= $_POST['name'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$agree= $_POST['agree'];
$submit= $_POST['submit'];
// echo $name ."<br>";
// echo $email."<br>";
// echo $gender."<br>";
// echo $agree."<br>";
// echo $submit;
if( !empty($name) && !empty($email) && !empty($gender)  ) {
$sql = "INSERT INTO users  VALUES ('$name',
            '$email','$gender','$agree')";

 $retval = mysqli_query( $conn,$sql );
   
//    if(! $retval ) {
//       die('Could not insert to table: ' . mysqli_error($conn));
//    }
    
//    echo "<br>Data inserted to table successfully\n";
}

   mysqli_close($conn);








    

?>
</body>
</html>