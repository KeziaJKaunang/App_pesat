<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST ["username"];
   $password = $_POST ["password"];

   $sql = "SELECT id, username, password FORM users WHERE username = '$username";
   $result = $conn->query($sql);

   if($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      if(password_verify($password, $row["password"])) {
        $_SESSION["id"] = $row["id"];
        $_SESSION[username] = $row["username"];
        $conn->close();
        



}
