<?php

function alterMemory($memory_id, $text, $isCoreMemory){
  $mysqli = databaseConnection();
  // Prepare the SQL statement with placeholders to prevent SQL injection
  $sql = "UPDATE memories SET text = ?, isCoreMemory = ? WHERE id = ?";
  
  // Prepare the statement
  if ($stmt = $mysqli->prepare($sql)) {
      // Bind the variables to the prepared statement as parameters
      $stmt->bind_param("sss", $text, $isCoreMemory, $memory_id);
      
      // Execute the query
      if($stmt->execute()){
        // Close statement
      $stmt->close();
          return "Success";
      } else {
        // Close statement
      $stmt->close();
          return "Error: " . $stmt->error;
      }
  } else {
      return "Error: " . $mysqli->error;
  }
}
