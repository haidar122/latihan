<?php

$conn = new mysqli("jongkreatif.com", "u5250287_oamaker", "oamaker1234", "u5250287_oamaker");

// Check Connection
if ($conn->connect_errno) {
  echo "Gagal menyambungkan ke MYSQL" . $conn->connect_errno;
  exit();
}
