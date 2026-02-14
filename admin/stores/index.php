<?php
$pageTitle = 'Store Management';
$currentPage = 'stores';
include '../../includes/header.php';

// Sample store data (no database yet)
$stores = [
    [
        'id' => 1,
        'store_id' => 'STR-001',
        'name' => 'Bubbles Downtown',
        'address' => '123 Main Street, Boston, MA 02101',
        'phone' => '617-555-0100',
        'hours' => 'Mon-Fri: 9AM-8PM, Sat-Sun: 10AM-6PM',
        'manager_contact_id' => 1
    ],
    [
        'id' => 2,
        'store_id' => 'STR-002',
        'name' => 'Bubbles Cambridge',
        'address' => '456 Ocean Avenue, Cambridge, MA 02139',
        'phone' => '617-555-0200',
        'hours' => 'Mon-Fri: 10AM-9PM, Sat-Sun: 9AM-7PM',
        'manager_contact_id' => 2
    ],
    [
        'id' => 3,
        'store_id' => 'STR-003',
        'name' => 'Bubbles Somerville',
        'address' => '789 Harbor Road, Somerville, MA 02143',
        'phone' => '617-555-0300',
        'hours' => 'Mon-Sun: 9AM-8PM',
        'manager_contact_id' => 3
    ]
];
?>

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="text-primary-blue">Store Management</h1>
            <p class="text-muted">View and manage store locations</p>
        </div>
        <div class="col-md-4 text-end">
            <a href="storeadd.php" class="btn btn-orange">
                <i class="bi bi-plus-circle"></i> Add New Store
            </a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Store ID</th>
                            <th>Store Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Hours</th>
                            <th>Manager ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($stores as $store): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($store['store_id']); ?></td>
                            <td><?php echo htmlspecialchars($store['name']); ?></td>
                            <td><?php echo htmlspecialchars($store['address']); ?></td>
                            <td><?php echo htmlspecialchars($store['phone']); ?></td>
                            <td><small><?php echo htmlspecialchars($store['hours']); ?></small></td>
                            <td><?php echo htmlspecialchars($store['manager_contact_id']); ?></td>
                            <td>
                                <a href="view.php?id=<?php echo $store['id']; ?>"
                                   class="btn btn-sm btn-info"
                                   title="View">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                <a href="update.php?id=<?php echo $store['id']; ?>"
                                   class="btn btn-sm btn-primary"
                                   title="Edit">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="delete.php?id=<?php echo $store['id']; ?>"
                                   class="btn btn-sm btn-danger"
                                   title="Delete"
                                   onclick="return confirm('Are you sure you want to delete this store?');">
                                    <i class="bi bi-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <p class="text-muted">
            <small>Showing <?php echo count($stores); ?> store(s)</small>
        </p>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
