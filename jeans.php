<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Umam Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
    <link rel="stylesheet" href="tes.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <marquee>SELAMAT DATANG DI TOKO KAMI, SELAMAT BERBELANJA ENJOYY GUYSS....</marquee>
          </div>
        </div>
      </div>
    </div>
    <div class="right_header_info">
      <ul>
          <li class="button_user"><a class="button active" href="login.php">LOG OUT</a></li>
      </ul>
      </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/2.png" width="150px" height="auto"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="products.php">Produk
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Tentang</a>
            </li>
                <a class="nav-link" href="viawhtsap.php">via WhatsApp</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Jeans Denim</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/denim.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/denim1.jfif" />
                  </li>
                  <li>
                    <img src="assets/images/denim2.jfif" />
                  </li>
                  <li>
                    <img src="assets/images/denim3.jfif" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/denim.jpeg" />
                  </li>
                  <li>
                    <img src="assets/images/denim1.jfif" />
                  </li>
                  <li>
                    <img src="assets/images/denim2.jfif" />
                  </li>
                  <li>
                    <img src="assets/images/denim3.jfif" />
                  </li>
                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>JEANS DENIM 30%off</h4>
              <h6><s>Rp.900.000,00</s> <strong>Rp.630.000,00</strong></h6>
              <p> denim terbuat dari benang katun yang ditenun dengan teknik twill. Benang dipintal bersama dengan pola tertentu dehingga menciptakan efek diagonal pada permukaannya. Denim juga meiliki karakteristik lebih tebal dari kain pada umumnya hampir seperti karpet namun lebih halus. </p>
              <span> 35 stok</span>
              <form action="" method="get" onsubmit="redirectToWhatsApp(); return false;">
                            <label for="quantity">Jumlah:</label>
                            <input name="quantity" type="number" class="quantity-text" id="quantity" 
                                onfocus="if(this.value == '1') { this.value = ''; }" 
                                onBlur="if(this.value == '') { this.value = '1';}"
                                value="1" min="1">
                            <input type="submit" class="button" value="Pesan Sekarang!">
                        </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span>Pants,<span>Men's,</span><span>Liftstyle</span></a></span></h6>
                </div>
                <div class="share">
                  <h6>Share: <span>
                  <a href="https://www.facebook.com/muhammad.haidilumam.1"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/mh.umam1511/"><i class="fa fa-instagram"></i></a>
                  <a href="http://wa.me/62895603558398"><i class="fa fa-whatsapp"></i></a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Mungkin Anda Juga Suka</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <a href="chino.php">
                <div class="featured-item">
                  <img src="assets/images/uniqlo.webp" alt="Item 1">
                  <h4>CHINO UNIQLO</h4>
                  <h6>Rp.250.000,00</h6>
                </div>
              </a>
              <a href="jeans.php">
                <div class="featured-item">
                  <img src="assets/images/denim.jpeg" alt="Item 2">
                  <h4>JEANS DENIM 30%off</h4>
                  <h6><s>Rp.900.000,00</s> <strong>Rp.630.000,00</strong></h6>
                </div>
              </a>
              <a href="jaketdior.php">
                <div class="featured-item">
                  <img src="assets/images/dior.jpeg" alt="Item 3">
                  <h4>JAKET DIOR 30%off</h4>
                  <h6><s>Rp.2.500.000,00</s> <strong>Rp.1.750.000,00</strong></h6>
                </div>
              </a>
              <a href="nikeaf1.php">
                <div class="featured-item">
                  <img src="assets/images/nike.jpeg" alt="Item 4">
                  <h4>NIKE AF1 30%off</h4>
                  <h6><s>Rp.1.300.000,00</s> <strong>Rp.910.000,00</strong></h6>
                </div>
              </a>
              <a href="aerostreet.php">
                <div class="featured-item">
                  <img src="assets/images/tshirt.webp" alt="Item 5">
                  <h4>T-shirt Aerostreet</h4>
                  <h6>Rp.150.000,00</h6>
                </div>
              </a>
              <a href="sweateaero.php">
                <div class="featured-item">
                  <img src="assets/images/sweater.webp" alt="Item 6">
                  <h4>Sweater Aerostreet</h4>
                  <h6>RP.195.000,00</h6>
                </div>
              </a>
              <a href="converse.php">
                <div class="featured-item">
                  <img src="assets/images/converse.jpeg" alt="Item 7">
                  <h4>Converse High Original 30%off</h4>
                  <h6><s>Rp.999.000,00</s> <strong>Rp.699.300,00</strong></h6>
                </div>
              </a>
              <a href="erigo.php">
                <div class="featured-item">
                  <img src="assets/images/erigo.jpeg" alt="Item 8">
                  <h4>T-shirt Erigo</h4>
                  <h6>Rp.250.000,00</h6>
                </div>
              </a>
              <a href="sweatergap.php">
                <div class="featured-item">
                  <img src="assets/images/gap.webp" alt="Item 9">
                  <h4>JAKET HOODIE GAP 30%off</h4>
                  <h6><s>Rp.950.000,00</s> <strong>Rp.665.000,00</strong></h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Similar Ends Here -->


    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Berlangganan Di UMAM SHOP Sekarang</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Nikmati Promo Yang Ada guys...!!!</p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->


    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="assets/images/2.png" width="150px" height="auto">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="products.php">Produk</a></li>
                <li><a href="about.php">Tentang</a></li>
                <li><a href="viawhtsap.php">Via WhatsApp</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="https://www.facebook.com/muhammad.haidilumam.1"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/mh.umam1511/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="http://wa.me/6285895603558398"><i class="fa fa-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


    <script>
        function redirectToWhatsApp() {
            // Get the quantity value (you can modify this based on your form structure)
            var quantity = document.getElementById("quantity").value;

            // Replace this with your WhatsApp number
            var whatsappNumber = "62895603558398"; // Replace with your WhatsApp number
            var message = "Saya ingin memesan " + quantity + " JEANS DENIM.";

            // Construct the WhatsApp link
            var whatsappLink = "https://wa.me/" + whatsappNumber + "?text=" + encodeURIComponent(message);

            // Redirect to WhatsApp
            window.location.href = whatsappLink;
        }
    </script>
  </body>
</html>
