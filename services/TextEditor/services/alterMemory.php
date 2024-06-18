<?php

function alterMemory($memory_id, $text, $isCoreMemory){
  $mysqli = databaseConnection();
  $sql = "UPDATE memories SET text = ?, isCoreMemory = ? WHERE id = ?";
  
  if ($stmt = $mysqli->prepare($sql)) {
      $stmt->bind_param("sss", $text, $isCoreMemory, $memory_id);
      
      if($stmt->execute()){
      $stmt->close();
          return "Success";
      } else {
      $stmt->close();
          return "Error: " . $stmt->error;
      }
  } else {
      return "Error: " . $mysqli->error;
  }
}
