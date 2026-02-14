<?php
$pageTitle = 'Update Employee';
$currentPage = 'employees';
include '../../includes/header.php';

// Sample employee data (same as in index.php)
$employees = [
    1 => [
        'id' => 1,
        'name' => 'John Smith',
        'position' => 'Store Manager',
        'email' => 'john.smith@bubbles.com',
        'desk_phone' => '555-0101',
        'mobile_phone' => '555-0102',
        'address1' => '123 Main St',
        'address2' => 'Suite 100',
        'city' => 'Boston',
        'state' => 'MA',
        'zip' => '02101'
    ],
    2 => [
        'id' => 2,
        'name' => 'Sarah Johnson',
        'position' => 'Aquarium Specialist',
        'email' => 'sarah.johnson@bubbles.com',
        'desk_phone' => '555-0103',
        'mobile_phone' => '555-0104',
        'address1' => '456 Ocean Ave',
        'address2' => '',
        'city' => 'Cambridge',
        'state' => 'MA',
        'zip' => '02139'
    ],
    3 => [
        'id' => 3,
        'name' => 'Michael Chen',
        'position' => 'Sales Associate',
        'email' => 'michael.chen@bubbles.com',
        'desk_phone' => '555-0105',
        'mobile_phone' => '555-0106',
        'address1' => '789 Harbor Rd',
        'address2' => 'Apt 5B',
        'city' => 'Somerville',
        'state' => 'MA',
        'zip' => '02143'
    ]
];

// Get employee ID from URL
$employeeId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Check if employee exists
if (!isset($employees[$employeeId])) {
    header('Location: index.php');
    exit;
}

$employee = $employees[$employeeId];

// Handle form submission (no database yet, just redirect)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In the future, this will update in database
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
                    <h1 class="text-primary-blue">Update Employee</h1>
                    <p class="text-muted">Edit employee information below</p>
                </div>
                <a href="index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form method="POST" action="">
                        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

                        <div class="row g-3">
                            <!-- Employee Name -->
                            <div class="col-md-12">
                                <label for="name" class="form-label">Employee Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="<?php echo htmlspecialchars($employee['name']); ?>" required>
                            </div>

                            <!-- Employee Position -->
                            <div class="col-md-12">
                                <label for="position" class="form-label">Employee Position <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="position" name="position"
                                       value="<?php echo htmlspecialchars($employee['position']); ?>" required>
                            </div>

                            <!-- Employee Email -->
                            <div class="col-md-12">
                                <label for="email" class="form-label">Employee Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                       value="<?php echo htmlspecialchars($employee['email']); ?>" required>
                            </div>

                            <!-- Desk Phone -->
                            <div class="col-md-6">
                                <label for="desk_phone" class="form-label">Desk Phone</label>
                                <input type="tel" class="form-control" id="desk_phone" name="desk_phone"
                                       value="<?php echo htmlspecialchars($employee['desk_phone']); ?>" placeholder="555-0100">
                            </div>

                            <!-- Mobile Phone -->
                            <div class="col-md-6">
                                <label for="mobile_phone" class="form-label">Mobile Phone</label>
                                <input type="tel" class="form-control" id="mobile_phone" name="mobile_phone"
                                       value="<?php echo htmlspecialchars($employee['mobile_phone']); ?>" placeholder="555-0100">
                            </div>

                            <!-- Address 1 -->
                            <div class="col-md-12">
                                <label for="address1" class="form-label">Address 1</label>
                                <input type="text" class="form-control" id="address1" name="address1"
                                       value="<?php echo htmlspecialchars($employee['address1']); ?>" placeholder="Street address">
                            </div>

                            <!-- Address 2 -->
                            <div class="col-md-12">
                                <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="address2" name="address2"
                                       value="<?php echo htmlspecialchars($employee['address2']); ?>" placeholder="Apartment, suite, etc.">
                            </div>

                            <!-- City -->
                            <div class="col-md-5">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                       value="<?php echo htmlspecialchars($employee['city']); ?>">
                            </div>

                            <!-- State -->
                            <div class="col-md-4">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" id="state" name="state">
                                    <option value="">Choose...</option>
                                    <option value="MA" <?php echo $employee['state'] === 'MA' ? 'selected' : ''; ?>>Massachusetts</option>
                                    <option value="NH" <?php echo $employee['state'] === 'NH' ? 'selected' : ''; ?>>New Hampshire</option>
                                    <option value="VT" <?php echo $employee['state'] === 'VT' ? 'selected' : ''; ?>>Vermont</option>
                                    <option value="RI" <?php echo $employee['state'] === 'RI' ? 'selected' : ''; ?>>Rhode Island</option>
                                    <option value="CT" <?php echo $employee['state'] === 'CT' ? 'selected' : ''; ?>>Connecticut</option>
                                    <option value="ME" <?php echo $employee['state'] === 'ME' ? 'selected' : ''; ?>>Maine</option>
                                </select>
                            </div>

                            <!-- Zip -->
                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip" name="zip"
                                       value="<?php echo htmlspecialchars($employee['zip']); ?>" placeholder="02101">
                            </div>
                        </div>

                        <div class="mt-4 d-flex gap-2">
                            <button type="submit" class="btn btn-orange">
                                <i class="bi bi-check-circle"></i> Update Employee
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
