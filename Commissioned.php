<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs - Commissioned Designs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E5E4E2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
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

        /* Search Bar Styles */
        .search-container {
            position: relative;
            margin-left: 15px;
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

        /* Search Popup Styles */
        .search-popup {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            display: none;
            width: 200px;
            z-index: 1000;
        }

        .search-popup input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-popup.active {
            display: block;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }
        
        .commissioned-hero {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .commissioned-hero h1 {
            font-size: 32px;
            color: #333;
            text-transform: uppercase;
        }
        
        .commissioned-hero p {
            font-style: italic;
            color: #666;
            margin-top: 5px;
        }
        
        .design-section {
            display: flex;
            gap: 20px;
        }
        
        .tshirt-display {
            background-color: #A99D9D;
            height: 450px;
            flex: 2;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .preview-section {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .design-preview {
            background-color: #A99D9D;
            height: 450px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .download-btn {
            background-color: #A99D9D;
            color: black;
            font-weight: bold;
            border: none;
            width: 100%;
            padding: 15px;
            text-align: center;
            cursor: pointer;
        }
        
        .tshirt-container {
            width: 80%;
            height: 80%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: width 0.3s, height 0.3s;
        }
        
        .tshirt-image {
            width: 100%;
            height: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
        }
        
        /* Modified to cover the entire t-shirt */
        .design-area {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%; /* Increased from 80% to 90% */
            height: 90%; /* Increased from 80% to 90% */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-weight: bold;
            overflow: hidden;
            text-align: center;
            transition: width 0.3s, height 0.3s;
        }
        
        .design-only {
            width: 80%;
            height: 80%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .upload-section {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        
        .upload-section input[type="file"] {
            flex: 3;
        }
        
        .upload-section button {
            flex: 1;
            background-color: #888;
            color: white;
            border: none;
            padding: 8px;
            cursor: pointer;
        }
        
        .options-section {
            margin: 20px 0;
        }
        
        .option-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .color-options {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .color-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid #ccc;
        }
        
        .color-option.active {
            border: 2px solid #333;
        }
        
        .size-options {
            display: flex;
            gap: 10px;
        }
        
        .size-option {
            padding: 5px 15px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        
        .size-option.active {
            background-color: #333;
            color: white;
        }

        /* Canvas for image processing */
        #processing-canvas {
            display: none;
        }
        
        /* Featured designs section */
        .featured-designs {
            margin-top: 30px;
            text-align: center;
        }
        
        .featured-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        
        .design-options {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .design-card {
            width: 180px;
            cursor: pointer;
            transition: transform 0.3s;
            border: 1px solid #ddd;
            padding: 10px;
            background-color: white;
        }
        
        .design-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .design-card img {
            width: 100%;
            height: 150px;
            object-fit: contain;
        }
        
        .design-card p {
            margin-top: 10px;
            font-weight: bold;
            font-size: 14px;
        }
        
        /* Style for full-coverage image designs */
        .full-design-img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Changed from contain to cover */
        }
        
        /* Upload prompt styles */
        .upload-prompt {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            border: 2px dashed #999;
            background-color: rgba(255,255,255,0.5);
        }
        
        .upload-prompt i {
            font-size: 48px;
            color: #666;
            margin-bottom: 10px;
        }
        
        .upload-prompt p {
            color: #666;
            font-weight: normal;
            text-align: center;
            margin: 0;
        }
        
        /* Media queries for responsive design */
        @media (max-width: 768px) {
            .design-section {
                flex-direction: column;
            }
            
            .tshirt-display, .preview-section {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Hidden canvas for image processing -->
    <canvas id="processing-canvas"></canvas>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="Homepage.php">
                <img src="/api/placeholder/40/40" class="rounded-circle" alt="Logo">
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
                        <a class="nav-link" href="Products.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Commissioned.php">COMMISSIONED DESIGNS</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Signup.php">SIGN-UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">LOGIN</a>
                    </li>
                    <li class="nav-item nav-icons">
                        <i class="bi bi-cart cart-icon" id="cartIcon"></i>
                        <div class="search-container">
                            <i class="bi bi-search search-icon" id="searchToggle"></i>
                            <div class="search-popup" id="searchPopup">
                                <input type="text" placeholder="Search designs..." id="searchInput">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="commissioned-hero">
            <h1>COMMISSIONED DESIGNS</h1>
            <p>"Looking for something unique? Get a custom design made just for you!"</p>
        </div>

        <div class="design-section">
            <!-- Left grid: T-shirt with logo -->
            <div class="tshirt-display">
                <div class="tshirt-container">
                    <div class="tshirt-image" id="tshirt-bg">
                        <div class="design-area" id="design-display">
                            <!-- Empty design area - will be filled by user upload -->
                            <div class="upload-prompt">
                                <i class="bi bi-cloud-arrow-up"></i>
                                <p>Upload your design to preview</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right grid: Only design preview -->
            <div class="preview-section">
                <div class="design-preview">
                    <div class="design-only" id="design-only-preview">
                        <!-- Empty preview area - will be filled by user upload -->
                        <div class="upload-prompt">
                            <i class="bi bi-cloud-arrow-up"></i>
                            <p>Design preview will appear here</p>
                        </div>
                    </div>
                </div>
                
                <div class="options-section">
                    <div class="option-title">Color</div>
                    <div class="color-options">
                        <div class="color-option" style="background-color: white;" onclick="changeColor('white')"></div>
                        <div class="color-option active" style="background-color: black;" onclick="changeColor('black')"></div>
                        <div class="color-option" style="background-color: #ff6b6b;" onclick="changeColor('#ff6b6b')"></div>
                        <div class="color-option" style="background-color: #4ecdc4;" onclick="changeColor('#4ecdc4')"></div>
                        <div class="color-option" style="background-color: #aaaaaa;" onclick="changeColor('#aaaaaa')"></div>
                    </div>
                    
                    <div class="option-title">Size</div>
                    <div class="size-options">
                        <div class="size-option" onclick="changeSize('S')">S</div>
                        <div class="size-option active" onclick="changeSize('M')">M</div>
                        <div class="size-option" onclick="changeSize('L')">L</div>
                        <div class="size-option" onclick="changeSize('XL')">XL</div>
                    </div>
                    
                    <div class="option-title">Design Coverage</div>
                    <div class="size-options">
                        <div class="size-option" onclick="changeCoverage('partial')">Partial</div>
                        <div class="size-option active" onclick="changeCoverage('full')">Full</div>
                    </div>
                </div>
                
                <div class="upload-section">
                    <input type="file" id="design-upload" accept="image/*">
                    <button onclick="previewDesign()">Preview</button>
                </div>
                
                <button class="download-btn">Add to Cart</button>
            </div>
        </div>
        
        <!-- Featured Designs Section -->
        <div class="featured-designs">
            <h2 class="featured-title">Featured Designs</h2>
            <div class="design-options">
                <div class="design-card" onclick="uploadPrompt()">
                    <img src="/api/placeholder/180/150" alt="Upload Your Design">
                    <p>Upload Your Design</p>
                </div>
                <div class="design-card" onclick="uploadPrompt()">
                    <img src="/api/placeholder/180/150" alt="Custom Design">
                    <p>Custom Design</p>
                </div>
                <div class="design-card" onclick="uploadPrompt()">
                    <img src="/api/placeholder/180/150" alt="Personalized Design">
                    <p>Personalize It</p>
                </div>
                <div class="design-card" onclick="uploadPrompt()">
                    <img src="/api/placeholder/180/150" alt="Your Creation">
                    <p>Your Creation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Track the current coverage setting
        let currentCoverage = 'full';
        let currentSize = 'M';
        
        // Initialize with black t-shirt
        document.addEventListener('DOMContentLoaded', function() {
            initializeTshirt();
            setupSearchToggle();
            setupCartButton();
            setupFileUpload();
            // Initially set to black t-shirt
            changeColor('black');
        });
        
        function initializeTshirt() {
            const tshirtBg = document.getElementById('tshirt-bg');
            // Improved t-shirt SVG with more realistic shape
            tshirtBg.style.backgroundImage = "url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"300\" height=\"350\" viewBox=\"0 0 300 350\"><defs><linearGradient id=\"shading\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"0%\"><stop offset=\"0%\" style=\"stop-color:rgba(0,0,0,0.1);stop-opacity:1\" /><stop offset=\"50%\" style=\"stop-color:rgba(255,255,255,0);stop-opacity:1\" /><stop offset=\"100%\" style=\"stop-color:rgba(0,0,0,0.1);stop-opacity:1\" /></linearGradient></defs><path d=\"M150,10 C120,10 100,20 85,35 L45,70 L15,45 C15,45 60,120 60,120 L60,340 L240,340 L240,120 C240,120 285,45 285,45 L255,70 L215,35 C200,20 180,10 150,10 Z\" fill=\"black\" stroke=\"%23333\" stroke-width=\"2\"/><path d=\"M148,10 C120,12 95,25 85,35 L85,80 C85,80 115,70 150,70 C185,70 215,80 215,80 L215,35 C205,25 180,12 152,10 Z\" fill=\"url(%23shading)\" stroke=\"none\"/><path d=\"M60,120 L60,125 L240,125 L240,120 L285,45 C285,45 240,115 240,115 L60,115 C60,115 15,45 15,45 L60,120 Z\" fill=\"rgba(0,0,0,0.05)\" stroke=\"none\"/><path d=\"M75,35 L90,10 L105,35\" stroke=\"%23444\" stroke-width=\"1\" fill=\"none\"/><path d=\"M225,35 L210,10 L195,35\" stroke=\"%23444\" stroke-width=\"1\" fill=\"none\"/></svg>')";
        }
        
        function setupSearchToggle() {
            const searchToggle = document.getElementById('searchToggle');
            const searchPopup = document.getElementById('searchPopup');
            
            searchToggle.addEventListener('click', function() {
                searchPopup.classList.toggle('active');
                if (searchPopup.classList.contains('active')) {
                    document.getElementById('searchInput').focus();
                }
            });
            
            // Close search popup when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.search-container') && 
                    searchPopup.classList.contains('active')) {
                    searchPopup.classList.remove('active');
                }
            });
        }
        
        function setupCartButton() {
            // Set up the cart icon to go to cart page
            document.getElementById('cartIcon').addEventListener('click', function() {
                window.location.href = 'Cart.php';
            });
            
            // Set up the Add to Cart button
            document.querySelector('.download-btn').addEventListener('click', function() {
                window.location.href = 'Cart.php';
            });
        }
        
        function setupFileUpload() {
            // Auto-preview when a file is selected
            document.getElementById('design-upload').addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    document.querySelector('.upload-section button').click();
                }
            });
        }
        
        function changeColor(color) {
            // Update active color selection
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(option => {
                option.classList.remove('active');
                if (option.style.backgroundColor === color) {
                    option.classList.add('active');
                }
            });
            
            // Change the t-shirt color by updating the SVG fill color
            const encodedColor = encodeURIComponent(color);
            const tshirtBg = document.getElementById('tshirt-bg');
            
            // Improved t-shirt SVG with shading and more realistic shape
            tshirtBg.style.backgroundImage = `url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"300\" height=\"350\" viewBox=\"0 0 300 350\"><defs><linearGradient id=\"shading\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"0%\"><stop offset=\"0%\" style=\"stop-color:rgba(0,0,0,0.1);stop-opacity:1\" /><stop offset=\"50%\" style=\"stop-color:rgba(255,255,255,0);stop-opacity:1\" /><stop offset=\"100%\" style=\"stop-color:rgba(0,0,0,0.1);stop-opacity:1\" /></linearGradient></defs><path d=\"M150,10 C120,10 100,20 85,35 L45,70 L15,45 C15,45 60,120 60,120 L60,340 L240,340 L240,120 C240,120 285,45 285,45 L255,70 L215,35 C200,20 180,10 150,10 Z\" fill=\"${encodedColor}\" stroke=\"%23333\" stroke-width=\"2\"/><path d=\"M148,10 C120,12 95,25 85,35 L85,80 C85,80 115,70 150,70 C185,70 215,80 215,80 L215,35 C205,25 180,12 152,10 Z\" fill=\"url(%23shading)\" stroke=\"none\"/><path d=\"M60,120 L60,125 L240,125 L240,120 L285,45 C285,45 240,115 240,115 L60,115 C60,115 15,45 15,45 L60,120 Z\" fill=\"rgba(0,0,0,0.05)\" stroke=\"none\"/><path d=\"M75,35 L90,10 L105,35\" stroke=\"%23444\" stroke-width=\"1\" fill=\"none\"/><path d=\"M225,35 L210,10 L195,35\" stroke=\"%23444\" stroke-width=\"1\" fill=\"none\"/></svg>`;
            
            console.log("Changed color to: " + color);
        }
        
        function changeSize(size) {
            // Update current size
            currentSize = size;
            
            // Update active size selection
            const sizeOptions = document.querySelectorAll('.size-options');
            sizeOptions.forEach(sizeGroup => {
                if (!sizeGroup.previousElementSibling.textContent.includes('Coverage')) {
                    const options = sizeGroup.querySelectorAll('.size-option');
                    options.forEach(option => {
                        option.classList.remove('active');
                        if (option.innerText === size) {
                            option.classList.add('active');
                        }
                    });
                }
            });
            
            // Get the t-shirt container
            const tshirtContainer = document.querySelector('.tshirt-container');
            
            // Adjust t-shirt size based on selection
            switch(size) {
                case 'S':
                    tshirtContainer.style.width = '70%';
                    tshirtContainer.style.height = '70%';
                    break;
                case 'M':
                    tshirtContainer.style.width = '80%';
                    tshirtContainer.style.height = '80%';
                    break;
                case 'L':
                    tshirtContainer.style.width = '90%';
                    tshirtContainer.style.height = '90%';
                    break;
                case 'XL':
                    tshirtContainer.style.width = '100%';
                    tshirtContainer.style.height = '100%';
                    break;
            }
            
            // Adjust design area proportionally
            const designArea = document.getElementById('design-display');
            if (currentCoverage === 'full') {
                designArea.style.width = '90%';
                designArea.style.height = '90%';
            } else {
                designArea.style.width = '40%';
                designArea.style.height = '40%';
            }
            
            console.log("Changed size to: " + size);
        }
        
        function changeCoverage(coverage) {
            // Update active coverage selection
            const coverageOptions = document.querySelectorAll('.size-options:last-of-type .size-option');
            coverageOptions.forEach(option => {
                option.classList.remove('active');
                if (option.innerText.toLowerCase() === coverage) {
                    option.classList.add('active');
                }
            });
            
            // Store current coverage setting
            currentCoverage = coverage;
            
            // Update design area size
            const designArea = document.getElementById('design-display');
            if (coverage === 'full') {
                designArea.style.width = '90%';
                designArea.style.height = '90%';
                designArea.style.top = '50%';
            } else {
                designArea.style.width = '40%';
                designArea.style.height = '40%';
                designArea.style.top = '40%';
            }
            
            console.log("Changed coverage to: " + coverage);
            
            // Refresh the upload prompt or maintain current design if one is uploaded
            if (document.querySelector('.full-design-img')) {
                // A design is already uploaded, adjust it for the new coverage
                const img = document.querySelector('.full-design-img');
                img.style.objectFit = currentCoverage === 'full' ? 'cover' : 'contain';
            }
        }
        
        function uploadPrompt() {
            // When a design card is clicked, focus on the file input
            document.getElementById('design-upload').click();
        }
        
        function previewDesign() {
            const fileInput = document.getElementById('design-upload');
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = new Image();
                    img.onload = function() {
                        // Process the image to extract just the design
                        const processedImageUrl = processImage(img);
                        
                        // Update the design on the t-shirt
                        const designArea = document.getElementById('design-display');
                        designArea.innerHTML = '';
                        
                        const designImg = document.createElement('img');
                        designImg.src = processedImageUrl;
                        designImg.className = 'full-design-img';
                        designImg.style.objectFit = currentCoverage === 'full' ? 'cover' : 'contain';
                        designArea.appendChild(designImg);
                        
                        // Update the design-only preview
                        const designOnlyPreview = document.getElementById('design-only-preview');
                        designOnlyPreview.innerHTML = '';
                        
                        const previewImg = document.createElement('img');
                        previewImg.src = processedImageUrl;
                        previewImg.style.maxWidth = '100%';
                        previewImg.style.maxHeight = '100%';
                        previewImg.style.objectFit = 'contain';
                        designOnlyPreview.appendChild(previewImg);
                    };
                    img.src = e.target.result;
                }
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                alert("Please select an image to upload");
            }
        }
        
        // Function to process the image and extract just the design
        function processImage(img) {
            // Get the hidden canvas element for processing
            const canvas = document.getElementById('processing-canvas');
            const ctx = canvas.getContext('2d');
            
            // Set canvas size to match image dimensions
            canvas.width = img.width;
            canvas.height = img.height;
            
            // Draw the original image
            ctx.drawImage(img, 0, 0, img.width, img.height);
            
            // Get image data
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const data = imageData.data;
            
            // Auto-detect background color by sampling the corners
            const corners = [
                {x: 0, y: 0},                           // top-left
                {x: canvas.width - 1, y: 0},            // top-right
                {x: 0, y: canvas.height - 1},           // bottom-left
                {x: canvas.width - 1, y: canvas.height - 1}  // bottom-right
            ];
            
            // Sample the corner pixels to determine background color
            let bgR = 0, bgG = 0, bgB = 0;
            corners.forEach(corner => {
                const index = (corner.y * canvas.width + corner.x) * 4;
                bgR += data[index];
                bgG += data[index + 1];
                bgB += data[index + 2];
            });
            
            // Average the corner colors
            bgR = Math.round(bgR / 4);
            bgG = Math.round(bgG / 4);
            bgB = Math.round(bgB / 4);
            
            // Set transparency for pixels close to the background color
            const threshold = 20; // Reduced from 30 to 20 for better design preservation
            for (let i = 0; i < data.length; i += 4) {
                const r = data[i];
                const g = data[i + 1];
                const b = data[i + 2];
                
                // Calculate color distance using Euclidean distance
                const distance = Math.sqrt(
                    Math.pow(r - bgR, 2) +
                    Math.pow(g - bgG, 2) +
                    Math.pow(b - bgB, 2)
                );
                
                // If close to background color, make transparent
                if (distance < threshold) {
                    data[i + 3] = 0; // Set alpha to 0 (transparent)
                }
            }
            
            // Put the processed image data back on the canvas
            ctx.putImageData(imageData, 0, 0);
            
            // Return the data URL of the processed image
            return canvas.toDataURL('image/png');
        }
        
        // Handle search functionality
        document.getElementById('searchInput').addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value.trim().toLowerCase();
                if (searchTerm) {
                    // Redirect to search results page
                    window.location.href = `Search.php?q=${encodeURIComponent(searchTerm)}`;
                }
            }
        });
        
        // Function to handle adding to cart
        document.querySelector('.download-btn').addEventListener('click', function() {
            const designImage = document.querySelector('.full-design-img');
            if (!designImage) {
                alert('Please upload and preview a design before adding to cart');
                return;
            }
            
            // Collect product details
            const productDetails = {
                type: 'commissioned',
                size: currentSize,
                color: document.querySelector('.color-option.active').style.backgroundColor,
                coverage: currentCoverage,
                designUrl: designImage.src
            };
            
            // Store in localStorage for cart functionality
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(productDetails);
            localStorage.setItem('cart', JSON.stringify(cart));
            
            // Show confirmation and update cart icon
            alert('Design added to cart successfully!');
        });
    </script>
</body>
</html>