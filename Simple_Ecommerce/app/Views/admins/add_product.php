<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for the dark theme -->
    <style>
        body {
            background-color: #222; /* Dark background color */
            color: #fff; /* Text color */
        }
        .form-control {
            background-color: #333; /* Dark input background color */
            border-color: #555; /* Dark border color */
            color: #fff; /* Input text color */
        }
        .btn-primary {
            background-color: #007bff; /* Primary button background color */
            border-color: #007bff; /* Primary button border color */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Primary button background color on hover */
            border-color: #0056b3; /* Primary button border color on hover */
        }
        .alert-success {
            background-color: #28a745; /* Success alert background color */
            border-color: #28a745; /* Success alert border color */
        }
        .table {
            background-color: #333; /* Dark table background color */
            color: #fff; /* Table text color */
        }
        th, td {
            border-color: #555; /* Table border color */
        }
        img {
            max-width: 100px; /* Max width for product images */
        }
        /* Custom CSS for Admin title */
        .admin-title {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <!-- Admin Title -->
    <div class="admin-title">
        Admin
    </div>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2>Add Product</h2>
        <!-- Display success message if available -->
            <?php if (session()->getFlashdata('successMessage')) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('successMessage') ?></div>
            <?php endif; ?>

            <!-- Display error message if available -->
            <?php if (session()->getFlashdata('errorMessage')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('errorMessage') ?></div>
            <?php endif; ?>
        <!-- Form for adding a product -->
        <div class="row mt-3">
            <div class="col-md-6">
                <form method="post" action="/admins/addProduct" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control bg-dark text-white" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control bg-dark text-white" id="price" required>
                    </div>

                    <div class="mb-3">
                        <label for="picture_url" class="form-label">Product Image</label>
                        <input type="file" name="picture_url" class="form-control bg-dark text-white" id="picture_url" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>

        <!-- Display Products Table -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2>All Products</h2>
                <?php if (isset($success)) : ?>
                <div class="alert alert-success"><?= $success ?></div>
                <?php endif; ?>
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th> <!-- New column for Edit and Delete buttons -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($products)) : ?>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td><?= $product['name'] ?></td>
                                    <td>$<?= number_format($product['price'], 2) ?></td>
                                    <td>
                                        <img src="<?= base_url($product['picture_url']) ?>" alt="<?= $product['name'] ?>">
                                    </td>
                                    <td>
                                        <a href="/admins/editProduct?id=<?= $product['id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="/admins/deleteProduct/<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="4">No products found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap 5 JS and jQuery (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
