<?php
$pageTitle = 'View Employee';
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
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="text-primary-blue">View Employee Details</h1>
                    <p class="text-muted">Employee information (read-only)</p>
                </div>
                <a href="index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="row g-4">
                        <!-- Employee Name -->
                        <div class="col-md-12">
                            <h5 class="text-primary-blue mb-1">Employee Name</h5>
                            <p class="fs-5"><?php echo htmlspecialchars($employee['name']); ?></p>
                        </div>

                        <!-- Employee Position -->
                        <div class="col-md-12">
                            <h5 class="text-primary-blue mb-1">Employee Position</h5>
                            <p><?php echo htmlspecialchars($employee['position']); ?></p>
                        </div>

                        <!-- Contact Information -->
                        <div class="col-md-12">
                            <h5 class="text-primary-blue mb-3">Contact Information</h5>
                        </div>

                        <div class="col-md-12">
                            <h6 class="text-muted mb-1">Email</h6>
                            <p><a href="mailto:<?php echo htmlspecialchars($employee['email']); ?>"><?php echo htmlspecialchars($employee['email']); ?></a></p>
                        </div>

                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Desk Phone</h6>
                            <p><?php echo htmlspecialchars($employee['desk_phone']); ?></p>
                        </div>

                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Mobile Phone</h6>
                            <p><?php echo htmlspecialchars($employee['mobile_phone']); ?></p>
                        </div>

                        <!-- Address Information -->
                        <div class="col-md-12">
                            <h5 class="text-primary-blue mb-3">Address Information</h5>
                        </div>

                        <div class="col-md-12">
                            <h6 class="text-muted mb-1">Address 1</h6>
                            <p><?php echo htmlspecialchars($employee['address1']); ?></p>
                        </div>

                        <?php if (!empty($employee['address2'])): ?>
                        <div class="col-md-12">
                            <h6 class="text-muted mb-1">Address 2</h6>
                            <p><?php echo htmlspecialchars($employee['address2']); ?></p>
                        </div>
                        <?php endif; ?>

                        <div class="col-md-5">
                            <h6 class="text-muted mb-1">City</h6>
                            <p><?php echo htmlspecialchars($employee['city']); ?></p>
                        </div>

                        <div class="col-md-4">
                            <h6 class="text-muted mb-1">State</h6>
                            <p><?php echo htmlspecialchars($employee['state']); ?></p>
                        </div>

                        <div class="col-md-3">
                            <h6 class="text-muted mb-1">Zip Code</h6>
                            <p><?php echo htmlspecialchars($employee['zip']); ?></p>
                        </div>
                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <a href="update.php?id=<?php echo $employee['id']; ?>" class="btn btn-primary">
                            <i class="bi bi-pencil"></i> Edit Employee
                        </a>
                        <a href="index.php" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
