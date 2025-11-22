# 🚗 **Vehicle Bazzar – Role Based Laravel Project**

A modern Laravel-based Vehicle Marketplace where **Admin**, **Seller**, and **Customer** have different dashboards and permissions.
The platform allows product listing, filtering, price sorting, authentication, and media uploads.

---

## 📌 **Features**

### ✅ **Authentication & Roles**

* Register & Login using Laravel Auth (custom)
* Roles:

  * **Admin**
  * **Seller**
  * **Customer**
* Role-Based Redirect
* Protected dashboards

---

### ✅ **Product Management**

* Add Products (Seller/Admin)
* Product Image Upload
* Manage Products (CRUD)
* Product Details Page
* Dynamic Pagination

---

### ✅ **Product Listing Page**

* Product slider (latest 5)
* Top Price Section
* Low Budget Section
* Search Bar
* Filter:

  * Brand
  * Fuel Type
  * Price Range
* Sort:

  * Price High → Low
  * Price Low → High
* Beautiful Hero Banner

---

### ✅ **Dashboards**

* **Admin Dashboard**

  * Total Users
  * Total Products
  * Manage Sellers
  * Manage Customers
* **Seller Dashboard**

  * My Products
  * Add Product
  * Edit/Delete Product
* **Customer Dashboard**

  * View Products
  * Wishlist/Cart (optional extension)

---

## 🛠️ **Tech Stack**

* Laravel 10 / Laravel 11
* Blade Templates
* Bootstrap 5
* MySQL Database
* Laravel Auth Guards
* FontAwesome Icons

---

## 📥 **Installation Guide**

### 1️⃣ **Clone Repository**

```bash
git clone https://github.com/yourusername/vehicle-bazzar.git
cd vehicle-bazzar
```

### 2️⃣ **Install Dependencies**

```bash
composer install
npm install
npm run build
```

### 3️⃣ **Setup Environment**

Create `.env`:

```bash
cp .env.example .env
```

Update DB Config:

```
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ **Generate Key**

```bash
php artisan key:generate
```

### 5️⃣ **Run Migrations**

```bash
php artisan migrate
```

### 6️⃣ **Run Server**

```bash
php artisan serve
```

Visit:
👉 `http://127.0.0.1:8000`

---

## 👨‍💻 **User Roles**

You can create users manually or via registration page.

### Example Dummy Accounts

| Role     | Email                                           | Password |
| -------- | ----------------------------------------------- | -------- |
| Admin    | [admin@gmail.com](mailto:admin@gmail.com)       | 123456   |
| Seller   | [seller@gmail.com](mailto:seller@gmail.com)     | 123456   |
| Customer | [customer@gmail.com](mailto:customer@gmail.com) | 123456   |

---

## 🗂️ **Project Structure**

```
app/
 ├─ Http/Controllers/
 │   ├─ AuthController.php
 │   ├─ ProductController.php
 ├─ Models/
 │   ├─ User.php
 │   ├─ Product.php
resources/views/
 ├─ auth/
 │   ├─ login.blade.php
 │   ├─ register.blade.php
 ├─ dashboard/
 │   ├─ admin.blade.php
 │   ├─ seller.blade.php
 │   ├─ customer.blade.php
 ├─ products/
 │   ├─ index.blade.php
 │   ├─ show.blade.php
 ├─ layouts/app.blade.php
routes/
 ├─ web.php
```

---

## 📸 **Screenshots**

> Add screenshots of:

* Login Page
* Admin Dashboard
* Seller Product Form
* Product Listing Page

---

## 🚀 **Future Enhancements**

* Add Cart & Checkout
* Add Wishlist
* Add Review/Rating System
* Admin Analytics Dashboard
* API support with JWT

---

## 🤝 **Contributing**

Pull requests are welcome!
For major changes, please open an issue first.

---

## ⭐ **Support**

If you like this project, consider giving it a **star ⭐ on GitHub!**

---

If you want, I can also generate:

✅ API Routes
✅ ER Diagram
✅ Database Schema
✅ UI Mockups
✅ Deployment Guide

Just tell me!
