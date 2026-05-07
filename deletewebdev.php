<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <div class="container">
        <?php $f = getFranchiseeByID($pdo, $_GET['franchisee_id']); ?>
        <div class="form-section" style="border-left: 5px solid red;">
            <h1>Delete Franchisee: <?php echo $f['first_name'] . " " . $f['last_name']; ?>?</h1>
            <p>Warning: This will also delete all their branches.</p>
            <form action="core/handleForms.php?franchisee_id=<?php echo $_GET['franchisee_id']; ?>" method="POST">
                <input type="submit" name="deleteFranchiseeBtn" value="Confirm Delete" style="background-color: red;">
                <a href="index.php">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>