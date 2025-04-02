<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metro District Designs - User Profile</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #e6e3dd;
    }
    .header {
      background-color: #212529;
      color: white;
      padding: 10px 20px;
      display: flex;
      align-items: center;
    }
    .sidebar {
      background-color: #0c5a5e;
      color: white;
      height: 100vh;
      padding: 0;
    }
    .sidebar .nav-link {
      color: white;
      padding: 10px 15px;
      border-radius: 0;
    }
    .sidebar .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .sidebar .nav-link.active {
      background-color: rgba(255, 255, 255, 0.2);
    }
    .content-area {
      background-color: white;
      border-radius: 4px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .breadcrumb {
      margin-bottom: 20px;
    }
    .breadcrumb-item a {
      text-decoration: none;
    }
    .footer {
      background-color: #222;
      color: white;
      padding: 8px 15px;
      position: fixed;
      bottom: 0;
      width: 250px;
    }
    .profile-label {
      font-weight: 500;
      margin-bottom: 5px;
    }
    .profile-value {
      border-bottom: 1px solid #eee;
      padding-bottom: 10px;
      margin-bottom: 15px;
    }
    .profile-picture {
      width: 100px;
      height: 100px;
      background-color: #f0f0f0;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
    }
    .profile-icon {
      font-size: 60px;
      color: #aaa;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="d-flex align-items-center">
      <img src="/api/placeholder/40/40" alt="Logo" class="me-2" style="border-radius: 50%;">
      <span class="h5 mb-0">Metro District Designs</span>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 sidebar">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Product Stock</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Sales Record</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Supplier List</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Supplier Deliveries</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Account Manager</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">Profile</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Logout</a>
          </li>
        </ul>
        <div class="footer">
          Apr 02, 2025, 11:53 PM
        </div>
      </div>
      
      <!-- Main Content -->
      <div class="col-md-9 col-lg-10 p-4">
        <div class="content-area">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </nav>
          
          <!-- User Profile Content -->
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>User Profile</h3>
            <button class="btn btn-primary">
              <i class="fas fa-camera me-1"></i> Change Profile Picture
            </button>
          </div>
          
          <div class="row">
            <div class="col-md-3">
              <div class="profile-picture">
                <i class="fas fa-user profile-icon"></i>
              </div>
            </div>
            <div class="col-md-9">
              <div class="mb-3">
                <div class="profile-label">Name</div>
                <div class="profile-value">John Rey</div>
              </div>
              
              <div class="mb-3">
                <div class="profile-label">Username</div>
                <div class="profile-value">admin</div>
              </div>
              
              <div class="mb-3">
                <div class="profile-label">Email</div>
                <div class="profile-value">jr@gmail.com</div>
              </div>
              
              <div class="mb-3">
                <div class="profile-label">Phone Number</div>
                <div class="profile-value">092312534</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>