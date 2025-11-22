<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VehicalBazzar - Vehicles Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container my-4">
        <!-- Hero Section -->
        <div class="hero-section p-5 mb-5 text-center text-white rounded"
            style="background: url('/images/hero.jpg') center/cover; height: 300px; display: flex; align-items: center; justify-content: center;">
            <h1 class="fw-bold display-5">Find Your Dream Car</h1>
        </div>

        <!-- Search & Filter Section -->
        <div class="card shadow-sm p-3 mb-4">
            <form action="{{ route('products.index') }}" method="get">
                <div class="row g-3">

                    <!-- Search Bar -->
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control"
                            placeholder="Search Vehicles..." value="{{ request('search') }}">
                    </div>

                    <!-- Brand Filter -->
                    <div class="col-md-3">
                        <select name="brand" class="form-control">
                            <option value="">Select Brand</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand }}" {{ request('brand') == $brand ? 'selected' : '' }}>
                                    {{ $brand }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Sorting -->
                    <div class="col-md-2">
                        <select name="sort" class="form-control">
                            <option value="">Sort By</option>
                            <option value="low_high" {{ request('sort') == 'low_high' ? 'selected' : '' }}>
                                Price: Low to High
                            </option>
                            <option value="high_low" {{ request('sort') == 'high_low' ? 'selected' : '' }}>
                                Price: High to Low
                            </option>
                        </select>
                    </div>

                    <!-- Submit -->
                    <div class="col-md-12 text-end mt-3">
                        <button class="btn btn-primary px-4">Search</button>
                    </div>

                </div>
            </form>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Latest Products Slider -->
        <h3 class="mb-4">Latest Vehicles</h3>
        <div id="latestProductCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach($latestProducts as $index => $product)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="width: 22rem;">

                                @if($product->image)
                                    <img src="{{ asset('images/'.$product->image) }}" class="card-img-top"
                                        style="height: 250px; object-fit: cover;">
                                @else
                                    <img src="https://via.placeholder.com/300" class="card-img-top">
                                @endif

                                <div class="card-body text-center">
                                    <h5>{{ $product->name }}</h5>
                                    <p class="text-muted">{{ $product->brand }}</p>
                                    <a href="{{ route('products.show', $product->id) }}"
                                        class="btn btn-primary">View Details</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Slider Buttons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#latestProductCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#latestProductCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- Top Priced Section -->
        <h3 class="mb-4">Top Variant Vehicles</h3>
        <div class="row mb-5">
            @foreach($topPricedProducts as $p)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">

                        @if($p->image)
                            <img src="{{ asset('images/'.$p->image) }}"
                                 class="card-img-top" style="height: 220px; object-fit: cover;">
                        @endif

                        <div class="card-body text-center">
                            <h5>{{ $p->name }}</h5>
                            <p class="text-primary fw-bold">₹ {{ $p->price }}/-</p>
                            <a href="{{ route('products.show',$p->id) }}" class="btn btn-primary">View Details</a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <!-- Affordable Section -->
        <h3 class="mb-4">Affordable Cars</h3>
        <div class="row mb-5">
            @foreach($lowestPricedProducts as $p)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">

                        @if($p->image)
                            <img src="{{ asset('images/'.$p->image) }}"
                                 class="card-img-top" style="height: 220px; object-fit: cover;">
                        @endif

                        <div class="card-body text-center">
                            <h5>{{ $p->name }}</h5>
                            <p class="text-primary fw-bold">₹ {{ $p->price }}/-</p>
                            <a href="{{ route('products.show',$p->id) }}" class="btn btn-primary">View Details</a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <!-- All Products -->
        <h3 class="mb-4">All Vehicles</h3>
        <div class="row mb-5">
            @foreach($products as $p)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">

                        @if($p->image)
                            <img src="{{ asset('images/'.$p->image) }}"
                                 class="card-img-top" style="height: 220px; object-fit: cover;">
                        @endif

                        <div class="card-body text-center">
                            <h5>{{ $p->name }}</h5>
                            <p class="text-primary fw-bold">₹ {{ $p->price }}/-</p>
                            <a href="{{ route('products.show',$p->id) }}" class="btn btn-primary">View Details</a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-3">
            {{ $products->links() }}
        </div>

    </div>

</body>
</html>
