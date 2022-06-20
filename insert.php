<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "msolwa");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
if(isset($_POST['sbutton']))
{    
     $first_name = $_POST['firstname'];
     $last_name = $_POST['lastname'];
     $surname = $_POST['surname'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $contacts = $_POST['contacts'];
     $email = $_POST['email'];
     $pnumber = $_POST['pnumber'];
     $instagram = $_POST['instagram'];
     $facebook = $_POST['fbook'];
     $twitter = $_POST['twitter'];
     
     $sql = "INSERT INTO users (firstname,lastname,surname,username,password,contacts,email,pnumber,instagram,facebook,twitter)
     VALUES ('$first_name','$last_name','$surname','$username','$password','$contacts','$email','$pnumber','$instagram','$facebook',
        '$twitter')";
     if (mysqli_query($link, $sql)) {
        echo "New record created successfully !";
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($link);
     }
     mysqli_close($link);
}

?>

