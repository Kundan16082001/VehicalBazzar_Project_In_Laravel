<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller-Dashboard|VehicalBazzar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <body class="bg-light">

    <nav class="navbar navbar-dark bg-primary px-4">
        <a class="navbar-brand fw-bold" href="#">Seller Dashboard</a>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </nav>

    <div class="container mt-5">
        <h2 class="fw-bold mb-4">Hello Seller 👋</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow text-center p-4">
                    <h4>Your Products</h4>
                    <p class="fs-3 fw-bold text-primary">35</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow text-center p-4">
                    <h4>Pending Orders</h4>
                    <p class="fs-3 fw-bold text-warning">8</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow text-center p-4">
                    <h4>Total Sales</h4>
                    <p class="fs-3 fw-bold text-success">₹ 1,25,000</p>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <a href="{{ route('products.create') }}" class="btn btn-primary px-4">Add New Product</a>
            <a href="{{ route('products.index') }}" class="btn btn-outline-dark px-4">View All Products</a>
        </div>

    </div>
</body>
</html>