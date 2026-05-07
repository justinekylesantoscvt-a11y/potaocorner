<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Potato Corner Franchise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Potato Corner Franchise Management</h1>
        <div class="form-section">
            <h3>Register New Franchisee</h3>
            <form action="core/handleForms.php" method="POST">
                <input type="text" name="fName" placeholder="First Name" required>
                <input type="text" name="lName" placeholder="Last Name" required>
                <input type="text" name="gender" placeholder="Gender" required>
                <input type="text" name="contact" placeholder="Contact Number" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="submit" name="insertFranchiseeBtn" value="Register">
            </form>
        </div>

        <table>
            <tr>
                <th>Name</th><th>Contact</th><th>Email</th><th>Actions</th>
            </tr>
            <?php $list = getAllFranchisees($pdo); foreach ($list as $row) { ?>
            <tr>
                <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                <td><?php echo $row['contact_number']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="viewprojects.php?franchisee_id=<?php echo $row['franchisee_id']; ?>">View Branches</a>
                    <a href="editwebdev.php?franchisee_id=<?php echo $row['franchisee_id']; ?>">Edit</a>
                    <a href="deletewebdev.php?franchisee_id=<?php echo $row['franchisee_id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>