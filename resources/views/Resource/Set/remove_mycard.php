<?php

  $conn = new mysqli('localhost', 'root', 'root', 'cardcollection');

  $mycard_id=$_POST['mycard_id'];

  $sql="DELETE from my_cards WHERE id '.$mycard_id.'";
  if ($conn->query($sql) === TRUE) {
    echo "data inserted";
  } else {
    echo "failed";
  }
?>
