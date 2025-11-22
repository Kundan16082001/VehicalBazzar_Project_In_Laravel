<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vehicalBazzar-Add vehicals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container my-5">

    <!-- ==============================
         PRODUCT TITLE & BANNER
    =============================== -->
    <div class="text-center mb-4">
        <h1 class="fw-bold">{{ $product->name }}</h1>
        <p class="text-muted">{{ $product->brand }} • {{ $product->fuel_type }}</p>
    </div>

    <div class="row g-4">

        <!-- ==============================
             LEFT: IMAGE GALLERY
        =============================== -->
        <div class="col-md-6">
            <div class="card shadow-sm p-3">
                <img src="{{ $product->image }}" class="img-fluid rounded mb-3" style="height: 350px; object-fit: cover;">

                <div class="d-flex gap-2 mt-2">
                    <img src="{{ $product->image }}" class="rounded" width="80" height="60" style="object-fit: cover;">
                    <img src="{{ $product->image }}" class="rounded" width="80" height="60" style="object-fit: cover;">
                    <img src="{{ $product->image }}" class="rounded" width="80" height="60" style="object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- ==============================
             RIGHT: VEHICLE DETAILS
        =============================== -->
        <div class="col-md-6">

            <div class="card shadow-sm p-4">

                <!-- Price -->
                <h3 class="fw-bold text-primary">₹{{ number_format($product->price) }}</h3>

                <hr>

                <!-- Basic Info -->
                <h5 class="fw-semibold mb-3">Vehicle Details</h5>
                <ul class="list-group mb-4">

                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Brand:</strong> <span>{{ $product->brand }}</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Model:</strong> <span>{{ $product->model }}</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Fuel Type:</strong> <span>{{ $product->fuel_type }}</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Year:</strong> <span>{{ $product->year }}</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Kilometers:</strong> <span>{{ $product->km }} KM</span>
                    </li>

                </ul>

                <!-- CTA Buttons -->
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-primary w-50">Buy Now</a>
                    <a href="#" class="btn btn-outline-danger w-50">Add to Wishlist</a>
                </div>

            </div>
        </div>

    </div>

    <!-- ==============================
         DESCRIPTION SECTION
    =============================== -->
    <div class="card shadow-sm p-4 mt-5">
        <h4 class="fw-bold mb-3">Description</h4>
        <p class="text-muted">
            {{ $product->description }}
        </p>
    </div>

</div>

</body>

</html>
