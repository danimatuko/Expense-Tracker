<?php include 'templates/header.php'; ?>
<?php include 'database/db_connect.php'; ?>

<?php
$errors = array("title" => null, "amount" => null);

if (isset($_POST['submit'])) {

    if (empty($_POST['title'])) {
        $errors['title'] = "Title is required, please try again";
    }

    if (empty($_POST['amount'])) {
        echo "Amount is required";
        $errors['amount'] = "Amount is required, please try again";
    } else {
        $is_positive =  $_POST['amount'][0] === '-' ? 0 : 1;
    }

    $_SESSION['errors'] = $errors;

    if ($errors) {
        $sql = "INSERT INTO expenses (title, amount,is_positive) VALUES ('$_POST[title]' ,'$_POST[amount]','$is_positive')";
        if (!mysqli_query($conn, $sql)) {
            die('query error ' . mysqli_error($conn));
        }
        header("location:index.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

</body>

</html>