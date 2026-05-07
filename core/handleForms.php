<?php
require_once 'dbConfig.php';
require_once 'models.php';

/* --- FRANCHISEE HANDLERS --- */
if (isset($_POST['insertFranchiseeBtn'])) {
    if (insertFranchisee($pdo, $_POST['fName'], $_POST['lName'], $_POST['gender'], $_POST['contact'], $_POST['email'])) {
        header("Location: ../index.php");
        exit();
    }
}

if (isset($_POST['editFranchiseeBtn'])) {
    if (updateFranchisee($pdo, $_POST['fName'], $_POST['lName'], $_POST['gender'], $_POST['contact'], $_POST['email'], $_GET['franchisee_id'])) {
        header("Location: ../index.php");
        exit();
    }
}

if (isset($_POST['deleteFranchiseeBtn'])) {
    if (deleteFranchisee($pdo, $_GET['franchisee_id'])) {
        header("Location: ../index.php");
        exit();
    }
}

/* --- BRANCH HANDLERS --- */
if (isset($_POST['insertBranchBtn'])) {
    if (insertBranch($pdo, $_POST['branchName'], $_POST['location'], $_GET['franchisee_id'])) {
        header("Location: ../viewprojects.php?franchisee_id=" . $_GET['franchisee_id']);
        exit();
    }
}

if (isset($_POST['editBranchBtn'])) {
    if (updateBranch($pdo, $_POST['branchName'], $_POST['location'], $_GET['branch_id'])) {
        header("Location: ../viewprojects.php?franchisee_id=" . $_GET['franchisee_id']);
        exit();
    }
}

if (isset($_POST['deleteBranchBtn'])) {
    if (deleteBranch($pdo, $_GET['branch_id'])) {
        header("Location: ../viewprojects.php?franchisee_id=" . $_GET['franchisee_id']);
        exit();
    }
}
?>