<?php

  $conn = new mysqli('localhost', 'root', 'root', 'cardcollection');

  $userid = $_POST['user_id'];//not sure how to get the user_id
  $cardid = $_POST['check'];//grabs the value from checboxes named check and provides the value

  $sql="INSERT INTO my_cards (user_id', 'card_id') VALUES ('$userid', '$cardid')";
  if ($conn->query($sql) === TRUE) {
    echo "data inserted";
  } else {
    echo "failed";
  }
?>
