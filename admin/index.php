<?php
$pageTitle = 'Admin Dashboard';
$currentPage = 'admin';
include '../includes/header.php';
?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="text-primary-blue">Admin Dashboard</h1>
        <p class="text-muted">Manage your business operations</p>
    </div>

    <div class="row g-4">
        <!-- Employee Management Card -->
        <div class="col-md-6">
            <div class="card shadow-sm category-card h-100">
                <div class="card-body text-center p-5">
                    <div class="mb-3">
                        <i class="bi bi-people-fill" style="font-size: 4rem; color: var(--primary-blue);"></i>
                    </div>
                    <h3 class="text-primary-blue">Employee Management</h3>
                    <p class="text-muted">Add, view, update, and manage employee information</p>
                    <a href="employees/index.php" class="btn btn-orange mt-3">
                        <i class="bi bi-arrow-right-circle"></i> Manage Employees
                    </a>
                </div>
            </div>
        </div>

        <!-- Store Management Card -->
        <div class="col-md-6">
            <div class="card shadow-sm category-card h-100">
                <div class="card-body text-center p-5">
                    <div class="mb-3">
                        <i class="bi bi-shop" style="font-size: 4rem; color: var(--primary-blue);"></i>
                    </div>
                    <h3 class="text-primary-blue">Store Management</h3>
                    <p class="text-muted">Add, view, update, and manage store locations</p>
                    <a href="stores/index.php" class="btn btn-orange mt-3">
                        <i class="bi bi-arrow-right-circle"></i> Manage Stores
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 text-center">
        <a href="/FIshrUs/IS_6465-090_Spring_2026_Project/index.php" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to Home
        </a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
