<?php
$conn = new mysqli("localhost", "root", "", "exam_app");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
