<?php
$pageTitle = 'Update Store';
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

// Handle form submission (no database yet, just redirect)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In the future, this will update in database
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
                    <h1 class="text-primary-blue">Update Store</h1>
                    <p class="text-muted">Edit store information below</p>
                </div>
                <a href="index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form method="POST" action="">
                        <input type="hidden" name="id" value="<?php echo $store['id']; ?>">

                        <div class="row g-3">
                            <!-- Store ID -->
                            <div class="col-md-6">
                                <label for="store_id" class="form-label">Store ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="store_id" name="store_id"
                                       value="<?php echo htmlspecialchars($store['store_id']); ?>" required>
                                <small class="text-muted">Unique store identifier</small>
                            </div>

                            <!-- Manager Contact ID -->
                            <div class="col-md-6">
                                <label for="manager_contact_id" class="form-label">Store Manager Contact ID <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="manager_contact_id" name="manager_contact_id"
                                       value="<?php echo htmlspecialchars($store['manager_contact_id']); ?>" required>
                                <small class="text-muted">Employee ID of the store manager</small>
                            </div>

                            <!-- Store Name -->
                            <div class="col-md-12">
                                <label for="name" class="form-label">Store Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="<?php echo htmlspecialchars($store['name']); ?>" required>
                            </div>

                            <!-- Store Address -->
                            <div class="col-md-12">
                                <label for="address" class="form-label">Store Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="address" name="address" rows="2" required><?php echo htmlspecialchars($store['address']); ?></textarea>
                            </div>

                            <!-- Store Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Store Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                       value="<?php echo htmlspecialchars($store['phone']); ?>" required>
                            </div>

                            <!-- Store Hours -->
                            <div class="col-md-6">
                                <label for="hours" class="form-label">Store Hours <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="hours" name="hours"
                                       value="<?php echo htmlspecialchars($store['hours']); ?>" required>
                            </div>
                        </div>

                        <div class="mt-4 d-flex gap-2">
                            <button type="submit" class="btn btn-orange">
                                <i class="bi bi-check-circle"></i> Update Store
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
