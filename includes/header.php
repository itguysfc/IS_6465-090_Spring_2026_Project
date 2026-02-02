<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Bubbles' : 'Bubbles - Your Premier Fish Supply Store'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-gradient-blue sticky-top shadow">
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <a href="index.php" class="navbar-brand fs-3 fw-bold">Bubbles<span class="text-accent-cyan">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a href="index.php" class="nav-link text-white fw-medium<?php echo ($currentPage ?? '') === 'home' ? ' active' : ''; ?>">Home</a></li>
                    <li class="nav-item"><a href="products.php" class="nav-link text-white fw-medium<?php echo ($currentPage ?? '') === 'products' ? ' active' : ''; ?>">Products</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link text-white fw-medium<?php echo ($currentPage ?? '') === 'about' ? ' active' : ''; ?>">About</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link text-white fw-medium<?php echo ($currentPage ?? '') === 'contact' ? ' active' : ''; ?>">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
