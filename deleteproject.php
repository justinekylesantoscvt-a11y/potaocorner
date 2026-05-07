<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <div class="container">
        <?php $b = getBranchByID($pdo, $_GET['branch_id']); ?>
        <div class="form-section" style="border-left: 5px solid red;">
            <h1>Delete Branch: <?php echo $b['branch_name']; ?>?</h1>
            <form action="core/handleForms.php?branch_id=<?php echo $_GET['branch_id']; ?>&franchisee_id=<?php echo $_GET['franchisee_id']; ?>" method="POST">
                <input type="submit" name="deleteBranchBtn" value="Confirm Delete" style="background-color: red;">
                <a href="viewprojects.php?franchisee_id=<?php echo $_GET['franchisee_id']; ?>">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>