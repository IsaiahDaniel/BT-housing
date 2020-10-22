<?php

  $db = mysqli_connect('localhost', 'root', '', 'bt_housing');

  if (!$db) {
    echo 'Not connected' . mysqli_connect_error();
  }