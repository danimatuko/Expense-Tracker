<?php include 'templates/header.php'; ?>



<?php if (!empty($_SESSION['errors'])) {
    //display the message however you want
    $errors =   $_SESSION['errors'];
}
?>


<form method="POST" action="add.php" novalidate class="needs-validation">
    <div class="mb-3">
        <label for="title" class="form-label text-pink">Title</label>
        <input type="text" class="form-control  <?php echo !$errors['title'] ?: 'is-invalid';  ?>" name="title" aria-describedby="title">
        <div class="invalid-feedback">
            <?php echo $errors['title']; ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="text" class="form-control <?php echo !$errors['amount'] ?: 'is-invalid';  ?>" name="amount" aria-describedby="amount">
        <div class="invalid-feedback">
            <?php echo $errors['amount']; ?>
        </div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</body>

</html>