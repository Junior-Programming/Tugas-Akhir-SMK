  <?php 
require 'functions.php';

if (isset($_POST['submit'])) {
  
  if (tambah($_POST) > 0) {
    echo "
          <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php'
          </script>
        "; 
  } else {
    echo "
          <script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'index.php'
          </script>
        ";
  }
}

if (isset($_POST['submit_pesan_meja'])) {
  
  if (tambah_pesan_meja($_POST) > 0) {

    echo "
          <script>
            alert('Pesanan Anda Berhasil kami Terima . . .!');
            document.location.href = 'index.php'
          </script>
        "; 
  } else {
    echo "
          <script>
            alert('Pesanan Anda Gagal kami Terima . . .!');
            document.location.href = 'index.php'
          </script>
        ";
    }
  } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kopi Nusantara</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/kopi.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+62 85922-262346</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Senin-Minggu: 09AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li><a href="login and register/login user/login.php">Login</a></li>
          <li><a href="login and register/login user/login.php">Register</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">coffee</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Special</a></li>
          <li><a class="nav-link scrollto" href="#events">Acara</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Koki</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="login and register/login admin/login.php" target="_blank">Admin</a></li>  
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Memesan Meja</a>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Selamat Datang Di <span>Kopi Nusantara</span></h1>
          <h2>Menyajikan makanan enak selama lebih dari 18 tahun!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu Kita</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Memesan Meja</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="assets/video/barista.mp4" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Spektrum Kopi Nusantara Roast™.</h3>
            <p class="fst-italic">
              Kedai kopi kami telah menjadi mercusuar bagi pecinta kopi di mana-mana. Mengapa mereka bersikeras pada kopi Nusantara? Karena mereka tahu bahwa mereka dapat mengandalkan layanan asli, suasana yang mengundang, dan secangkir kopi yang dipanggang secara ahli dan diseduh dengan kaya setiap saat.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Kopi Panggang Pirang.</li>
              <li><i class="bi bi-check-circle"></i> Kopi Panggang Sedang.</li>
              <li><i class="bi bi-check-circle"></i> Kopi Panggang Gelap.</li>
            </ul>
            <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p> -->
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kenapa Kita</h2>
          <p>Mengapa Memilih Kedai Kopi Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Kopi Panggang Pirang</h4>
              <p>
                Lebih ringan dan lembut, kopi Nusantara® Blonde Roast membangkitkan indera dengan lembut dan menghadirkan secangkir yang mudah didekati dan beraroma dengan sedikit rasa panggang.
              </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Kopi Panggang Sedang</h4>
              <p>
                Halus dan seimbang, kopi sangrai sedang kami sempurna untuk setiap rehat kopi.
              </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Kopi Panggang Gelap</h4>
              <p>
                Lebih bertubuh dan berani, kopi ini menampilkan rasa yang kuat dan esensi karakteristik dari sangrai yang intens.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Cek Menu Lezat Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-starters">Pembuka</li>
              <li data-filter=".filter-salads">Salad</li>
              <li data-filter=".filter-specialty">Special</li>
              <li data-filter=".filter-kopi">Kopi</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-kopi">
            <img src="assets/img/menu/kopi_1.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Kopi Espresso Cappuccino Tea Cafe</a><span>$3.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kopi">
            <img src="assets/img/menu/kopi_2.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Kopi cangkir Teh Mug</a><span>$3.50</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kopi">
            <img src="assets/img/menu/kopi_3.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Kopi susu Espresso Teh</a><span>$4.20</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bread Barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Periksa Spesial Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Kopi Espresso Cappuccino Tea Cafe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Kopi susu Espresso Teh</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Kopi cangkir Teh Mug</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Crab Cake</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Mozzarella Stick</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cappuccino</h3>
                    <p class="fst-italic">
                        Cappuccino merupakan kopi yang populer dari Italia karena lebih sering dan lebih banyak dikonsumsi. Rasanya yang tidak terlalu pahit seperti espresso, membuat cappuccino lebih mudah diterima oleh lidah semua orang khususnya kalangan muda. Komposisinya terdiri atas espresso dan tambahan susu cair serta busa di atasnya. Ada juga beberapa orang suka mengganti susu dengan bubuk cokelat atau bubuk kayu manis.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu/kopi_1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Espresso</h3>
                    <p class="fst-italic">
                      Kopi espresso dikenal sebagai kopi yang pekat --berwarna hitam serta bertekstur kental. Konon, orang Amerika takut untuk mencoba rasa kopi espresso karena rasa pahitnya yang begitu pekat di lidah.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu/kopi_2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Mochaccino</h3>
                    <p class="fst-italic">
                      Mochaccino hampir sama dengan cappuccino, bahkan dari segi takaran pun sama. Mochaccino juga campuran dari espresso dan susu. Namun, ada bahan tambahan lain yaitu cokelat, dengan rincian 2/5 cokelat, 2/5 espresso, 1/5 susu cair.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu/kopi_3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Crab Cake</h3>
                    <p class="fst-italic">
                       Ke Maryland tidak mencicipi kepiting, belum sah. Ingin merasakan kepiting yang terkenal dan  enak di Amerika, Maryland tempatnya. Di sini kepiting yang populer adalah blue crabs, karena dagingnya yang manis dan empuk. Meski diolah menjadi segala macam makanan, Blue Crab paling favorit kalau dijadikan crab cake atau crab soup. Kalau hanya ingin menyecipi saja juga ada, kepiting dengan taburan Old Bay, mentega cair atau cuka saja.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu/cake.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Mozzarella Stick</h3>
                    <p class="fst-italic">
                      Stik mozzarella dibuat dengan melapisi senar keju dalam remah roti atau adonan. Mereka mungkin dipanggang atau digoreng dalam minyak. Mozzarella stick biasanya disajikan dengan saus tomat atau saus marinara. Namun, mereka dapat disajikan dengan saus celup lainnya seperti saus plum, jeli jalapeo, saus tomat, saus barbekyu, saus mustard madu, dan saus peternakan.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Acara</h2>
          <p>Atur Acara Anda di Kedai kami</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/acara_1.jpg" class="img-fluid" alt="" style="width: 100%;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Membuat Tugas</h3>
                  <div class="price">
                    <p><span>$50</span></p>
                  </div>
                  <p class="fst-italic">
                    Bosan dengan coffee shop yang memperlihatkan tampilan minimalis atau modern? Kamu bisa juga nugas di kedai kopi kami memperlihatkan kesan masa lalu atau vintage. Kesan vintage semakin kental dengan penggunaan furnitur kayu yang catnya dibiarkan mengelupas.
                  </p>
                  <p>
                    Selain itu dekorasi dari barang-barang lama yang dipajang pun akan membuat kamu seolah-olah kembali ke masa lalu. Ditambah dengan suasana yang tenang dan pemutaran lagu-lagu jazz pun membuat mood belajar jadi lebih nyaman.
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/acara_5.jpg" class="img-fluid" alt="" style="width: 100%;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Talking</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                    Buat kamu yang menginnignkan pembicaraan yang tenang dan dengan suanan yang Vintage, kedai kami sangat cocok untuk itu.
                  </p>
                  <p>
                    Selain itu dekorasi dari barang-barang lama yang dipajang pun akan membuat kamu seolah-olah kembali ke masa lalu. Ditambah dengan suasana yang tenang dan pemutaran lagu-lagu jazz pun membuat mood pembicaran jadi lebih nyaman.
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Anda juga bisa memesan untuk untuk custom parties anda, Yang dimana anda harus memberitahukan kami parties apa yan gakan anda lakukan
                  </p>
                  <p>
                    silahkan memesan tempat untuk memberitahukan parties apa yang akan anda lakukan, jangan lupa untuk mengisi jumlah orang yang kaan menghadirinya!.
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>reservasi</h2>
          <p>Memesan meja</p>
        </div>

        <form action="" method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="nama" class="form-control" placeholder="Nama kamu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off">
              <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu" data-rule="email" data-msg="Please enter a valid email" autocomplete="off">
              <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="no_hp" id="phone" placeholder="Nomor Telephone kamu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off">
              <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="date" placeholder="Tanggal" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off">
              <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="time" class="form-control" name="jam" id="time" placeholder="Jam" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off">
              <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="jumlah_orang" id="people" placeholder="Berapa orang yang akan hadir" data-rule="minlen:1" data-msg="Please enter at least 1 chars" autocomplete="off">
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan . . ." autocomplete="off"></textarea>
            <div class="validate"></div>
          </div>
          
          <!-- <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message">Isi dulu!</div>
            <div class="sent-message">Permintaan pemesanan Anda telah dikirim. Kami akan menelepon kembali atau mengirim Email untuk mengonfirmasi reservasi Anda. Terima kasih!</div>
          </div> -->
          <div class="text-center"><button type="submit" name="submit_pesan_meja">Pesan Meja</button></div>
        </form>

      </div>
    </section>
    <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Apa yang mereka katakan tentang Kami</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Salam ngopi mbak Sara Wilson, Saya juga penggemar kopi, yang paling enak dan aromanya wangi adalah kopi Mochachino . . . mmmmm . . . tapi yang enak dan praktis adalah Torabika 3in one, Itulah sudah kopi Favorite saya di negara dingin ini, Hitung2 merasakannya dekatnya Indonesia dari kopi Torabika / Indocafe, Jadi setiap ada kenalan yan gpulang indo . .  . Salam ngopi buat semua!  
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya juga Coffe Lover. Kepingin nyoba brazil / american coffe
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya Coffe Lover . . . sehari bisa 2 kali jatahnya .. sudah menjadi candu tepatnya . . . Tapi sejak hamil Saya bisa stop sama sekali dengan Namanya kopi . . .
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Wahh, Harga kopinya sangat bersahabat . .  Di sini nya tapi di Starbuck :lol : nice sharing pak :)
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Meski saya lebih suka teh...tapi saya beberapa batang pohon kopi di belakang tanah saya ...ratusan tahun umurnya bekas kebun kecil buyut saya...di kalimantan lo
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Beberapa foto dari kedai kami</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class=" gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Koki Profesional kami</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Hubungi Kami</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. TGH. Moh. Shaleh Ahmad No.16, Kalijaga, Aikmel, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83653</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Senin-Minggu:<br>
                  08:00 AM - 09:30 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>kopinusantara@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 556</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="" method="POST" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Kamu" required autocomplete="off">
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" placeholder="Email Kamu" required autocomplete="off">
                </div>
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required autocomplete="off">
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="8" placeholder="Pesan . . ." required autocomplete="off"></textarea>
              </div>

              <div class="text-center">
                <button type="submit" name="submit">Kirim Pesan</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Kopi Nusantara</h3>
              <p>
                Jl. TGH. Moh. Sholeh Ahmad No. 16, Aikmel, Kabupaten Lombok Timur, NTB <br>
                83653<br><br>
                <strong>Phone:</strong> +1 5589 55488 556<br>
                <strong>Email:</strong> kopinusantara.gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://web.whatsapp.com/" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Service kami</h4>
            <ul>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Buletin kami</h4>
            <p>Kedai Kopi Nusantara</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kopi Nusantara</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.instagram.com/amdspyna_/?hl=en" target="_blank">Ahmad Sopyan</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>