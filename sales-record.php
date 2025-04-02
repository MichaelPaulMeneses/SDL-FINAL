<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail-Stock Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: white;
        }
        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }
        .sidebar {
            background-color: #1e6e6e;
            height: 100vh;
            padding-top: 20px;
        }
        .sidebar .nav-link {
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
        }
        .sidebar .active {
            background-color: #175959;
        }
        .sidebar .nav-link:hover {
            background-color: #175959;
        }
        .main-content {
            background-color: #f8f9fa;
            color: #212529;
            min-height: calc(100vh - 56px);
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
            border-radius: 0;
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #212529;
            color: white;
            border-radius: 0 !important;
            font-weight: bold;
        }
        .card-header h5 {
            margin-bottom: 0;
        }
        .table-dark {
            background-color: #212529;
        }
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 20px;
        }
        .chart-container {
            height: 150px;
        }
        .header-bar {
            background-color: #1e6e6e;
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
        }
        .logo-box {
            display: inline-flex;
            align-items: center;
            margin-right: 10px;
        }
        .logo-box img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="header-bar">
            <div class="logo-box">
                <img src="https://via.placeholder.com/30" alt="Logo">
                <h4 class="mb-0">Retail-Stock Management System</h4>
            </div>
            <div class="ms-auto">
                <button class="btn btn-outline-light btn-sm">
                    <i class="bi bi-person"></i> John Rey
                </button>
            </div>
        </div>
        
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <div class="list-group list-group-flush">
                    <a href="#" class="nav-link active">Dashboard</a>
                    <a href="#" class="nav-link">Product Stock</a>
                    <a href="#" class="nav-link">Sales Record</a>
                    <a href="#" class="nav-link">Account Manager</a>
                    <a href="#" class="nav-link">Profile</a>
                    <a href="#" class="nav-link">Logout</a>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                
                <div class="row">
                    <!-- Top Selling Product -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Top Selling Product</h5>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Rank#</th>
                                            <th>Product Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>BLACK LITE 8000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>FLAVA XTRE 10000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SHIFT X Chillax Vista 15000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Most Sold Products -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Most Sold Products</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3">Most Sold Product</h6>
                                    <div class="chart-container">
                                        <div class="row justify-content-center h-100">
                                            <div class="col-3">
                                                <div class="bg-primary h-100 w-100" style="height: 80% !important;"></div>
                                            </div>
                                            <div class="col-3">
                                                <div class="bg-success h-100 w-100" style="height: 60% !important;"></div>
                                            </div>
                                            <div class="col-3">
                                                <div class="bg-danger h-100 w-100" style="height: 40% !important;"></div>
                                            </div>
                                            <div class="col-3">
                                                <div class="bg-info h-100 w-100" style="height: 30% !important;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-muted small mt-2">Chart data visualization</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Weekly Revenue -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Weekly Revenue</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3">Weekly Revenue</h6>
                                    <div class="chart-container" id="weekly-revenue-chart">
                                        <!-- Line chart would be rendered here -->
                                        <svg viewBox="0 0 300 100" class="w-100 h-100">
                                            <polyline
                                                fill="none"
                                                stroke="#0d6efd"
                                                stroke-width="2"
                                                points="0,50 50,20 100,60 150,30 200,20 250,35 300,50"
                                            />
                                            <circle cx="0" cy="50" r="3" fill="#0d6efd" />
                                            <circle cx="50" cy="20" r="3" fill="#0d6efd" />
                                            <circle cx="100" cy="60" r="3" fill="#0d6efd" />
                                            <circle cx="150" cy="30" r="3" fill="#0d6efd" />
                                            <circle cx="200" cy="20" r="3" fill="#0d6efd" />
                                            <circle cx="250" cy="35" r="3" fill="#0d6efd" />
                                            <circle cx="300" cy="50" r="3" fill="#0d6efd" />
                                        </svg>
                                    </div>
                                    <div class="text-muted small mt-2">Chart data visualization</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Daily Revenue -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Daily Revenue</h5>
                            </div>
                            <div class="card-body">
                                <h3>₱2450.00</h3>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Items Sold -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Items Sold</h5>
                            </div>
                            <div class="card-body">
                                <h3>24 Items</h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Low Stock Products -->
                <div class="card">
                    <div class="card-header">
                        <h5>Low Stock Products</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kai Sotto</td>
                                    <td>BLACK Elite 8000</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Recently Sold Products -->
                <div class="card">
                    <div class="card-header">
                        <h5>Recently Sold Products</h5>
                    </div>
                    <div class="card-body">
                        <!-- This section appears empty in the image -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>