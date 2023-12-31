<!-- Start Header Area -->
<header class="header_area sticky-header">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light main_box">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url('/user') ?>">Home</a></li>
            <li class="nav-item submenu dropdown">
              <a href="<?php echo base_url('/product')?>" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
               aria-expanded="false">Shop</a>

            </li>
            <li class="nav-item submenu dropdown">
              <a href="<?php echo base_url('#')?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">Blog</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('blog.html')?>">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('single-blog.html')?>">Blog Details</a></li>
              </ul>
            </li>
            <li class="nav-item submenu dropdown">
              <a href="<?php echo base_url('#')?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">Pages</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login.html')?>">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('tracking.html')?>">Tracking</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('elements.html')?>">Elements</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('contact.html')?>">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a href="<?php echo base_url('#')?>" class="cart"><span class="ti-bag"></span></a></li>
            <li class="nav-item">
              <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </div>

</header>
<!-- End Header Area -->
