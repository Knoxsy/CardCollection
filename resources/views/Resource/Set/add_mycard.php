<?php

  $conn = new mysqli('localhost', 'root', 'root', 'cardcollection');

  $userid = $_POST['user_id'];
  $cardid = $_POST['card_id'];

  $sql="INSERT INTO my_cards ('id', 'user_id', 'card_id') VALUES (NULL, '$userid', '$cardid')";
  if ($conn->query($sql) === TRUE) {
    echo "data inserted";
  } else {
    echo "failed";
  }
?>
