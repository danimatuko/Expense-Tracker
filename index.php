<?php include
    'expenses.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'templates/header.php';
?>


<form method="POST" action="add.php">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" aria-describedby="title">
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="text" class="form-control" name="amount" aria-describedby="amount">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>





</div>
</body>

</html>