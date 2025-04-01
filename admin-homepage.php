<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metro District Designs</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #e8e6e1;
    }
    .header {
      background-color: #222;
      color: white;
      padding: 10px 20px;
    }
    .dashboard-container {
      background-color: #9e9e9e;
      padding: 30px;
      max-width: 800px;
      margin: 0 auto;
    }
    .menu-icon {
      background-color: #222;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100px;
      width: 100%;
      margin-bottom: 15px;
      border-radius: 0;
      transition: all 0.3s;
    }
    .menu-icon:hover {
      transform: scale(1.05);
      background-color: #333;
    }
    .menu-item {
      text-align: center;
      margin-bottom: 20px;
    }
    .menu-icon i {
      font-size: 28px;
      margin-bottom: 8px;
    }
    .menu-icon .title {
      font-size: 14px;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
    <h5 class="mb-0">Metro District Designs</h5>
  </div>

  <!-- Dashboard Container -->
  <div class="dashboard-container mt-3">
    <div class="container">
      <div class="row row-cols-3 g-3">
        <!-- Dashboard -->
        <div class="col menu-item">
          <div class="menu-icon">
            <i class="bi bi-grid-3x3-gap-fill"></i>
            <div class="title">Dashboard</div>
          </div>
        </div>
        
        <!-- Product Stock -->
        <div class="col menu-item">
          <div class="menu-icon">
            <i class="bi bi-clipboard-check"></i>
            <div class="title">Product stock</div>
          </div>
        </div>
        
        <!-- Sales Record -->
        <div class="col menu-item">
          <div class="menu-icon">
            <i class="bi bi-journal-text"></i>
            <div class="title">Sales Record</div>
          </div>
        </div>
        
        <!-- Account Manager -->
        <div class="col menu-item">
          <div class="menu-icon">
            <i class="bi bi-people-fill"></i>
            <div class="title">Account Manager</div>
          </div>
        </div>
        
        <!-- Profile -->
        <div class="col menu-item">
          <div class="menu-icon">
            <i class="bi bi-person-circle"></i>
            <div class="title">Profile</div>
          </div>
        </div>
        
        <!-- Logout -->
        <div class="col menu-item">
          <div class="menu-icon">
            <i class="bi bi-box-arrow-right"></i>
            <div class="title">Logout</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap and Bootstrap Icons JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
</body>
</html>