<?php
$pageTitle = 'View Store';
$currentPage = 'stores';
include '../../includes/header.php';

// Sample store data (same as in index.php)
$stores = [
    1 => [
        'id' => 1,
        'store_id' => 'STR-001',
        'name' => 'Bubbles Downtown',
        'address' => '123 Main Street, Boston, MA 02101',
        'phone' => '617-555-0100',
        'hours' => 'Mon-Fri: 9AM-8PM, Sat-Sun: 10AM-6PM',
        'manager_contact_id' => 1
    ],
    2 => [
        'id' => 2,
        'store_id' => 'STR-002',
        'name' => 'Bubbles Cambridge',
        'address' => '456 Ocean Avenue, Cambridge, MA 02139',
        'phone' => '617-555-0200',
        'hours' => 'Mon-Fri: 10AM-9PM, Sat-Sun: 9AM-7PM',
        'manager_contact_id' => 2
    ],
    3 => [
        'id' => 3,
        'store_id' => 'STR-003',
        'name' => 'Bubbles Somerville',
        'address' => '789 Harbor Road, Somerville, MA 02143',
        'phone' => '617-555-0300',
        'hours' => 'Mon-Sun: 9AM-8PM',
        'manager_contact_id' => 3
    ]
];

// Get store ID from URL
$storeId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Check if store exists
if (!isset($stores[$storeId])) {
    header('Location: index.php');
    exit;
}

$store = $stores[$storeId];
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="text-primary-blue">View Store Details</h1>
                    <p class="text-muted">Store information (read-only)</p>
                </div>
                <a href="index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="row g-4">
                        <!-- Store Name -->
                        <div class="col-md-12">
                            <h5 class="text-primary-blue mb-1">Store Name</h5>
                            <p class="fs-5"><?php echo htmlspecialchars($store['name']); ?></p>
                        </div>

                        <!-- Store ID -->
                        <div class="col-md-6">
                            <h5 class="text-primary-blue mb-1">Store ID</h5>
                            <p><span class="badge bg-primary"><?php echo htmlspecialchars($store['store_id']); ?></span></p>
                        </div>

                        <!-- Manager Contact ID -->
                        <div class="col-md-6">
                            <h5 class="text-primary-blue mb-1">Manager Contact ID</h5>
                            <p><span class="badge bg-secondary"><?php echo htmlspecialchars($store['manager_contact_id']); ?></span></p>
                        </div>

                        <!-- Store Address -->
                        <div class="col-md-12">
                            <h5 class="text-primary-blue mb-1">Store Address</h5>
                            <p><?php echo htmlspecialchars($store['address']); ?></p>
                        </div>

                        <!-- Contact Information -->
                        <div class="col-md-12">
                            <h5 class="text-primary-blue mb-3">Contact Information</h5>
                        </div>

                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Phone Number</h6>
                            <p><a href="tel:<?php echo htmlspecialchars($store['phone']); ?>"><?php echo htmlspecialchars($store['phone']); ?></a></p>
                        </div>

                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Store Hours</h6>
                            <p><?php echo htmlspecialchars($store['hours']); ?></p>
                        </div>
                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <a href="update.php?id=<?php echo $store['id']; ?>" class="btn btn-primary">
                            <i class="bi bi-pencil"></i> Edit Store
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
