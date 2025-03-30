<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E5E4E2; 
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
        .placeholder-design {
            background-color: #A99D9D;
            height: 250px;
            margin-bottom: 15px;
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
                <a href="Commissioned.php" class="nav-link d-inline-block">COMMISSIONED DESIGNS</a>
            </div>
            <div>
                <a href="Signup.php" class="login-links">SIGN-UP</a>
                <a href="Login.php" class="login-links">LOGIN</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4">ALL PRODUCTS</h2>
        <div class="row">
            <!-- Repeat this block 9 times -->
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="placeholder-design"></div>
                <div class="text-center">
                    <h5>Test Design</h5>
                    <p>Price ₽</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>