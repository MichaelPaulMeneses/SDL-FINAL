<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Metro District Designs Homepage Editor</title>
    <link rel="icon" type="image/png" href="images/logo/threadcraft-logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .navbar {
            background-color: #1E1E1E;
            padding: 10px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
            font-weight: bold;
        }

        .navbar-nav {
            flex-grow: 1;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            color: white !important;
            text-transform: uppercase;
            font-weight: bold;
            margin: 0 10px;
        }

        .navbar-nav.ms-auto {
            margin-right: 0 !important;
            align-items: center;
        }

        .nav-icons {
            display: flex;
            align-items: center;
            color: white;
        }

        .nav-icons i {
            cursor: pointer;
            margin-left: 15px;
        }
        .text-title {
            font-size: 32px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .card-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            min-height: 150px;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .card-container:hover {
            transform: scale(1.03);
        }
        .card-title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 22px;
            color: #555;
        }
        .metric-card {
            color: white;
            padding: 12px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 6px;
        }
        .metric-card.red { background-color: #e74c3c; }
        .metric-card.orange { background-color: #f39c12; }
        .metric-card.green { background-color: #2ecc71; }
        .metric-card.blue { background-color: #3498db; }
        .metric-card.navy { background-color: #34495e; }
        .metric-card.yellow { background-color: #f1c40f; }
        .metric-card.purple { background-color: #9b59b6; }
        .metric-card.teal { background-color: #1abc9c; }
        .metric-card.gray { background-color: #95a5a6; }
        .metric-card.pink { background-color: #e91e63; }
        .metric-card.brown { background-color: #8d6e63; }
        
        .card-action {
            font-size: 24px;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
        }
    </style>
    
    <!-- Fetch the name of the User -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const adminFirstName = "<?php echo htmlspecialchars($adminFirstName); ?>";
            const adminLastName = "<?php echo htmlspecialchars($adminLastName); ?>";
            const welcomeMessage = `WELCOME! Admin ${adminFirstName} ${adminLastName}`;
            document.getElementById('adminWelcomeMessage').textContent = welcomeMessage;
        });
    </script>

    <!-- Fetch the logo from the database and display it in the navbar -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch("databases/fetch_logo.php")
                .then(response => response.json())
                .then(data => {
                    let navLogo = document.getElementById("navLogo");
                    if (data.status === "success" && data.image) {
                        navLogo.src = data.image; // Load logo from database
                    } else {
                        console.error("Error:", data.message);
                        navLogo.src = "assets/homepage_images/logo/placeholder.png"; // Default placeholder
                    }
                })
                .catch(error => console.error("Error fetching logo:", error));
        });
    </script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="Homepage.php">
            <img src="/api/placeholder/40/40" id="navLogo" class="rounded-circle">
            Metro District Designs
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Homepage.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Products.php">COLLECTIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Commissioned.php">CUSTOM DESIGNS</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Signup.php">SIGN-UP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    
<!-- Main Content -->
<div class="col-md-9 col-lg-10 px-md-4 pt-3">
    <div class="row">
        <!-- First Row - 2 Cards -->
        <div class="col-12 mb-4">
            <h4 class="text-title text-align">
                Main Page
            </h4>
        </div>
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card-container">
                <div class="card-title">Brand Logo</div>
                <div class="metric-card red" data-bs-toggle="modal" data-bs-target="#editLogoModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card-container">
                <div class="card-title">Featured Collection</div>
                <div class="metric-card orange" data-bs-toggle="modal" data-bs-target="#editCarouselModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card-container">
                <div class="card-title">Best Sellers</div>
                <div class="metric-card green" data-bs-toggle="modal" data-bs-target="#editBestSellersModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <!-- NEW FEATURE: Testimonials Section -->
        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card-container">
                <div class="card-title">Customer Reviews</div>
                <div class="metric-card blue" data-bs-toggle="modal" data-bs-target="#editTestimonialsModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <!-- Second Row - Collections -->
        <div class="col-12 mb-4">
            <h4 class="text-title text-align">
               Shirt Collections
            </h4>
        </div>

        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card-container">
                <div class="card-title">Casual Collection</div>
                <div class="metric-card purple" data-bs-toggle="modal" data-bs-target="#editCasualModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card-container">
                <div class="card-title">Formal Collection</div>
                <div class="metric-card teal" data-bs-toggle="modal" data-bs-target="#editFormalModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card-container">
                <div class="card-title">Graphic Tees</div>
                <div class="metric-card pink" data-bs-toggle="modal" data-bs-target="#editGraphicModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <!-- Third Row - Other Features -->
        <div class="col-12 mb-4">
            <h4 class="text-title text-align">
                Store Features
            </h4>
        </div>
        
        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card-container">
                <div class="card-title">Size Guide</div>
                <div class="metric-card navy" data-bs-toggle="modal" data-bs-target="#editSizeGuideModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card-container">
                <div class="card-title">Fabric Catalog</div>
                <div class="metric-card brown" data-bs-toggle="modal" data-bs-target="#editFabricModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card-container">
                <div class="card-title">Custom Design Form</div>
                <div class="metric-card yellow" data-bs-toggle="modal" data-bs-target="#editCustomFormModal">
                    <div class="metric-value">Edit</div>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Editing Logo -->
<div class="modal fade" id="editLogoModal" tabindex="-1" aria-labelledby="editLogoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLogoModalLabel">Edit Brand Logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="logoForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- Display the current logo -->
                    <h6>Current Logo:</h6>
                    <div class="text-center mb-3">
                        <img id="currentLogo" src="assets/homepage_images/logo/placeholder.png" alt="Current Logo" class="img-fluid rounded-circle" style="max-width: 150px; height: auto;">
                    </div>
                    <!-- File input -->
                    <div class="mb-3">
                        <label for="logoFile" class="form-label">Upload New Logo</label>
                        <input type="file" class="form-control" id="logoFile" name="logoFile" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal for Editing Featured Collection (formerly Carousel) -->
<div class="modal fade" id="editCarouselModal" tabindex="-1" aria-labelledby="editCarouselModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCarouselModalLabel">Edit Featured Collection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="carouselForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- Display current carousel images -->
                    <h6>Current Featured Collection Images:</h6>
                    <div id="carouselImagesContainer" class="mb-3 text-center">
                        <!-- Images will be dynamically loaded here -->
                    </div>
                    <!-- File input for new images -->
                    <div class="mb-3">
                        <label for="carouselFile1" class="form-label">Upload Featured Shirt 1</label>
                        <input type="file" class="form-control" id="carouselFile1" name="carouselFile1" accept="image/*" required>
                        <small class="text-muted">Select an image file to replace the current featured shirt.</small>
                    </div>

                    <div class="mb-3">
                        <label for="carouselFile2" class="form-label">Upload Featured Shirt 2</label>
                        <input type="file" class="form-control" id="carouselFile2" name="carouselFile2" accept="image/*" required>
                        <small class="text-muted">Select an image file to replace the current featured shirt.</small>
                    </div>

                    <div class="mb-3">
                        <label for="carouselFile3" class="form-label">Upload Featured Shirt 3</label>
                        <input type="file" class="form-control" id="carouselFile3" name="carouselFile3" accept="image/*"  required>
                        <small class="text-muted">Select an image file to replace the current featured shirt.</small>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- NEW FEATURE: Modal for Editing Testimonials -->
<div class="modal fade" id="editTestimonialsModal" tabindex="-1" aria-labelledby="editTestimonialsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTestimonialsModalLabel">Manage Customer Reviews</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Existing Testimonials List -->
                <h6 class="mb-3">Current Reviews</h6>
                <div id="testimonialsList" class="mb-4">
                    <!-- Testimonials will be loaded here -->
                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>

                <!-- Add New Testimonial Form -->
                <hr>
                <h6 class="mb-3">Add New Customer Review</h6>
                <form id="addTestimonialForm">
                    <div class="mb-3">
                        <label for="clientName" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="clientName" name="clientName" required>
                    </div>
                    <div class="mb-3">
                        <label for="clientCompany" class="form-label">Purchased Item (Optional)</label>
                        <input type="text" class="form-control" id="clientCompany" name="clientCompany">
                    </div>
                    <div class="mb-3">
                        <label for="testimonialText" class="form-label">Review Content</label>
                        <textarea class="form-control" id="testimonialText" name="testimonialText" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="clientPhoto" class="form-label">Customer Photo (Optional)</label>
                        <input type="file" class="form-control" id="clientPhoto" name="clientPhoto" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating (1-5 stars)</label>
                        <select class="form-select" id="rating" name="rating" required>
                            <option value="">Select rating</option>
                            <option value="5">5 Stars (Excellent)</option>
                            <option value="4">4 Stars (Very Good)</option>
                            <option value="3">3 Stars (Good)</option>
                            <option value="2">2 Stars (Fair)</option>
                            <option value="1">1 Star (Poor)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Add Review</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- NEW: Modal for Best Sellers -->
<div class="modal fade" id="editBestSellersModal" tabindex="-1" aria-labelledby="editBestSellersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBestSellersModalLabel">Edit Best Selling Shirts</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="bestSellersForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <h6>Current Best Sellers:</h6>
                    <div id="bestSellersContainer" class="mb-3 text-center">
                        <!-- Best sellers will be loaded here -->
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bestSellerImage1" class="form-label">Best Seller Image 1</label>
                                <input type="file" class="form-control" id="bestSellerImage1" name="bestSellerImage1" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bestSellerName1" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="bestSellerName1" name="bestSellerName1">
                            </div>
                            <div class="mb-3">
                                <label for="bestSellerPrice1" class="form-label">Price</label>
                                <input type="text" class="form-control" id="bestSellerPrice1" name="bestSellerPrice1" placeholder="$29.99">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bestSellerImage2" class="form-label">Best Seller Image 2</label>
                                <input type="file" class="form-control" id="bestSellerImage2" name="bestSellerImage2" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bestSellerName2" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="bestSellerName2" name="bestSellerName2">
                            </div>
                            <div class="mb-3">
                                <label for="bestSellerPrice2" class="form-label">Price</label>
                                <input type="text" class="form-control" id="bestSellerPrice2" name="bestSellerPrice2" placeholder="$29.99">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bestSellerImage3" class="form-label">Best Seller Image 3</label>
                                <input type="file" class="form-control" id="bestSellerImage3" name="bestSellerImage3" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bestSellerName3" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="bestSellerName3" name="bestSellerName3">
                            </div>
                            <div class="mb-3">
                                <label for="bestSellerPrice3" class="form-label">Price</label>
                                <input type="text" class="form-control" id="bestSellerPrice3" name="bestSellerPrice3" placeholder="$29.99">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- NEW: Modal for Editing Size Guide -->
<div class="modal fade" id="editSizeGuideModal" tabindex="-1" aria-labelledby="editSizeGuideModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSizeGuideModalLabel">Edit Size Guide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="sizeGuideForm">
                <div class="modal-body">
                    <h6>Size Guide Content:</h6>
                    <div class="mb-3">
                        <label for="sizeGuideDescription" class="form-label">Size Guide Description</label>
                        <textarea class="form-control" id="sizeGuideDescription" name="sizeGuideDescription" rows="4"></textarea>
                    </div>
                    
                    <h6>Size Guide Table (inches):</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>Chest</th>
                                    <th>Waist</th>
                                    <th>Shoulder</th>
                                    <th>Length</th>
                                    <th>Sleeve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="size1" value="S">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="chest1" value="38">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="waist1" value="30">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="shoulder1" value="16">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="length1" value="28">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="sleeve1" value="24">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="size2" value="M">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="chest2" value="40">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="waist2" value="32">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="shoulder2" value="17">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="length2" value="29">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="sleeve2" value="25">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="size3" value="L">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="chest3" value="42">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="waist3" value="34">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="shoulder3" value="18">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="length3" value="30">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="sleeve3" value="26">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="size4" value="XL">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="chest4" value="44">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="waist4" value="36">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="shoulder4" value="19">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="length4" value="31">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="sleeve4" value="27">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- NEW FEATURE: Scripts for managing testimonials -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Load testimonials when the modal opens
        document.getElementById("editTestimonialsModal").addEventListener("show.bs.modal", function() {
            loadTestimonials();
        });
        
        // Handle the form submission for adding new testimonials
        document.getElementById("addTestimonialForm").addEventListener("submit", function(e) {
            e.preventDefault();
            addNewTestimonial();
        });
    });
    
    function loadTestimonials() {
        // Fetch testimonials from the server
        fetch("databases/fetch_testimonials.php")
            .then(response => response.json())
            .then(function loadTestimonials() {
    // Fetch testimonials from the server
    fetch("databases/fetch_testimonials.php")
        .then(response => response.json())
        .then(data => {
            const testimonialsList = document.getElementById("testimonialsList");
            if (data.status === "success" && data.testimonials.length > 0) {
                // Clear loading spinner
                testimonialsList.innerHTML = "";
                
                // Add each testimonial to the list
                data.testimonials.forEach(testimonial => {
                    const testimonialElement = document.createElement("div");
                    testimonialElement.className = "testimonial-item card mb-3";
                    testimonialElement.innerHTML = `
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="${testimonial.photo || 'assets/placeholder-user.png'}" alt="${testimonial.name}" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0">${testimonial.name}</h6>
                                        <small class="text-muted">${testimonial.company || 'Customer'}</small>
                                    </div>
                                </div>
                                <div class="rating">
                                    ${'★'.repeat(testimonial.rating)}${'☆'.repeat(5-testimonial.rating)}
                                </div>
                            </div>
                            <p class="mb-2">${testimonial.text}</p>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-sm btn-danger" onclick="deleteTestimonial(${testimonial.id})">Delete</button>
                            </div>
                        </div>
                    `;
                    testimonialsList.appendChild(testimonialElement);
                });
            } else {
                testimonialsList.innerHTML = "<p class='text-center'>No testimonials found. Add your first customer review!</p>";
            }
        })
        .catch(error => {
            console.error("Error loading testimonials:", error);
            document.getElementById("testimonialsList").innerHTML = 
                "<div class='alert alert-danger'>Error loading testimonials. Please try again later.</div>";
        });
}

function addNewTestimonial() {
    // Create FormData object to handle file uploads
    const formData = new FormData(document.getElementById("addTestimonialForm"));
    
    // Submit the form data
    fetch("databases/add_testimonial.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            // Display success message
            const successAlert = document.createElement("div");
            successAlert.className = "alert alert-success";
            successAlert.textContent = "Testimonial added successfully!";
            document.getElementById("addTestimonialForm").prepend(successAlert);
            
            // Clear the form
            document.getElementById("addTestimonialForm").reset();
            
            // Remove the success message after 3 seconds
            setTimeout(() => {
                successAlert.remove();
            }, 3000);
            
            // Reload testimonials list
            loadTestimonials();
        } else {
            // Display error message
            const errorAlert = document.createElement("div");
            errorAlert.className = "alert alert-danger";
            errorAlert.textContent = data.message || "An error occurred while adding the testimonial.";
            document.getElementById("addTestimonialForm").prepend(errorAlert);
            
            // Remove the error message after 3 seconds
            setTimeout(() => {
                errorAlert.remove();
            }, 3000);
        }
    })
    .catch(error => {
        console.error("Error adding testimonial:", error);
        const errorAlert = document.createElement("div");
        errorAlert.className = "alert alert-danger";
        errorAlert.textContent = "An error occurred while adding the testimonial. Please try again later.";
        document.getElementById("addTestimonialForm").prepend(errorAlert);
    });
}

function deleteTestimonial(id) {
    if (confirm("Are you sure you want to delete this testimonial? This action cannot be undone.")) {
        fetch("databases/delete_testimonial.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ id: id })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                // Reload testimonials after deletion
                loadTestimonials();
            } else {
                alert(data.message || "An error occurred while deleting the testimonial.");
            }
        })
        .catch(error => {
            console.error("Error deleting testimonial:", error);
            alert("An error occurred while deleting the testimonial. Please try again later.");
        });
    }
}

// Load existing best sellers when the modal opens
document.getElementById("editBestSellersModal").addEventListener("show.bs.modal", function() {
    loadBestSellers();
});

// Load existing logo when the logo modal opens
document.getElementById("editLogoModal").addEventListener("show.bs.modal", function() {
    loadCurrentLogo();
});

// Load existing carousel images when the carousel modal opens
document.getElementById("editCarouselModal").addEventListener("show.bs.modal", function() {
    loadCarouselImages();
});

function loadBestSellers() {
    fetch("databases/fetch_best_sellers.php")
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById("bestSellersContainer");
            if (data.status === "success" && data.bestSellers) {
                container.innerHTML = "";
                const bestSellers = data.bestSellers;
                
                if (bestSellers.length > 0) {
                    const row = document.createElement("div");
                    row.className = "row";
                    
                    bestSellers.forEach((product, index) => {
                        const col = document.createElement("div");
                        col.className = "col-md-4 mb-3";
                        col.innerHTML = `
                            <div class="card">
                                <img src="${product.image}" class="card-img-top" alt="${product.name}" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">${product.name}</h5>
                                    <p class="card-text">${product.price}</p>
                                </div>
                            </div>
                        `;
                        row.appendChild(col);
                        
                        // Populate form fields
                        document.getElementById(`bestSellerName${index+1}`).value = product.name;
                        document.getElementById(`bestSellerPrice${index+1}`).value = product.price;
                    });
                    
                    container.appendChild(row);
                } else {
                    container.innerHTML = "<p class='text-center'>No best sellers found.</p>";
                }
            } else {
                container.innerHTML = "<p class='text-center'>Error loading best sellers.</p>";
            }
        })
        .catch(error => {
            console.error("Error loading best sellers:", error);
            document.getElementById("bestSellersContainer").innerHTML = 
                "<div class='alert alert-danger'>Error loading best sellers. Please try again later.</div>";
        });
}

function loadCurrentLogo() {
    fetch("databases/fetch_logo.php")
        .then(response => response.json())
        .then(data => {
            if (data.status === "success" && data.image) {
                document.getElementById("currentLogo").src = data.image;
            } else {
                document.getElementById("currentLogo").src = "assets/homepage_images/logo/placeholder.png";
            }
        })
        .catch(error => {
            console.error("Error loading logo:", error);
            document.getElementById("currentLogo").src = "assets/homepage_images/logo/placeholder.png";
        });
}

function loadCarouselImages() {
    fetch("databases/fetch_carousel.php")
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById("carouselImagesContainer");
            if (data.status === "success" && data.images) {
                container.innerHTML = "";
                const row = document.createElement("div");
                row.className = "row";
                
                data.images.forEach((image, index) => {
                    const col = document.createElement("div");
                    col.className = "col-md-4 mb-3";
                    col.innerHTML = `
                        <div class="card">
                            <img src="${image}" class="card-img-top" alt="Featured Collection ${index+1}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">Featured Item ${index+1}</p>
                            </div>
                        </div>
                    `;
                    row.appendChild(col);
                });
                
                container.appendChild(row);
            } else {
                container.innerHTML = "<p class='text-center'>No carousel images found.</p>";
            }
        })
        .catch(error => {
            console.error("Error loading carousel images:", error);
            document.getElementById("carouselImagesContainer").innerHTML = 
                "<div class='alert alert-danger'>Error loading carousel images. Please try again later.</div>";
        });
}

