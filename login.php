<?php
$pageTitle = 'Login';
$currentPage = 'login';
include 'includes/header.php';
?>

    <!-- Login Section -->
    <section class="bg-light py-5 min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="bg-gradient-blue text-white text-center py-4">
                            <h2 class="fw-bold mb-1">Welcome Back</h2>
                            <p class="mb-0 text-white-50">Sign in to your account</p>
                        </div>
                        <div class="card-body p-4 p-md-5">
                            <form action="login.php" method="POST">
                                <div class="mb-4">
                                    <label for="email" class="form-label text-primary-blue fw-medium">Email Address</label>
                                    <input type="email" class="form-control form-control-lg rounded-3" id="email" name="email" placeholder="you@example.com" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label text-primary-blue fw-medium">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-3" id="password" name="password" placeholder="Enter your password" required>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                        <label class="form-check-label text-muted" for="remember">Remember me</label>
                                    </div>
                                    <a href="forgot-password.php" class="text-primary-blue text-decoration-none">Forgot password?</a>
                                </div>
                                <button type="submit" class="btn btn-orange btn-lg w-100 rounded-pill fw-bold py-3">Sign In</button>
                            </form>
                            <hr class="my-4">
                            <p class="text-center text-muted mb-0">
                                Don't have an account? <a href="register.php" class="text-primary-blue fw-medium text-decoration-none">Create one</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
