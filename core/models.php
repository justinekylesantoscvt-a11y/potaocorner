<?php 
require_once 'dbConfig.php';

/* --- FRANCHISEE FUNCTIONS --- */
function getAllFranchisees($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM franchisees ORDER BY date_joined DESC");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getFranchiseeByID($pdo, $franchisee_id) {
    $stmt = $pdo->prepare("SELECT * FROM franchisees WHERE franchisee_id = ?");
    $stmt->execute([$franchisee_id]);
    return $stmt->fetch();
}

function insertFranchisee($pdo, $fName, $lName, $gender, $contact, $email) {
    $sql = "INSERT INTO franchisees (first_name, last_name, gender, contact_number, email) VALUES (?,?,?,?,?)";
    return $pdo->prepare($sql)->execute([$fName, $lName, $gender, $contact, $email]);
}

function updateFranchisee($pdo, $fName, $lName, $gender, $contact, $email, $franchisee_id) {
    $sql = "UPDATE franchisees SET first_name=?, last_name=?, gender=?, contact_number=?, email=? WHERE franchisee_id=?";
    return $pdo->prepare($sql)->execute([$fName, $lName, $gender, $contact, $email, $franchisee_id]);
}

function deleteFranchisee($pdo, $franchisee_id) {
    return $pdo->prepare("DELETE FROM franchisees WHERE franchisee_id = ?")->execute([$franchisee_id]);
}

/* --- BRANCH FUNCTIONS --- */
function getBranchesByFranchisee($pdo, $franchisee_id) {
    $stmt = $pdo->prepare("SELECT * FROM branches WHERE franchisee_id = ?");
    $stmt->execute([$franchisee_id]);
    return $stmt->fetchAll();
}

function getBranchByID($pdo, $branch_id) {
    $stmt = $pdo->prepare("SELECT * FROM branches WHERE branch_id = ?");
    $stmt->execute([$branch_id]);
    return $stmt->fetch();
}

function insertBranch($pdo, $name, $loc, $franchisee_id) {
    $sql = "INSERT INTO branches (branch_name, location, franchisee_id) VALUES (?,?,?)";
    return $pdo->prepare($sql)->execute([$name, $loc, $franchisee_id]);
}

function updateBranch($pdo, $name, $loc, $branch_id) {
    $sql = "UPDATE branches SET branch_name = ?, location = ? WHERE branch_id = ?";
    return $pdo->prepare($sql)->execute([$name, $loc, $branch_id]);
}

function deleteBranch($pdo, $branch_id) {
    return $pdo->prepare("DELETE FROM branches WHERE branch_id = ?")->execute([$branch_id]);
}
?>