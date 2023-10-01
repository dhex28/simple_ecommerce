<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Controllers\BaseController;

class Admins extends BaseController
{
  public function index()
  {
      $productModel = new ProductModel();
      $data['products'] = $productModel->findAll(); // Retrieve all products from the database
      $data['successMessage'] = session()->getFlashdata('successMessage'); // Get success message from flashdata
      $data['errorMessage'] = session()->getFlashdata('errorMessage'); // Get error message from flashdata

      return view('admins/add_product', $data); // Load the "admins/add_product" view and pass the product data and messages
  }

  public function addProduct()
  {
      // Handle the form submission to add a new product to the database
      if ($this->request->getMethod() === 'post') {
          $productModel = new ProductModel();

          // Validate the form data here if needed
          // For simplicity, we assume the data is valid in this example

          // Upload product image
          $picture = $this->request->getFile('picture_url');
          $picture->move(ROOTPATH . 'public/uploads'); // Move the uploaded file to the "public/uploads" directory
          $picturePath = 'uploads/' . $picture->getName(); // Store the file path in the database

          $data = [
              'name' => $this->request->getPost('name'),
              'picture_url' => $picturePath, // Store the file path
              'price' => $this->request->getPost('price'),
          ];

          if ($productModel->insert($data)) {
              // Product added successfully
              session()->setFlashdata('successMessage', 'Product added successfully');
          } else {
              // Error occurred while adding the product
              session()->setFlashdata('errorMessage', 'Failed to add the product');
          }
      }

      // Redirect back to the admin page
      return redirect()->to('/add');
  }


  public function deleteProduct($id)
{
    // Load the ProductModel
    $productModel = new \App\Models\ProductModel();

    // Check if the product exists
    $product = $productModel->find($id);
    if (!$product) {
        // Handle the case where the product does not exist (e.g., show an error message)
        session()->setFlashdata('errorMessage', 'Product not found.');
    } else {
        // Perform the deletion
        if ($productModel->delete($id)) {
            // Product deleted successfully
            session()->setFlashdata('successMessage', 'Product deleted successfully');
        } else {
            // Error occurred while deleting
            session()->setFlashdata('errorMessage', 'Failed to delete the product');
        }
    }

    // Redirect back to the admin page
    return redirect()->to('/add');
}


  public function editProduct()
  {
      // Get the product ID from the query string
      $id = $this->request->getGet('id');

      // Load the ProductModel
      $productModel = new \App\Models\ProductModel();

      // Fetch the product details by ID
      $product = $productModel->find($id);

      if (!$product) {
          // Handle the case where the product does not exist (e.g., show an error message)
          session()->setFlashdata('errorMessage', 'Product not found.');
          return redirect()->to('/add');
      }

      // Pass the product data to the "Edit" view
      $data['product'] = $product;

      return view('admins/edit_product', $data);
  }

  public function updateProduct($id)
  {
      // Load the ProductModel
      $productModel = new \App\Models\ProductModel();

      // Fetch the product by ID
      $product = $productModel->find($id);

      if (!$product) {
          // Handle the case where the product does not exist (e.g., show an error message)
          session()->setFlashdata('errorMessage', 'Product not found.');
          return redirect()->to('/add');
      }

      // Handle the form submission to update the product
      if ($this->request->getMethod() === 'post') {
          // Validate and update the product data here

          // Example update code:
          $data = [
              'name' => $this->request->getPost('name'),
              'price' => $this->request->getPost('price'),
          ];

          // Check if a new image file is uploaded
          $newPicture = $this->request->getFile('picture_url');
          if ($newPicture->isValid()) {
              // Delete the old image file (if necessary)
              // Upload and store the new image file
              $newPicture->move(ROOTPATH . 'public/uploads');
              $data['picture_url'] = 'uploads/' . $newPicture->getName();
          }

          if ($productModel->update($id, $data)) {
              // Product updated successfully
              session()->setFlashdata('successMessage', 'Product updated successfully');
          } else {
              // Error occurred while updating the product
              session()->setFlashdata('errorMessage', 'Failed to update the product');
          }
      }

      // Redirect back to the edit page
      return redirect()->to("/add");
  }

  public function products()
  {
      $productModel = new ProductModel();
      $data['products'] = $productModel->findAll(); // Retrieve all products from the database

      return view('admins/add_product', $data); // Load the "admins/products" view and pass the product data
  }
}
