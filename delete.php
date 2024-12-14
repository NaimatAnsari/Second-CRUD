<?php
include 'db.php';

$userid = $_GET['userid'];

$sql = "DELETE FROM `users` WHERE id = $userid";

$result = mysqli_query($conn , $sql);

if ($result) {
    header('Location: index.php?sg=Record Deleted Successfully');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




?>