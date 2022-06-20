<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname="msolwa";

//create connection
$conn= new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
	
}
$sql = "SELECT * FROM alumni";
$result = $conn->query($sql>

if($result->num_rows > 0){
	echo "<table> <tr> <th>ID</th>
	                   <th>fullname</th>
	                   <th>Year_of_enrolment</th>
                       <th>Year_of_graduu</th>
					   <th>Head_enrolment</th>
					   <th>Head_graduu</th>
					   <th>Famous_teacher</th>
					   <th>Division</th>
					   <th>Occupation</th>
					   <th>Address</th>
					   <th>Email</th>
					   <th>Phone_number</th>
					</tr>
            // output data each row
while($row = $result->fetch_assoc()){	
                   echo"<tr>
                   <td>'.$row["id"]."</td>
				   <td>'.$row["fname"]."</td>
				   <td>'.$row["yenrolment"]."</td>
				   <td>'.$row["ygraduation"]."</td>
				   <td>'.$row["henrolment"]."</td>
				   <td>'.$row["hgraduation"]."</td>
				   <td>'.$row["fgraduation"]."</td>
				   <td>'.$row["division"]."</td>
				   <td>'.$row["occupation"]."</td>
				   <td>'.$row["address"]."</td>
				   <td>'.$row["emai"]."</td>
				   <td>'.$row["pnumber"]."</td>
				   </tr>
}
echo "</table>";
} else {
   echo "0 results";
}
$conn->close();
?>   