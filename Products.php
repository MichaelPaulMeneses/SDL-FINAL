<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        * {
            font-family: Helvetica, sans-serif;
        }
        
        body {
            background-color: #E5E4E2;
            font-family: Helvetica, sans-serif;
            font-weight: bold; 
        }
        .navbar-custom {
            background-color: #1E1E1E; 
            height: 70px;
        }
        .navbar-custom .navbar-brand {
            display: flex;
            align-items: center;
            color: white;
        }
        .navbar-custom .navbar-brand img {
            height: 40px;
            width: 40px;
            margin-right: 10px;
        }
        .navbar-custom .nav-link {
            color: white;
            font-weight: bold;
            margin: 0 15px;
        }
        .login-links {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }
        .login-links:hover {
            color: #888;
        }
        .content {
            background-color: #E5E4E2;
            color: black;
        }
        .product-card {
            transition: all 0.3s ease;
            border-radius: 8px;
            background-color: white;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            position: relative;
            font-family: Helvetica, sans-serif;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 16px rgba(0,0,0,0.2);
        }
        .product-card:hover .quick-view {
            opacity: 1;
        }
        .placeholder-design {
            height: 250px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .placeholder-design img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .product-card:hover .placeholder-design img {
            transform: scale(1.1);
        }
        .product-info {
            padding: 15px;
            text-align: center;
            font-family: Helvetica,  sans-serif;
        }
        .product-info h5 {
            margin-bottom: 5px;
            font-weight: 600;
            font-family: Helvetica,  sans-serif;
        }
        .product-info p {
            color: #555;
            font-weight: bold;
            font-family: Helvetica,  sans-serif;
        }
        .quick-view {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background-color: rgba(0,0,0,0.7);
            color: white;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            cursor: pointer;
            font-family: Helvetica,  sans-serif;
        }
        .carousel-indicators {
            margin-bottom: 0;
        }
        .carousel-indicators [data-bs-target] {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }
        .carousel-control-prev, .carousel-control-next {
            width: 10%;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .product-card:hover .carousel-control-prev,
        .product-card:hover .carousel-control-next {
            opacity: 0.8;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(0,0,0,0.6);
            border-radius: 50%;
            padding: 10px;
        }
        .add-to-cart {
            background-color: #1E1E1E;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            margin-top: 5px;
            transition: background-color 0.3s ease;
            width: 100%;
            cursor: pointer;
            font-family: Helvetica, sans-serif;
        }
        .add-to-cart:hover {
            background-color: #444;
        }
        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e74c3c;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            z-index: 1;
            font-family: Helvetica, sans-serif;
        }
        h2 {
            font-family: Helvetica, sans-serif;
        }
        button, .btn {
            font-family: Helvetica, sans-serif;
        }
    </style>
</head>
<body class="content">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="Homepage.php">
                <img src="/api/placeholder/40/40" class="rounded-circle" alt="Logo">
                Metro District Designs
            </a>
            <div class="mx-auto">
                <a href="Homepage.php" class="nav-link d-inline-block">HOME</a>
                <a href="Products.php" class="nav-link d-inline-block">PRODUCTS</a>
                <a href="Inquiry.php" class="nav-link d-inline-block">INQUIRY</a>
            </div>
            <div>
                <a href="Signup.php" class="login-links">SIGN-UP</a>
                <a href="Login.php" class="login-links">LOGIN</a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <h2 class="mb-4">ALL PRODUCTS</h2>
        <div class="row">
            <?php
            // Define the directory where T-shirt images are stored
            $dir = "images/TSHIRTS/";
            
            // Get all files with these extensions
            $fileTypes = array('jpg', 'jpeg', 'png', 'gif');
            
            // Initialize a counter for the products
            $productCount = 0;
            $maxProducts = 20; // Maximum number of products to display
            
            // Sample product data (for demonstration if files aren't found)
            $demoProducts = array(
                array("name" => "Urban Metro Tee", "price" => "25.99", "badge" => "New"),
                array("name" => "District Line Hoodie", "price" => "35.99", "badge" => ""),
                array("name" => "City Skyline Tee", "price" => "22.99", "badge" => "Bestseller"),
                array("name" => "Underground Art Tee", "price" => "24.99", "badge" => ""),
                array("name" => "Metro Map Design", "price" => "27.99", "badge" => "Limited"),
                array("name" => "Subway Token Tee", "price" => "21.99", "badge" => ""),
                array("name" => "Altitude Collection", "price" => "29.99", "badge" => "New"),
                array("name" => "Urban Explorer Tee", "price" => "26.99", "badge" => ""),
                array("name" => "District Vibes Hoodie", "price" => "39.99", "badge" => "Hot"),
                array("name" => "Downtown Express Tee", "price" => "23.99", "badge" => ""),
                array("name" => "Cityscape Graphic Tee", "price" => "28.99", "badge" => ""),
                array("name" => "Metro Line Art", "price" => "22.99", "badge" => "Sale"),
                array("name" => "Urban District Special", "price" => "32.99", "badge" => ""),
                array("name" => "Night City Lights Tee", "price" => "25.99", "badge" => "New"),
                array("name" => "Central Station Design", "price" => "24.99", "badge" => ""),
                array("name" => "Street Art Collection", "price" => "27.99", "badge" => "Popular"),
                array("name" => "Graffiti Style Tee", "price" => "26.99", "badge" => ""),
                array("name" => "Metro Vintage Logo", "price" => "23.99", "badge" => ""),
                array("name" => "Urban Transit Hoodie", "price" => "37.99", "badge" => "Last Few"),
                array("name" => "City Blocks Design", "price" => "29.99", "badge" => "")
            );
            
            // Try to get files from directory
            $files = array();
            foreach($fileTypes as $type) {
                $typeFiles = glob($dir . "*." . $type);
                if($typeFiles) {
                    $files = array_merge($files, $typeFiles);
                }
            }
            
            // Check if we found any real files
            if(count($files) > 0) {
                // Use real files from the directory
                foreach($files as $file) {
                    if($productCount >= $maxProducts) break;
                    
                    $productCount++;
                    $filename = basename($file);
                    // Extract product name from filename (remove extension)
                    $productName = pathinfo($filename, PATHINFO_FILENAME);
                    $productName = str_replace('_', ' ', $productName);
                    $productName = ucwords($productName);
                    
                    // Random badge for some products
                    $badges = array('', '', 'New', 'Hot', 'Sale', 'Limited');
                    $badge = $badges[array_rand($badges)];
            ?>
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <?php if(!empty($badge)): ?>
                    <div class="product-badge"><?php echo $badge; ?></div>
                    <?php endif; ?>
                    
                    <div id="productCarousel<?php echo $productCount; ?>" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="placeholder-design">
                                    <img src="<?php echo $file; ?>" alt="T-shirt Design Front">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="placeholder-design">
                                    <img src="/api/placeholder/300/250" alt="T-shirt Design Back">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="placeholder-design">
                                    <img src="/api/placeholder/300/250" alt="T-shirt Design Detail">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="quick-view">
                            <i class="bi bi-eye"></i> Quick View
                        </div>
                    </div>
                    
                    <div class="product-info">
                        <h5><?php echo $productName; ?></h5>
                        <p>$<?php echo number_format(rand(1999, 3999) / 100, 2); ?></p>
                        <button class="add-to-cart">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                // If no real files found, use demo data
                for($i = 0; $i < min(count($demoProducts), $maxProducts); $i++) {
                    $productCount++;
                    $colorVariations = array('/api/placeholder/300/250', '/api/placeholder/300/250', '/api/placeholder/300/250');
            ?>
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <?php if(!empty($demoProducts[$i]["badge"])): ?>
                    <div class="product-badge"><?php echo $demoProducts[$i]["badge"]; ?></div>
                    <?php endif; ?>
                    
                    <div id="productCarousel<?php echo $productCount; ?>" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="placeholder-design">
                                    <img src="<?php echo $colorVariations[0]; ?>" alt="T-shirt Design Front">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="placeholder-design">
                                    <img src="<?php echo $colorVariations[1]; ?>" alt="T-shirt Design Back">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="placeholder-design">
                                    <img src="<?php echo $colorVariations[2]; ?>" alt="T-shirt Design Detail">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel<?php echo $productCount; ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="quick-view">
                            <i class="bi bi-eye"></i> Quick View
                        </div>
                    </div>
                    
                    <div class="product-info">
                        <h5><?php echo $demoProducts[$i]["name"]; ?></h5>
                        <p>$<?php echo $demoProducts[$i]["price"]; ?></p>
                        <button class="add-to-cart">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            
            // If no products were found or displayed, show message
            if($productCount === 0) {
                echo "<div class='col-12 text-center'><h3>No T-shirt designs found</h3></div>";
            }
            ?>
        </div>
    </div>
    <div class="container py-4">
        <h2 class="mb-4">PRE-MADE DESIGN</h2>
    </div>

    <div class="container py-4">
        <h2 class="mb-4">COMMISSIONED DESIGN</h2>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
    <script>
    // JavaScript to handle carousel activation on hover
    document.addEventListener('DOMContentLoaded', function() {
        const productCards = document.querySelectorAll('.product-card');
        
        productCards.forEach(card => {
            const carousel = card.querySelector('.carousel');
            let carouselInstance = null;
            
            // Initialize Bootstrap carousel instance when hovering
            card.addEventListener('mouseenter', function() {
                carouselInstance = new bootstrap.Carousel(carousel, {
                    interval: 2000,  // Change slide every 2 seconds when hovering
                    wrap: true       // Loop back to first slide
                });
                carouselInstance.cycle(); // Start the carousel
            });
            
            // Stop the carousel when mouse leaves
            card.addEventListener('mouseleave', function() {
                if (carouselInstance) {
                    carouselInstance.pause(); // Pause the carousel
                    // Return to the first slide when mouse leaves
                    carouselInstance.to(0);
                }
            });
        });
        
        // Add to Cart button functionality - Redirect to Cart page
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Redirect to the Cart page when Add to Cart is clicked
                window.location.href = 'Cart.php';
            });
        });
    });
    </script>
</body>
</html>