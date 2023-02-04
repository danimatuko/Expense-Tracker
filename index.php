<?php include_once 'database/create.php' ?>
<?php include 'templates/header.php'; ?>


<?php if (!empty($_SESSION['errors'])) {
    $errors =   $_SESSION['errors'];
}
?>


<?php
$sql = 'SELECT  * FROM expenses';

$result = mysqli_query($conn, $sql);
$expenses = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>



<div class="row justify-content-around">
    <!-- Expenses-Form -->
    <div class="col-3">
        <h2 class="my-4  h4">Add new expense</h2>
        <hr>
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

            <button type="submit" name="submit" class="btn btn-dark w-100">Submit</button>
        </form>
    </div>
    <!-- Expenses-List -->
    <div class="col-4">
        <h2 class="my-4 h4">History</h2>
        <div class="expenses my-4">
            <?php foreach ($expenses as $exspense) : ?>
                <div class="shadow p-3 mb-2 bg-body-tertiary d-flex justify-content-between  border-end border-5 border-success">
                    <span><?php echo $exspense['title']; ?></span>
                    <span><?php echo  "$" .  $exspense['amount']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>





</div>
<?php include  "templates/footer.php" ?>