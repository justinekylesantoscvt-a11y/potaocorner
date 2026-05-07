<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Branch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php $b = getBranchByID($pdo, $_GET['branch_id']); ?>
        <h1>Edit Branch</h1>
        <form action="core/handleForms.php?branch_id=<?php echo $_GET['branch_id']; ?>&franchisee_id=<?php echo $_GET['franchisee_id']; ?>" method="POST">
            <p>Branch Name: <input type="text" name="branchName" value="<?php echo $b['branch_name']; ?>"></p>
            <p>Location: <input type="text" name="location" value="<?php echo $b['location']; ?>"></p>
            <input type="submit" name="editBranchBtn" value="Update Branch">
            <a href="viewprojects.php?franchisee_id=<?php echo $_GET['franchisee_id']; ?>">Cancel</a>
        </form>
    </div>
</body>
</html>