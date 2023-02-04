<?php include 'database/db_connect.php'; ?>

<?php
if (isset($_GET['delete'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM `expenses`  WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo 'query error ';
    }
};
