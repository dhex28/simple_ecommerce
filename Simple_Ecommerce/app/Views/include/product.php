<?= $this->include('include/link') ?>
<?= $this->include('include/header') ?>
<link rel="stylesheet" type="text/css" href="path/to/main.css">
<style media="screen">
/* main.css */
.product-image {
  width: 200px; /* Set the desired width for the product images */
  height: 200px; /* Set the desired height for the product images */
  object-fit: cover; /* Maintain aspect ratio and cover the entire container */
}

</style>
<body>

  <!-- start product Area -->
  <br>
  <br>
  <br>
  <section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-title">
              <h1>Products</h1>
              <p>Discover our latest collection of stylish and comfortable shoes. Find the perfect pair to elevate your style and provide all-day comfort.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Loop through products and display them -->
          <?php if (isset($products)) : ?>
          <?php foreach ($products as $product): ?>
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid product-image" src="<?= base_url($product['picture_url']) ?>" alt="<?= esc($product['name']) ?>">
                <div class="product-details">
                  <h6><?= esc($product['name']) ?></h6>
                  <div class="price">
                    <h6>$<?= esc($product['price']) ?></h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <?php endif; ?>
          <!-- End of product loop -->
        </div>
      </div>
    </div>
  </section>
  <!-- end product Area -->

  <!-- app/Views/include/product.php -->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <!-- ... (other script includes) ... -->

  <script src="js/main.js"></script>



</body>
