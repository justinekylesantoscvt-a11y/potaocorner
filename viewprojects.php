<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Branches</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="index.php">← Back to Franchisees</a>
        <?php $f = getFranchiseeByID($pdo, $_GET['franchisee_id']); ?>
        <h1>Franchisee: <?php echo $f['first_name'] . " " . $f['last_name']; ?></h1>

        <div class="form-section">
            <h3>Add New Branch</h3>
            <form action="core/handleForms.php?franchisee_id=<?php echo $_GET['franchisee_id']; ?>" method="POST">
                <input type="text" name="branchName" placeholder="Branch Name (e.g. SM North)" required>
                <input type="text" name="location" placeholder="Full Location" required>
                <input type="submit" name="insertBranchBtn" value="Add Branch">
            </form>
        </div>

        <table>
            <tr>
                <th>ID</th><th>Branch Name</th><th>Location</th><th>Actions</th>
            </tr>
            <?php $branches = getBranchesByFranchisee($pdo, $_GET['franchisee_id']); foreach ($branches as $b) { ?>
            <tr>
                <td><?php echo $b['branch_id']; ?></td>
                <td><?php echo $b['branch_name']; ?></td>
                <td><?php echo $b['location']; ?></td>
                <td>
                    <a href="editproject.php?branch_id=<?php echo $b['branch_id']; ?>&franchisee_id=<?php echo $_GET['franchisee_id']; ?>">Edit</a>
                    <a href="deleteproject.php?branch_id=<?php echo $b['branch_id']; ?>&franchisee_id=<?php echo $_GET['franchisee_id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>