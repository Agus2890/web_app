<!DOCTYPE html>
<html>
    <?php 
    require '../config/core.php';
    session_start();
    if(isset($_SESSION['user'])){
        header("Location: ".URL);
    }
  
    ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Odoo App CRM para Móvil Android. Facturacion</title>
  <meta content="¡Obtenga lo mejor de Odoo en su dispositivo móvil! Odoo es un conjunto de aplicaciones empresariales de código abierto que le ayudan a hacer crecer su negocio." name="descriptison">
  <meta content="Odoo,OpenErp,Aplicacion Movil para odoo" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.2.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">App Android</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#features">Caracteristicas</a></li>
          <li><a href="#gallery">Galería</a></li>
          <li><a href="#pricing">Precios</a></li>
          <!-- <li><a href="#faq">F.A.Q</a></li> -->
          <li><a href="#contact">Contacto</a></li>
          <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>

          <!-- <li class="get-started"><a href="#features">Get Started</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>El poder de tu sistema en una aplicación móvil</h1>
            <h2>Administre su negocio al alcance de su mano. Sus datos y funciones de Odoo disponibles la App.</h2>
            <a href="#" class="download-btn" id="apk_download"><i class="bx bxl-play-store"></i>Descargar App</a>
            <!-- <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> -->
            <a href="#" class="download-btn" data-toggle="modal" data-target="#car_paquete"></i>Solicitar APK</a> 
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/movile/app4.jpg" class="img-fluid" alt="" style="max-width: 35%;">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Caracteristicas</h2>
          <p>Con AppAndroid puede administrar todas esas tareas, y mucho más, en tiempo real, desde su dispositivo móvil consulte sus Facturas, clientes productos en tiempo real.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Facturación Electronica</h4>
                  <p>Consulta tus facturas desde cualquier lugar desde su Celular, descargar tu PDF Y XML o reenviar por correo directamente desde la App</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Consultar Clientes</h4>
                  <p>Registre sus clientes desde la App en cualquier lugar</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>Consultar Productos</h4>
                  <p>Actualise su precio de venta o crear un nuevo productos desde tu celular.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>Monitorea Folios</h4>
                  <p>Consulte el numero de Folios que cuenta para emitor sus Facturas y solicitalo desde la Aapp</p>
                </div>
                <!-- <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-atom"></i>
                  <h4>Molestiae dolor</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4>Explicabo consectetur</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div> -->
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/movile/app4.jpg" class="img-fluid" alt="" style="max-height: 70%;max-width: 65%;">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>¡Obtén tu aplicación ahora!.</h3>
            <p class="font-italic">
             Simplifique su negocio en un segundo..
            </p>
            <ul>
              <li><i class="icofont-check"></i> Consulta Facturas, enviar por email, obtener XML Y PDF.</li>
              <li><i class="icofont-check"></i> Registre tus sus productos  y clientes desde cuarquier lugar</li>
              <li><i class="icofont-check"></i> Consulte sus Folios y solicitelo desde la App.</li>
              <!-- <li><i class="icofont-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li> -->
            </ul>
            <!-- <p>
              Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
            </p> -->
          </div>
        </div>

        <!-- <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p>
              Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.
            </p>
          </div>
        </div> -->

        <!-- <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
            <p>
              Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.
            </p>
            <p>
              Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.
            </p>
          </div>
        </div> -->

        <!-- <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="icofont-check"></i> Et praesentium laboriosam architecto nam .</li>
              <li><i class="icofont-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div> -->

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up">
          <a href="assets/img/gallery/gallery-1.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.png" alt=""></a>
          <a href="assets/img/gallery/gallery-2.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.png" alt=""></a>
          <a href="assets/img/gallery/gallery-3.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.png" alt=""></a>
          <a href="assets/img/gallery/gallery-4.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.png" alt=""></a>
          <a href="assets/img/gallery/gallery-5.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.png" alt=""></a>
          <a href="assets/img/gallery/gallery-6.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.png" alt=""></a>
          <a href="assets/img/gallery/gallery-7.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.png" alt=""></a>
          <a href="assets/img/gallery/gallery-8.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.png" alt=""></a>
          <a href="assets/img/gallery/gallery-9.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-9.png" alt=""></a>
          <a href="assets/img/gallery/gallery-10.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-10.png" alt=""></a>
          <a href="assets/img/gallery/gallery-11.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-11.png" alt=""></a>
          <a href="assets/img/gallery/gallery-12.png" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-12.png" alt=""></a>
        </div>

      </div>
    </section> -->
    <!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Precios</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="fade-right">
            <h3>1 MES</h3>
            <h4>$50<span>POR UN MES</span></h4>
            <ul>
              <li><i class="bx bx-check"></i>Facturacion Electronica</li>
              <li><i class="bx bx-check"></i>Catalogo de productos</li>
              <li><i class="bx bx-check"></i>Catalogo de clientes</li>
              <li><i class="bx bx-check"></i>Ventas</li>
              <!-- <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li> -->
            </ul>
            <a href="#" class="get-started-btn" data-toggle="modal" data-target="#car_paquete">SOLICITAR</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="fade-up">
            <h3>6 MESES</h3>
            <h4>$200<span></span></h4>
            <ul>
             <li><i class="bx bx-check"></i>Facturacion Electronica</li>
              <li><i class="bx bx-check"></i>Catalogo de productos</li>
              <li><i class="bx bx-check"></i>Catalogo de clientes</li>
              <li><i class="bx bx-check"></i>Ventas</li>
            </ul>
            <a href="#" class="get-started-btn" data-toggle="modal" data-target="#car_paquete">SOLICITAR</a>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>12 MESES</h3>
            <h4>$300<span></span></h4>
            <ul>
              <li><i class="bx bx-check"></i>Facturacion Electronica</li>
              <li><i class="bx bx-check"></i>Catalogo de productos</li>
              <li><i class="bx bx-check"></i>Catalogo de clientes</li>
              <li><i class="bx bx-check"></i>Ventas</li>
            </ul>
            <a href="#" class="get-started-btn" data-toggle="modal" data-target="#car_paquete">SOLICITAR</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>-->
    <!--End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <!-- <div class="col-lg-6 info" data-aos="fade-up">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
              </div> -->
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-envelope"></i>
                <h4>Email</h4>
                <p>info.sistemas2017@gmail.com</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-time-five"></i>
                <h4>Horario de antención</h4>
                <p> Lunes a Domingo de 08:00 a 201:00 horas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="<?php echo URL ?>index/register_contacto" method="post" role="form" class="FormularioAjax" data-aos="fade-up" id="from_contacto">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="txtname" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Your Email" type="email" class="form-control" name="txtemail" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <!-- <div class="form-group">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div> -->
              <div class="form-group">
                <textarea placeholder="Message" class="form-control" name="txtmessage" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Appland</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->
