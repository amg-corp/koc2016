<?php
if( $_POST )
{
  $con = mysql_connect("localhost","inmoti6_myuser","mypassword");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("inmoti6_mysite", $con);

  $users_name = $_POST['Name'];
  $users_role = $_POST['Role'];
  $users_PostalAddress = $_POST['PostalAddress'];
  $users_mobile = $_POST['mobile'];
  $users_Email = $_POST['Email'];
  $users_role = $_POST['Role'];
  $users_PostalAddress = $_POST['PostalAddress'];
  $users_comment = $_POST['comment'];

  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_role);
  $users_website = mysql_real_escape_string($users_PostalAddress);
  $users_comment = mysql_real_escape_string($users_comment);
  $sql = "
  INSERT INTO `inmoti6_mysite`.`comments` (`name`, `role`, `PostalAddress`,
        `mobile`, `Email`, `articleid`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP, '$articleid');";

//  mysql_query($sql);
  
  if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>