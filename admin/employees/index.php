<?php
$pageTitle = 'Employee Management';
$currentPage = 'employees';
include '../../includes/header.php';

// Sample employee data (no database yet)
$employees = [
    [
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
    [
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
    [
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
?>

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="text-primary-blue">Employee Management</h1>
            <p class="text-muted">View and manage employee information</p>
        </div>
        <div class="col-md-4 text-end">
            <a href="employeeadd.php" class="btn btn-orange">
                <i class="bi bi-plus-circle"></i> Add New Employee
            </a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Desk Phone</th>
                            <th>Mobile Phone</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($employees as $employee): ?>
                        <tr>
                            <td><?php echo $employee['id']; ?></td>
                            <td><?php echo htmlspecialchars($employee['name']); ?></td>
                            <td><?php echo htmlspecialchars($employee['position']); ?></td>
                            <td><?php echo htmlspecialchars($employee['email']); ?></td>
                            <td><?php echo htmlspecialchars($employee['desk_phone']); ?></td>
                            <td><?php echo htmlspecialchars($employee['mobile_phone']); ?></td>
                            <td><?php echo htmlspecialchars($employee['city']); ?></td>
                            <td><?php echo htmlspecialchars($employee['state']); ?></td>
                            <td>
                                <a href="view.php?id=<?php echo $employee['id']; ?>"
                                   class="btn btn-sm btn-info"
                                   title="View">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                <a href="update.php?id=<?php echo $employee['id']; ?>"
                                   class="btn btn-sm btn-primary"
                                   title="Edit">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="delete.php?id=<?php echo $employee['id']; ?>"
                                   class="btn btn-sm btn-danger"
                                   title="Delete"
                                   onclick="return confirm('Are you sure you want to delete this employee?');">
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
            <small>Showing <?php echo count($employees); ?> employee(s)</small>
        </p>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
