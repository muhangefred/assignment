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
     $fullname = $_POST['fullnames'];
     $enrollment = $_POST['yoe'];
     $graduation = $_POST['yog'];
     $headenroll = $_POST['master'];
     $headgraduu = $_POST['master2'];
     $fathergraduu = $_POST['teacher'];
     $div = $_POST['division'];
     $occupy = $_POST['fred'];
     $location = $_POST['add'];
     $ladress = $_POST['address2'];
     $number = $_POST['phone'];
    
    
     
     $sql = "INSERT INTO king (fname,yenrolment,ygraduation,henrolment,hgraduation,fgraduation,division,occupation,address,email,pnumber)
     VALUES ('$fullname','$enrollment','$graduation','$headenroll','$headgraduu','$fathergraduu','$div','$occupy','$location','$ladress','$number')";
     if (mysqli_query($link, $sql)) {
        echo "New record created successfully !";
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($link);
     }
     mysqli_close($link);
}

?>

