<?php
$pageTitle = 'Add Store';
$currentPage = 'stores';
include '../../includes/header.php';

// Handle form submission (no database yet, just redirect)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In the future, this will save to database
    // For now, just redirect back to store list
    header('Location: index.php');
    exit;
}
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="text-primary-blue">Add New Store</h1>
                    <p class="text-muted">Enter store information below</p>
                </div>
                <a href="index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form method="POST" action="">
                        <div class="row g-3">
                            <!-- Store ID -->
                            <div class="col-md-6">
                                <label for="store_id" class="form-label">Store ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="store_id" name="store_id" placeholder="STR-001" required>
                                <small class="text-muted">Unique store identifier</small>
                            </div>

                            <!-- Manager Contact ID -->
                            <div class="col-md-6">
                                <label for="manager_contact_id" class="form-label">Store Manager Contact ID <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="manager_contact_id" name="manager_contact_id" placeholder="1" required>
                                <small class="text-muted">Employee ID of the store manager</small>
                            </div>

                            <!-- Store Name -->
                            <div class="col-md-12">
                                <label for="name" class="form-label">Store Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Bubbles Downtown" required>
                            </div>

                            <!-- Store Address -->
                            <div class="col-md-12">
                                <label for="address" class="form-label">Store Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="address" name="address" rows="2" placeholder="123 Main Street, Boston, MA 02101" required></textarea>
                            </div>

                            <!-- Store Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Store Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="617-555-0100" required>
                            </div>

                            <!-- Store Hours -->
                            <div class="col-md-6">
                                <label for="hours" class="form-label">Store Hours <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="hours" name="hours" placeholder="Mon-Fri: 9AM-8PM" required>
                            </div>
                        </div>

                        <div class="mt-4 d-flex gap-2">
                            <button type="submit" class="btn btn-orange">
                                <i class="bi bi-check-circle"></i> Add Store
                            </button>
                            <a href="index.php" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
