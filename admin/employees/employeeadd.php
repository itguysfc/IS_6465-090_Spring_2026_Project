<?php
$pageTitle = 'Add Employee';
$currentPage = 'employees';
include '../../includes/header.php';

// Handle form submission (no database yet, just redirect)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In the future, this will save to database
    // For now, just redirect back to employee list
    header('Location: index.php');
    exit;
}
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="text-primary-blue">Add New Employee</h1>
                    <p class="text-muted">Enter employee information below</p>
                </div>
                <a href="index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form method="POST" action="">
                        <div class="row g-3">
                            <!-- Employee Name -->
                            <div class="col-md-12">
                                <label for="name" class="form-label">Employee Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <!-- Employee Position -->
                            <div class="col-md-12">
                                <label for="position" class="form-label">Employee Position <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="position" name="position" required>
                            </div>

                            <!-- Employee Email -->
                            <div class="col-md-12">
                                <label for="email" class="form-label">Employee Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Desk Phone -->
                            <div class="col-md-6">
                                <label for="desk_phone" class="form-label">Desk Phone</label>
                                <input type="tel" class="form-control" id="desk_phone" name="desk_phone" placeholder="555-0100">
                            </div>

                            <!-- Mobile Phone -->
                            <div class="col-md-6">
                                <label for="mobile_phone" class="form-label">Mobile Phone</label>
                                <input type="tel" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="555-0100">
                            </div>

                            <!-- Address 1 -->
                            <div class="col-md-12">
                                <label for="address1" class="form-label">Address 1</label>
                                <input type="text" class="form-control" id="address1" name="address1" placeholder="Street address">
                            </div>

                            <!-- Address 2 -->
                            <div class="col-md-12">
                                <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, suite, etc.">
                            </div>

                            <!-- City -->
                            <div class="col-md-5">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>

                            <!-- State -->
                            <div class="col-md-4">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" id="state" name="state">
                                    <option value="">Choose...</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="VT">Vermont</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="ME">Maine</option>
                                </select>
                            </div>

                            <!-- Zip -->
                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="02101">
                            </div>
                        </div>

                        <div class="mt-4 d-flex gap-2">
                            <button type="submit" class="btn btn-orange">
                                <i class="bi bi-check-circle"></i> Add Employee
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
