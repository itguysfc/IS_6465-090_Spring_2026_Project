<?php
$pageTitle = 'Delete Store';
$currentPage = 'stores';

// Get store ID from URL
$storeId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// In the future, this will delete from database
// For now, just redirect back to store list

// Redirect back to store list
header('Location: index.php');
exit;
?>
