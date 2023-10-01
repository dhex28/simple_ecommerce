<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for the slate theme -->
    <style>
        body {
            background-color: #202226; /* Darker background color */
            color: #fff; /* Text color */
        }
        .form-box {
            background-color: #343a40; /* Slate background color */
            border: 1px solid #454d55; /* Slate border color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Add a subtle box shadow */
        }
        .form-box:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5); /* Enhance box shadow on hover */
        }
        .form-control {
            background-color: #454d55; /* Slate input background color */
            border-color: #454d55; /* Slate border color */
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
    </style>
</head>
<body>
    <!-- Edit Product Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 form-box">
                <form method="post" action="/admins/updateProduct/<?= $product['id'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?= $product['name'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" id="price" value="<?= $product['price'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="picture_url" class="form-label">Product Image</label>
                        <input type="file" name="picture_url" class="form-control" id="picture_url">
                    </div>

                    <button type="submit" class="btn btn-primary btn-md">Update Product</button>

                    <!-- Cancel Button -->
                    <button type="button" class="btn btn-secondary btn-md" onclick="cancelUpdate()">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap 5 JS and jQuery (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript function to handle cancel action -->
    <script>
        function cancelUpdate() {

            window.history.back();
            return views('admins/add_product');
        }
    </script>
</body>
</html>
