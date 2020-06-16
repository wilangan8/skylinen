<!DOCTYPE html>
<html lang="en" id="top">
  <head>
	<title>Sky Linen | Hospitality Linen Supplier</title>
	<link rel="icon" href="<?= base_url('assets/images/skylinenlogogaris.png') ?>" type="image/png" sizes="3x9">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.timepicker.css') ?>">

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/slick.css') ?>"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/slick-theme.css') ?>"/>

    
    <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  </head>
  <body class="body">


    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    
    <!-- POP-UP CART -->
      <div class="app-cart closed no-related animated-fast fadeInRight">
        <section class="mini-cart">
          <div class="mini-cart-details">

            <div class="mini-cart-header">
              <a class="close-mini-cart close"></a>
              <h3 class="product-title">My Cart</h3>
              <div class="menu-icon">
                <span class="mat-badge mat-badge-overlap mat-badge-above mat-badge-after mat-badge-medium ng-star-inserted" matbadgeoverlap="true">
                  <span class="mat-badge-content mat-badge-active" id="count_shop_1"></span>
                </span>
              </div>
            </div>

            <div class="cart-detail-container ng-star-inserted" id="detail_mini_cart">

            </div>

          </div>
        </section>
      </div>
    <!-- END POP-UP CART -->

    <nav class="navbar navbar-expand-md navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="navbar-centered">
        <div class="navbar-brand">
          <a href="<?= site_url() ?>">
            <img src="<?= base_url('assets/images/skylinenlogo.png') ?>" alt="Sky Linen" width="155">
          </a>
        </div>
        <i class="icon-search icon-chart-left btn-search"></i>
        <i class="icon-search icon-chart-search btn-search"></i>
        <i class="icon-shopping-bag icon-chart-right btn-shop">
          <span class="count-shop" id="count_shop_2"></span>
        </i>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#btn-responsive" aria-controls="btn-responsive" aria-expanded="false">
	        <span class="oi icon-menu"></span>
        </button>
        
        <!-- POP-UP SEARCH -->
          <div class="app-search">
              <i class="icon-close btn-close-search"></i>
              <div class="section-search-bar">
                <h6>WHAT ARE YOU LOOKING FOR?</h6>
                <form class="form-search" action="<?= base_url('products') ?>" method="get">
                  <input name="search_query" autocomplete="off" placeholder="Quilt Covers" type="text">
                  <button class="btn btn-black" type="submit">Search</button>
                </form>
              </div>
          </div>
        <!-- END POP-UP SEARCH -->

	      <div class="collapse navbar-collapse" id="btn-responsive">
          <ul class="navbar-nav ml-auto menu-list-product">
	          <li class="nav-item dropdown megamenu-li">
			        <a class ="nav-link dropdown" href="index.html" data-toggle="dropdown">Bedroom</a>
              <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                <div class="row row-dropdown" style="margin:0 !important">
                  <div class="col-sm-5 col-lg-3">
                    <ul>
                      <li><h5 class="title-product">Bed Linen</h5></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedlinen/sheeting') ?>">Sheeting</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedlinen/flatsheet') ?>">Flat Sheet</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedlinen/fittedsheet') ?>">Fitted Sheet</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedlinen/pillowcase') ?>">Pillow Case</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedlinen/balstercase') ?>">Balster Case</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedlinen/duvetcover') ?>">Duvet Cover</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-5 col-lg-3">
                    <ul>
                      <li><h5 class="title-product">Bedding</h5></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedding/innerduvet') ?>">Inner Duvet</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedding/mattressprotector') ?>">Mattress Protector</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedding/pillow') ?>">Pillow</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedding/balster') ?>">Balster</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bedding/cushion') ?>">Cushion</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown megamenu-li">
			        <a class ="nav-link dropdown" href="index.html" data-toggle="dropdown">Bathroom</a>
              <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                <div class="row" style="margin:0 !important">
                  <div class="col-sm-4 col-lg-3">
                    <ul>
                      <li><h5 class="title-product">Bathroom</h5></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bathroom/bathtowel') ?>">Bath Towel</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bathroom/handtowel') ?>">Hand Towel</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bathroom/facetowel') ?>">Face Towel</a></li>
                      <li><a class="dropdown-item item-product" href="<?= site_url('products/bathroom/bathmat') ?>">Bathmat</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="<?= site_url('products/kitchen-and-dining') ?>">Kitchen & Dining</a>
            </li>
          </ul>
			  </div>
			</div>
    </nav>