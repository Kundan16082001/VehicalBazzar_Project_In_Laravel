<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer-Dashboard|VehicalBazzar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <body class="bg-light">

    <nav class="navbar navbar-light bg-white shadow-sm px-4">
        <a class="navbar-brand fw-bold" href="#">Customer Dashboard</a>
        <a href="{{ route('logout') }}" class="btn btn-outline-danger">Logout</a>
    </nav>

    <div class="container mt-5">
        <h2 class="fw-bold mb-4">Welcome Back 👋</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h4>Your Wishlist</h4>
                    <p class="text-muted">Items you saved for later.</p>
                    <a href="#" class="btn btn-primary w-100">View Wishlist</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h4>Your Orders</h4>
                    <p class="text-muted">Check your order history.</p>
                    <a href="#" class="btn btn-success w-100">View Orders</a>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <a href="{{ route('products.index') }}" class="btn btn-dark px-4">Browse Products</a>
        </div>
    </div>    
</body>
</html>