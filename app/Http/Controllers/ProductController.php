<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
{
    // ───────────────────────────────
    // 1️⃣  Fetch All Unique Brands
    // ───────────────────────────────
    $brands = Product::select('brand')->distinct()->pluck('brand');

    // ───────────────────────────────
    // 2️⃣  Main Query for All Products
    // ───────────────────────────────
    $query = Product::query();

    // 🔍 Search Filter
    if ($request->search) {
        $query->where('name', 'like', '%' . $request->search . '%')
              ->orWhere('brand', 'like', '%' . $request->search . '%')
              ->orWhere('model', 'like', '%' . $request->search . '%');
    }

    // 🏷 Filter By Brand
    if ($request->brand) {
        $query->where('brand', $request->brand);
    }

    // 💰 Sort By Price
    if ($request->sort == "low_high") {
        $query->orderBy('price', 'asc');
    } elseif ($request->sort == "high_low") {
        $query->orderBy('price', 'desc');
    }

    // Pagination
    $products = $query->paginate(9);

    // ───────────────────────────────
    // 3️⃣  Latest Slider (Top 5)
    // ───────────────────────────────
    $latestProducts = Product::latest()->take(5)->get();

    // ───────────────────────────────
    // 4️⃣  Top-Priced (High Budget Vehicles)
    // ───────────────────────────────
    $topPricedProducts = Product::orderBy('price', 'desc')->take(6)->get();

    // ───────────────────────────────
    // 5️⃣  Affordable Cars (Low Budget)
    // ───────────────────────────────
    $lowestPricedProducts = Product::orderBy('price', 'asc')->take(6)->get();

    // ───────────────────────────────
    // 6️⃣  Return To Blade
    // ───────────────────────────────
    return view('products.index', compact(
        'products',
        'brands',
        'latestProducts',
        'topPricedProducts',
        'lowestPricedProducts'
    ));
}


    public function create()
    {
        return view('products.create');
    }

     public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'model'       => 'required|string|max:255',
            'brand'       => 'required|string|max:255',
            'price'       => 'required|numeric',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg',
            'mileage'     => 'required|string',
            'fuel_type'   => 'required|string',
            'year'        => 'required|integer',
            'owner_type'  => 'required|string',
        ]);

        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            // move to public/images folder
            $request->image->move(public_path('images'), $imageName);
        }

        Product::create([
            'name'        => $request->name,
            'model'       => $request->model,
            'brand'       => $request->brand,
            'price'       => $request->price,
            'description' => $request->description,
            'image'       => $imageName,
            'mileage'     => $request->mileage,
            'fuel_type'   => $request->fuel_type,
            'year'        => $request->year,
            'owner_type'  => $request->owner_type,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product Added Successfully!');
    }

    /**
     * Show one product
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Edit page
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update product
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'model'       => 'required|string|max:255',
            'brand'       => 'required|string|max:255',
            'price'       => 'required|numeric',
            'description' => 'required|string',
            'mileage'     => 'required|string',
            'fuel_type'   => 'required|string',
            'year'        => 'required|integer',
            'owner_type'  => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        // If new image uploaded
        if ($request->hasFile('image')) {

            if ($product->image && file_exists(public_path('images/' . $product->image))) {
                unlink(public_path('images/' . $product->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            $product->image = $imageName;
        }

        $product->update($request->except('image'));

        return redirect()->route('products.index')
            ->with('success', 'Product Updated Successfully!');
    }

    /**
     * Delete product
     */
    public function destroy(Product $product)
    {
        if ($product->image && file_exists(public_path('images/' . $product->image))) {
            unlink(public_path('images/' . $product->image));
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product Deleted Successfully!');
    }
}