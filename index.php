<?php include
    'expenses.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'templates/header.php';
?>


<form method="GET" action="/add"> 
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" aria-describedby="description">
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="text" class="form-control" id="amount" aria-describedby="amount">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>





</div>
</body>

</html>