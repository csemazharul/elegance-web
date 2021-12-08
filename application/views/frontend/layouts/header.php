<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Nov 2021 16:48:11 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title ?></title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Place favicon.png in the root directory -->
  <link rel="shortcut icon" href="/assets/front/img/favicon.png" type="image/x-icon" />
  <!-- Font Icons css -->
  <!-- Font Icons css -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/front/css/font-icons.css">
  <!-- plugins css -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/front/css/plugins.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/front/css/style.css">
  <!-- Responsive css -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/front/css/responsive.css">
</head>

<body>
  <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

  <!-- Add your site or application content here -->

  <!-- Body main wrapper start -->
  <div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 <?= $color ?>">
      <!-- ltn__header-top-area start -->
      <div class="ltn__header-top-area">
        <div class="container">
          <?php if ($req_uri === '/index.php' || $req_uri === '/') { ?>
            <div class="row">
              <div class="col-md-7">
                <div class="ltn__top-bar-menu">
                  <ul>
                    <li><a href="locations.html"><i class="icon-placeholder"></i> 277a Green Street, Second Floor, London</a></li>
                    <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i>info@elegancefoodanddrinks.com</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-5">
                <div class="top-bar-right text-right">
                  <div class="ltn__top-bar-menu">
                    <ul>

                      <li>
                        <!-- ltn__social-media -->
                        <div class="ltn__social-media">
                          <ul>
                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php }  ?>
        </div>
      </div>
      <!-- ltn__header-top-area end -->

      <!-- ltn__header-middle-area start -->
      <div class="ltn__header-middle-area ltn__header-sticky <?php if ($req_uri === '/index.php' || $req_uri === '/') echo 'ltn__sticky-bg-white';
                                                              else echo 'ltn__sticky-bg-black'; ?> plr--9---">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="site-logo-wrap">
                <div class="site-logo">
                  <a href="<?php base_url(); ?>"><img src="<?php base_url(); ?>assets/front/img/<?php if ($req_uri === '/index.php' || $req_uri === '/') echo 'logo';
                                                                                                else echo 'logo-2'; ?>.png" alt="Logo"></a>
                </div>
              </div>
            </div>
            <div class="col header-menu-column menu-color-white">
              <div class="header-menu d-none d-xl-block">
                <?php if ($color !== 'ltn__header-transparent-- gradient-color-4---') { ?>
                  <nav>
                    <div class="ltn__main-menu">
                      <div class="col header-menu-column menu-color-white---">
                        <div class="header-menu d-none d-xl-block">
                          <nav>
                            <div class="ltn__main-menu">
                              <ul>
                                <li class="<?php if ($req_uri === '/index.php' || $req_uri === '/') echo 'special-link';
                                            else echo 'menu';  ?>"><a href="<?php base_url(); ?>/index.php">Home</a>

                                </li>
                                <li class="<?php if ($req_uri === '/products') echo 'special-link';
                                            else echo 'menu';  ?>"><a href="<?php base_url(); ?>/products">Products</a>

                                </li>
                                <li class="<?php if ($req_uri === '/history') echo 'special-link';
                                            else echo 'menu';  ?>"><a href="<?php base_url(); ?>/history">History</a>

                                </li>

                                <li class="<?php if ($req_uri === '/news') echo 'special-link';
                                            else echo 'menu';  ?>"><a href="<?php base_url(); ?>/news">Career</a>

                                </li>

                                <li class="<?php if ($req_uri === '/contact') echo 'special-link';
                                            else echo 'menu';  ?>"><a href="<?php base_url(); ?>/contact">Contact</a></li>
                                <li class="special-link"><a href="<?php base_url(); ?>/contact">GET A QUOTE</a></li>
                              </ul>
                            </div>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </nav>
                <?php } else {  ?>
                  <nav>
                    <div class="ltn__main-menu">
                      <ul>
                        <li class="<?php if ($req_uri === '/index.php' || $req_uri === '/') echo 'special-link';
                                    else echo 'menu';  ?>"><a href="<?php base_url(); ?>/index.php">Home</a>

                        </li>
                        <li class="<?php if ($req_uri === '/products') echo 'special-link';
                                    else echo 'menu';  ?>"><a href="<?php base_url(); ?>/products">Products</a>

                        </li>
                        <li class="<?php if ($req_uri === '/history') echo 'special-link';
                                    else echo 'menu';  ?>"><a href="<?php base_url(); ?>/history">History</a>

                        </li>

                        <li class="<?php if ($req_uri === '/news') echo 'special-link';
                                    else echo 'menu';  ?>"><a href="<?php base_url(); ?>/news">Career</a>

                        </li>

                        <li class="<?php if ($req_uri === '/contact') echo 'special-link';
                                    else echo 'menu';  ?>"><a href="<?php base_url(); ?>/contact">Contact</a></li>
                        <li class="special-link"><a href="<?php base_url(); ?>/contact">GET A QUOTE</a></li>
                      </ul>
                    </div>
                  </nav>
                <?php } ?>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->