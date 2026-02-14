<?php
$pageTitle = 'Delete Employee';
$currentPage = 'employees';

// Get employee ID from URL
$employeeId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// In the future, this will delete from database
// For now, just redirect back to employee list with a message

// Redirect back to employee list
header('Location: index.php');
exit;
?>
