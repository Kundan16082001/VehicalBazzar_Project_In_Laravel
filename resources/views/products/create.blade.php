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
    <div class="container mt-5">
        <h2>Add New Vehical</h2>
        <form action="#" method="post" class="was-validated" enctype="multipart/form-data">
            @csrf
            <!-- car name -->
            <div class="mb-3 mt-3">
                <label for="name">Vehical Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter vehical name" name="name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- car model -->
            <div class="mb-3 mt-3">
                <label for="model">Model :</label>
                <input type="text" class="form-control" id="model" placeholder="Enter model" name="model" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            <!-- car company name  -->
            <div class="mb-3 mt-3">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" placeholder="Enter Car Company name" name="brand" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            <!-- car price -->
            <div class="mb-3 mt-3">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" placeholder="Car Price" name="price" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            <!-- car description -->
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" placeholder="Car Description" name="description" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            <!-- car image -->
            <div class="mb-3 mt-3">
                <label for="description">image:</label>
                <input type="file" name="iamge" id="image" class="form-control" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            
            <div class="mb-3 mt-3">
                <label for="description">Mileage:</label>
                <input type="number" class="form-control" id="description" placeholder="Car Mileage" name="mileage" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            <!-- fuel type -->
            <div class="mb-3 mt-3">
                <label for="fuel_type">Fuel Type:</label>
                <input type="text" class="form-control" id="fuel_type" placeholder="Fuel Type" name="fuel_type" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            <!-- year -->
            <div class="mb-3 mt-3">
                <label for="year">Year:</label>
                <input type="number" class="form-control" id="year" placeholder="Manufacturing Year" name="year" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>
            <!-- owner type -->
            <div class="mb-3 mt-3">
                <label for="owner_type">Owner Type:</label>
                <input type="text" class="form-control" id="owner_type" placeholder="Owner Type" name="owner_type" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field</div>
            </div>

            <!-- submit -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="{{ route('products.index') }}">back to product page</a>
        </div>
    </div>
</body>
</html>
