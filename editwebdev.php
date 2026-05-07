<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Franchisee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php $f = getFranchiseeByID($pdo, $_GET['franchisee_id']); ?>
        <h1>Edit Franchisee: <?php echo $f['first_name']; ?></h1>
        <form action="core/handleForms.php?franchisee_id=<?php echo $_GET['franchisee_id']; ?>" method="POST">
            <p>First Name: <input type="text" name="fName" value="<?php echo $f['first_name']; ?>"></p>
            <p>Last Name: <input type="text" name="lName" value="<?php echo $f['last_name']; ?>"></p>
            <p>Gender: <input type="text" name="gender" value="<?php echo $f['gender']; ?>"></p>
            <p>Contact: <input type="text" name="contact" value="<?php echo $f['contact_number']; ?>"></p>
            <p>Email: <input type="email" name="email" value="<?php echo $f['email']; ?>"></p>
            <input type="submit" name="editFranchiseeBtn" value="Update Franchisee">
            <a href="index.php">Cancel</a>
        </form>
    </div>
</body>
</html>