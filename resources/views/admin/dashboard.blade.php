<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Sidebar -->
  <div id="sidebar" class="sidebar">
    <h4>Admin Panel</h4>
    <a href="#" class="active">Dashboard</a>
    <a href="#">Orders</a>
   
    <a href="{{route('All_Categories')}}">Categories</a>
     <a href="{{route('All_product')}}">Products</a>
    <a href="{{route('all_video')}}">Video's</a>
    <a href="{{route('prodect_type')}}">Prodect Types</a>
    <a href="{{route('all_video')}}">Fabrics</a>
    <a href="{{route('all_video')}}">Sizes</a>
    <a href="{{route('all_video')}}">Pieces</a>
    <a href="#">Users</a>
    <a href="#">Settings</a>
  </div>

  <!-- Overlay -->
  <div class="overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <button class="btn btn-outline-light d-md-none" onclick="toggleSidebar()">☰</button>

      <!-- BRAND TEXT - Hidden on xs/sm -->
      <a class="navbar-brand ms-2 d-none d-sm-block" href="#">Admin Dashboard</a>

      <!-- BUTTONS ALWAYS VISIBLE -->
      <div class="d-flex align-items-center ms-auto">
        <a class="btn btn-outline-light btn-sm me-2" href="#">Welcome Admin</a>
        <a class="btn btn-outline-light btn-sm" href="#">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="content pt-5 mt-4">
    <div class="container-fluid">
      <h2 class="mb-4">Dashboard</h2>
      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card bg-primary text-white shadow">
            <div class="card-body">
            Total Orders
            <h4>1,250</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card bg-success text-white shadow">
            <div class="card-body">
              Total Products
              <h4>320</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-3">
          <div class="card bg-warning text-dark shadow">
            <div class="card-body">
              Total Users
              <h4>540</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-header">Recent Orders</div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped mb-0">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Customer</th>
                  <th>Order ID</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Ali Khan</td>
                  <td>#ORD123</td>
                  <td><span class="badge bg-success">Completed</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Ahmed Raza</td>
                  <td>#ORD124</td>
                  <td><span class="badge bg-warning text-dark">Pending</span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Sara Noor</td>
                  <td>#ORD125</td>
                  <td><span class="badge bg-danger">Canceled</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('sidebarOverlay');
      sidebar.classList.toggle('show');
      overlay.style.display = sidebar.classList.contains('show') ? 'block' : 'none';
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
