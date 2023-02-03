<?php include 'templates/header.php'; ?>

<?php
$errors = array("title" => null, "amount" => null);

if (isset($_POST['submit'])) {

    if (empty($_POST['title'])) {
        $errors['title'] = "Title is required, please try again";
    }

    if (empty($_POST['amount'])) {
        echo "Amount is required";
        $errors['amount'] = "Amount is required, please try again";
    }

    $_SESSION['errors'] = $errors;

    header("location:index.php");
}
// INSERT INTO `expenses` (`id`, `title`, `amount`, `create_at`) VALUES ('1', 'Gas', '800', current_timestamp());
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