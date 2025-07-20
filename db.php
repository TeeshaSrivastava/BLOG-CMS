<?php
$conn = new mysqli("localhost", "root", "", "blogcms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>