<?php

require('db.php');
  
  // SQL QUERY
  $query = "SELECT id, username, email  FROM `users`;";
  // FETCHING DATA FROM DATABASE
  $result = mysqli_query($con, $query);
  
  if (mysqli_num_rows($result) > 0) {
      // OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)) {
          echo "ID: " . $row["id"]
          . " - Username: " . $row["username"]
          . " - Email: " . $row["email"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  
  $con->close();
  
?>