<!-- 
          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Social Networks</h4>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
      </div> -->
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="../assets/js/jquery-2.0.1.js"> </script>

  <script src="../assets/sweetalert/sweetalert.js"></script>
  <link rel="stylesheet" href="../assets/sweetalert/sweetalert.css">


</body>

</html>

<!--Modal box-->
<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content no 1-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center form-title">Login</h4>
      </div>
      <div class="modal-body padtrbl">
        <div class="login-box-body">
          <p class="login-box-msg">Inicie su sesión</p>
          <div class="form-group">
            <form name="login" method="post" action="<?php echo URL ?>login/login_user" class="FormularioAjaxFrom">
             <div class="form-group">
                  <input class="form-control" placeholder="Username"  id="txt_user" name="txt_user" type="text" autocomplete="off" />
              </div>
              <div class="form-group">
                  <input class="form-control" placeholder="Password" id="password" name="password" type="password" autocomplete="off" />
              </div>
              <div class="row">
                  <div class="col-xs-12">
                    <button type="submit" name="enviar" id="enviar" class="btn btn-block btn-primary">Iniciar session</button>
                    <div id="resultado"></div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="car_paquete" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content no 1-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center form-title">Solicitar</h4>
      </div>
      <div class="modal-body padtrbl">
        <div class="login-box-body">
          <p class="login-box-msg"></p>
          <div class="form-group">
            <form name="from_paquete" id="from_paquete" method="post" action="<?php echo URL ?>index/register_paquete" class="FormularioAjax">
              <div class="form-group">
              Email a enviar el apk.
                <input class="form-control" id="txt_mail_p" name="txt_mail_p" type="text" autocomplete="off" required />
              </div>
              <div class="form-group">
                <select class="form-control" name="txtpaquete" required>
                  <option value="1 paquete">Paquete 1 $50 1 mes</option>
                  <option value="2 paquete">Paquete 2 $200 6 meses</option>
                  <option value="3 paquete">Paquete 3 $300 12 meses</option>
                </select>
              </div>
              <div class="row">
                  <div class="col-xs-12">
                    <button type="submit" name="enviar" id="enviarpaq" class="btn btn-block btn-primary">Solicitar</button>
                    
                    <div id="resultado"></div>
                    <br/>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Modal box-->
<?php $vari="'".URL.'webapp/get_apk'."'"?>
<script type="text/javascript">


 $(document).on('click','#apk_download',function(e){
    $.ajax({
          type:'GET',
          url:<?php echo $vari?>,
          
          success: function(response){
              if(response.state==1){
                window.open(response.odoo.downloadURL, '_blank');
                //alert(response.odoo.downloadURL);
              }
              //setTimeout(function(){window.top.location="index.php?url=human_resourse/view_asistencia", 5000} ); 
          },
          
    });
});

$(".FormularioAjax").bind("submit",function(e){
    e.preventDefault();
    var form=$(this);
    var data = new FormData(this);
    // window.location =location.pathname + location.search;
    $.ajax({
      type: $(this).attr("method"),
        url: $(this).attr("action"),
        datafrom:$(this).attr("data-form"),
        data:data,//$(this).serialize(),
        enctype:$(this).attr("enctype"),
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
        },
        complete:function(data){
        },
        success: function(data){

            swal("Aviso","Enviado Correctamente", "success");
            $('#from_contacto')[0].reset();
            $("#from_paquete")[0].reset();
          
        },
        error: function(jqXHR, textStatus, errorThrown) {
          swal("Aviso",jqXHR.responseText, "error");
        }
    });
    return false;
});

$(".FormularioAjaxFrom").bind("submit",function(e){
    e.preventDefault();
    var form=$(this);
    var data = new FormData(this);
    // window.location =location.pathname + location.search;
    $.ajax({
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        datafrom:$(this).attr("data-form"),
        data:data,//$(this).serialize(),
        enctype:$(this).attr("enctype"),
        contentType: false,
        cache: false,
        processData: false,

        beforeSend: function(){
        },
        complete:function(data){
        },
        success: function(data){
          if(data.success){
            window.location =location;
            // location.pathname + location.search;
              
          }else{
              alert(data.message);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(jqXHR.responseText);
        }
    });
    return false;
});
</script>