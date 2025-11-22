<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard|VehicalBazzar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <body class="bg-light">

    <nav class="navbar navbar-dark bg-dark px-4">
        <a class="navbar-brand fw-bold" href="#">Admin Dashboard</a>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </nav>

    <div class="container mt-5">
        <h2 class="fw-bold mb-4">Welcome, Admin 👋</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow text-center p-4">
                    <h4>Total Users</h4>
                    <p class="fs-3 fw-bold text-primary">152</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow text-center p-4">
                    <h4>Total Products</h4>
                    <p class="fs-3 fw-bold text-success">89</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow text-center p-4">
                    <h4>Active Sellers</h4>
                    <p class="fs-3 fw-bold text-warning">12</p>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <a href="{{ route('products.index') }}" class="btn btn-primary px-4">Manage Products</a>
            <a href="#" class="btn btn-secondary px-4">Manage Users</a>
        </div>

    </div>
    
</body>
</html>