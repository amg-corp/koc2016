<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "koc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  $users_name = $_POST['Name'];
  $users_role = $_POST['Role'];
  $users_PostalAddress = $_POST['PostalAddress'];
  $users_mobile = $_POST['mobile'];
  $users_Email = $_POST['Email'];
  $users_checkboxes = $_POST['checkboxes'];
  $users_DiateryRequirement = $_POST['DiateryRequirement'];

 
 
  $sql = "
  INSERT INTO `koc`.`reg` (`name`, `role`, `PostalAddress`,
        `mobile`, `Email`, `checkboxes`, `DiateryRequirement`) VALUES ('$users_name','$users_role',
            '$users_PostalAddress','$users_mobile','$users_Email', '$users_checkboxes', '$users_DiateryRequirement');";

//  mysql_query($sql);
 if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>