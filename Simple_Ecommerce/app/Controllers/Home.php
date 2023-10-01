<?php

namespace App\Controllers;
use App\Models\ProductModel;
class Home extends BaseController
{
      public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll(); // Retrieve all products from the database

        return view('source/index', $data);
    }
    public function product()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll(); // Retrieve all products from the database
        return view('include/product', $data);
    }
    public function admin()
    {

        return view('admin_source/index');
    }
}
