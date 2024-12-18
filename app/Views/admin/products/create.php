<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/lucide-static@0.321.0/font/lucide.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-content {
            display: flex;
            margin-top: 80px;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #ffffff;
            box-shadow: 4px 0 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-right: 20px;
        }

        .content-area {
            flex-grow: 1;
            padding: 20px;
            background-color: #f5f5f5;
            min-height: 100vh;
            overflow-y: auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
        }

        .form-group button {
            background-color: #4caf50;
            color: white;
            padding: 0.75rem 1.25rem;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        nav {
            z-index: 10;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-[#2C3E50] text-white p-4 shadow-md fixed top-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center max-w-screen-xl px-6">
            <div class="flex items-center space-x-3">
                <i data-lucide="shield" class="w-8 h-8"></i>
                <h1 class="text-xl font-bold">LeafletPro Admin Panel</h1>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button id="notifikasi-toggle" class="hover:text-gray-300 transition">
                        <i data-lucide="bell" class="w-6 h-6"></i>
                        <span
                            class="absolute -top-2 -right-2 bg-red-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                </div>
                <div class="flex items-center space-x-2">
                    <img src="https://via.placeholder.com/40" alt="Admin Profile" class="rounded-full w-10 h-10">
                    <div>
                        <p class="text-sm font-semibold">Admin User</p>
                        <p class="text-xs text-gray-400">Administrator</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container mx-auto mt-20 px-4 max-w-screen-xl">
        <div class="main-content">
            <!-- Sidebar Menu -->
            <div class="sidebar bg-white rounded-xl shadow-md p-6 border-l-4 border-[#2C3E50]">
                <ul class="space-y-4">
                    <li>
                        <a href="/admin/dashboard" class="flex items-center hover:bg-gray-100 p-3 rounded-lg">
                            <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/admin/products" class="flex items-center hover:bg-gray-100 p-3 rounded-lg">
                            <i data-lucide="package" class="w-5 h-5 mr-3"></i>
                            Manage Products
                        </a>
                    </li>
                    <li>
                        <a href="/admin/orders" class="flex items-center hover:bg-gray-100 p-3 rounded-lg">
                            <i data-lucide="truck" class="w-5 h-5 mr-3"></i>
                            Manage Orders
                        </a>
                    </li>
                    <li>
                        <a href="/admin/consultations" class="flex items-center hover:bg-gray-100 p-3 rounded-lg">
                            <i data-lucide="message-square" class="w-5 h-5 mr-3"></i>
                            Manage Consultations
                        </a>
                    </li>
                    <li>
                        <a href="/admin/projects" class="flex items-center hover:bg-gray-100 p-3 rounded-lg">
                            <i data-lucide="clipboard-list" class="w-5 h-5 mr-3"></i>
                            Manage Projects
                        </a>
                    </li>
                    <li>
                        <a href="/admin/logout" class="flex items-center hover:bg-gray-100 p-3 rounded-lg text-red-600">
                            <i data-lucide="log-out" class="w-5 h-5 mr-3"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Create Product Form -->
            <div class="content-area bg-gray-50 rounded-xl shadow-md p-6 mb-6 border-t-4 border-[#2C3E50]">
                <h2 class="text-2xl font-bold text-[#2C3E50] mb-6">Create New Product</h2>

              <form action="/admin/products/store" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                      <label for="image">Image</label>
    <input type="file" name="image" id="image">
                    </div>

                    <div class="form-group flex space-x-4">
                        <button type="submit"
                            class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition">
                            Save
                        </button>
                        <a href="/admin/products"
                            class="bg-gray-600 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition">
                            Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>

</html>