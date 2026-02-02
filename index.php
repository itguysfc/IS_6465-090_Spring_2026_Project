<?php
$pageTitle = 'Home';
$currentPage = 'home';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero-section text-white text-center py-5 d-flex flex-column justify-content-center align-items-center">
        <div class="container py-5">
            <h1 class="display-3 fw-bold mb-3">Welcome to Bubbles</h1>
            <p class="lead mb-4 mx-auto" style="max-width: 600px;">Your one-stop shop for all things aquatic. From vibrant fish to premium supplies, we have everything to keep your underwater world thriving.</p>
            <a href="products.php" class="btn btn-orange btn-lg rounded-pill px-5 py-3 fw-bold">Shop Now</a>
        </div>
    </section>

    <!-- Products Section -->
    <section class="bg-light py-5">
        <div class="container py-4">
            <h2 class="text-center display-5 fw-bold text-primary-blue mb-5">Our Products</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card category-card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                        <div class="category-icon mb-3">&#128031;</div>
                        <h3 class="h5 text-primary-blue">Live Fish</h3>
                        <p class="text-muted mb-0">Tropical, freshwater, and saltwater fish from trusted breeders worldwide.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card category-card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                        <div class="category-icon mb-3">&#127748;</div>
                        <h3 class="h5 text-primary-blue">Aquariums</h3>
                        <p class="text-muted mb-0">Tanks of all sizes, from desktop bowls to stunning display aquariums.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card category-card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                        <div class="category-icon mb-3">&#9881;</div>
                        <h3 class="h5 text-primary-blue">Equipment</h3>
                        <p class="text-muted mb-0">Filters, heaters, lights, and pumps to maintain the perfect environment.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card category-card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                        <div class="category-icon mb-3">&#127807;</div>
                        <h3 class="h5 text-primary-blue">Plants & Decor</h3>
                        <p class="text-muted mb-0">Live plants, rocks, driftwood, and decorations to beautify your tank.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card category-card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                        <div class="category-icon mb-3">&#127860;</div>
                        <h3 class="h5 text-primary-blue">Fish Food</h3>
                        <p class="text-muted mb-0">Premium flakes, pellets, frozen, and live foods for every species.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card category-card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                        <div class="category-icon mb-3">&#128167;</div>
                        <h3 class="h5 text-primary-blue">Water Care</h3>
                        <p class="text-muted mb-0">Conditioners, test kits, and treatments to keep water crystal clear.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-white py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h2 class="display-5 fw-bold text-primary-blue mb-4">Why Choose Bubbles?</h2>
                    <p class="text-secondary fs-5 mb-3">For over 15 years, Bubbles has been the trusted name in aquarium supplies. Our passion for fishkeeping drives us to provide only the best products and expert advice to hobbyists of all levels.</p>
                    <p class="text-secondary fs-5 mb-4">Whether you're setting up your first tank or expanding a collection, our knowledgeable team is here to help you succeed.</p>
                    <div class="row g-3 mt-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <div class="feature-icon rounded-circle text-white d-flex align-items-center justify-content-center fw-bold">&#10003;</div>
                                <span>Expert Staff</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <div class="feature-icon rounded-circle text-white d-flex align-items-center justify-content-center fw-bold">&#10003;</div>
                                <span>Quality Guaranteed</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <div class="feature-icon rounded-circle text-white d-flex align-items-center justify-content-center fw-bold">&#10003;</div>
                                <span>Fast Shipping</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <div class="feature-icon rounded-circle text-white d-flex align-items-center justify-content-center fw-bold">&#10003;</div>
                                <span>Live Arrival Guarantee</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-image rounded-4 d-flex align-items-center justify-content-center text-white">&#128032;</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-gradient-blue text-white py-5">
        <div class="container py-4 text-center">
            <h2 class="display-5 fw-bold mb-3">Visit Us Today</h2>
            <p class="lead mb-5">Stop by our store or reach out online. We'd love to help with your aquatic journey!</p>
            <div class="row justify-content-center g-4">
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-column align-items-center gap-2">
                        <span class="contact-icon">&#128205;</span>
                        <strong>Location</strong>
                        <span>123 Aquarium Lane<br>Coral City, FL 33101</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-column align-items-center gap-2">
                        <span class="contact-icon">&#128222;</span>
                        <strong>Phone</strong>
                        <span>(555) 123-FISH</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-column align-items-center gap-2">
                        <span class="contact-icon">&#128231;</span>
                        <strong>Email</strong>
                        <span>hello@bubblesfish.com</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-column align-items-center gap-2">
                        <span class="contact-icon">&#128336;</span>
                        <strong>Hours</strong>
                        <span>Mon-Sat: 9am-7pm<br>Sun: 10am-5pm</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
