<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ecommerce Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .product-card {
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">MyShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item" href="#">Electronics</a></li>
                            <li><a class="dropdown-item" href="#">Fashion</a></li>
                            <li><a class="dropdown-item" href="#">Books</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search products" aria-label="Search" />
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="cart.php">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                                <span class="visually-hidden">cart items</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-primary text-white text-center py-5 mb-4">
        <div class="container">
            <h1 class="display-4 fw-bold">Welcome to MyShop</h1>
            <p class="lead">Find the best products at unbeatable prices</p>
            <a href="#" class="btn btn-light btn-lg">Shop Now</a>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="container mb-5">
        <h2 class="mb-4">Featured Products</h2>
        <div class="row" id="product-list">
            <!-- Product cards will be dynamically inserted here -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center py-4 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2024 MyShop. All rights reserved.</p>
            <a href="#">About Us</a> | <a href="#">Careers</a> | <a href="#">FAQs</a> | <a href="#">Terms of Service</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sample product data (to be replaced with dynamic data from backend)
        const products = [
            {
                id: 1,
                name: "Wireless Headphones",
                price: 59.99,
                image: "https://images.unsplash.com/photo-1512499617640-c2f9992e0a0a?auto=format&fit=crop&w=400&q=80"
            },
            {
                id: 2,
                name: "Smart Watch",
                price: 129.99,
                image: "https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?auto=format&fit=crop&w=400&q=80"
            },
            {
                id: 3,
                name: "Leather Jacket",
                price: 199.99,
                image: "https://images.unsplash.com/photo-1521334884684-d80222895322?auto=format&fit=crop&w=400&q=80"
            },
            {
                id: 4,
                name: "Classic Novel",
                price: 14.99,
                image: "https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=400&q=80"
            }
        ];

        function displayProducts() {
            const productList = document.getElementById("product-list");
            products.forEach(product => {
                const productCard = document.createElement("div");
                productCard.className = "col-sm-6 col-md-4 col-lg-3 mb-4";
                productCard.innerHTML = `
                    <div class="card product-card h-100 shadow-sm">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text text-primary fw-bold">$${product.price.toFixed(2)}</p>
                            <button class="btn btn-outline-primary mt-auto">Add to Cart</button>
                        </div>
                    </div>
                `;
                productList.appendChild(productCard);
            });
        }

        document.addEventListener("DOMContentLoaded", displayProducts);
    </script>
</body>
</html>