// Form submissions
document.getElementById("logoForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    
    fetch("databases/update_logo.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert("Logo updated successfully!");
            // Refresh the logo
            document.getElementById("navLogo").src = data.image;
            document.getElementById("currentLogo").src = data.image;
        } else {
            alert(data.message || "An error occurred while updating the logo.");
        }
    })
    .catch(error => {
        console.error("Error updating logo:", error);
        alert("An error occurred while updating the logo. Please try again later.");
    });
});

document.getElementById("carouselForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    
    fetch("databases/update_carousel.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert("Featured collection updated successfully!");
            loadCarouselImages();
        } else {
            alert(data.message || "An error occurred while updating the featured collection.");
        }
    })
    .catch(error => {
        console.error("Error updating carousel:", error);
        alert("An error occurred while updating the featured collection. Please try again later.");
    });
});

document.getElementById("bestSellersForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    
    fetch("databases/update_best_sellers.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert("Best sellers updated successfully!");
            loadBestSellers();
        } else {
            alert(data.message || "An error occurred while updating best sellers.");
        }
    })
    .catch(error => {
        console.error("Error updating best sellers:", error);
        alert("An error occurred while updating best sellers. Please try again later.");
    });
});

document.getElementById("sizeGuideForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    
    fetch("databases/update_size_guide.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert("Size guide updated successfully!");
        } else {
            alert(data.message || "An error occurred while updating the size guide.");
        }
    })
    .catch(error => {
        console.error("Error updating size guide:", error);
        alert("An error occurred while updating the size guide. Please try again later.");
    });
});

// Initialize Bootstrap tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});

</script>
</body>
</html>