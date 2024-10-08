<?php 
use App\Models\Menu_model;
$menu         = new Menu_model();
$berita       = $menu->berita();
$profil       = $menu->profil();
$layanan      = $menu->layanan();
?>

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <?php $noslide=1; foreach($slider as $slider) {  ?>
        <!-- Slide 1 -->
        <div class="carousel-item<?php if($noslide==1) { echo ' active'; } ?>" style="background-image: url(<?php echo base_url('assets/upload/image/'.$slider['gambar']) ?>); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100wh; height: 100vh; margin-top:45px">
          <?php if($slider['status_text']=="Ya") {  ?>
          <!-- <div class="container mt-5" style="max-width: 70%; text-align: left; padding-left: 2%; padding-right: 2%;">
                <h2><?php echo $slider['judul_galeri'] ?></h2>
                <p><?php echo $slider['isi'] ?></p>
                <a href="<?php echo $slider['website'] ?>" class="btn-get-started scrollto">Read More</a>
            </div>
          <?php } ?> -->
        </div>
        <?php $noslide++;} ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <?php $pr = 1; foreach($profil as $profil) { ?>
          <div class="col-md-6 col-lg-4 text-center d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="<?php echo $pr ?>00">
              <div class="icon"><i class="<?php echo $profil['icon'] ?>"></i></div>
              <h4 class="title"><a href="<?php echo base_url('berita/profil/'.$profil['slug_berita']) ?>"><?php echo $profil['judul_berita'] ?></a></h4>
              <p class="description"><?php echo $profil['ringkasan'] ?></p>
            </div>
          </div>
          <?php $pr++; } ?>
</div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services" style="margin-top: -100px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Kami</h2>
          <!-- <p>Yuk gunakan layanan yang ada di <?php echo namaweb() ?>. <?php echo tagline() ?></p> -->
          <p>Yuk gunakan layanan yang ada di <?php echo namaweb() ?></p>
        </div>

        <div class="row">
          <?php $ml = 1; foreach($layanan as $layanan) { ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="<?php echo $ml; ?>00">
            <div class="icon"><i class="<?php echo $layanan['icon'] ?>"></i></div>
            <h4 class="title"><a href="<?php echo base_url('berita/layanan/'.$layanan['slug_berita']) ?>"><?php echo $layanan['judul_berita'] ?></a></h4>
            <p class="description"><?php echo $layanan['ringkasan'] ?></p>
          </div>
          <?php $ml++; } ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Selamat datang di <?php echo $konfigurasi['namaweb'] ?></h3>
          <!-- <p><?php echo $konfigurasi['tagline'] ?></p> -->
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About <?php echo $konfigurasi['namaweb'] ?></h2>
         <?php echo $konfigurasi['deskripsi'] ?>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?php echo icon() ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <?php echo $konfigurasi['tentang'] ?>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <?php include('berita.php') ?>

    <!-- ======= About Us Section ======= -->
    <section id="support" class="support">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Collaborate <?php echo $konfigurasi['namaweb'] ?></h2>
          <div class="logos-container mt-4">
            <div class="logos">
                <img src="<?php echo base_url() . '/assets/theme/images/iegcode.png' ?>" alt="iegcode" />
                <img src="<?php echo base_url() . '/assets/theme/images/soim.png' ?>" alt="SOIM" />
                <img src="<?php echo base_url() . '/assets/theme/images/pepundan.png' ?>" alt="pepundan" />
                <img src="<?php echo base_url() . '/assets/theme/images/iegcode.png' ?>" alt="iegcode" />
                <img src="<?php echo base_url() . '/assets/theme/images/soim.png' ?>" alt="SOIM" />
                <img src="<?php echo base_url() . '/assets/theme/images/pepundan.png' ?>" alt="pepundan" />
            </div>
        </div>
      </div>
    </section>
    <style>
    .logos-container {
        overflow: hidden;
        display: flex;
        align-items: center;
        position: relative;
        height: 5rem;
    }

    .logos {
        display: flex;
        flex-shrink: 0;
        gap: 3rem;
        padding: 1rem;
        animation: infinite-scroll 10s linear infinite;
    }

    .logos img {
        height: 3rem;
        object-fit: contain;
    }

    @keyframes infinite-scroll {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100%);
        }
    }

    @media (max-width: 768px) {
        .logo-container {
            height: 4rem;
        }
        .logos img {
            height: 2.5rem;
        }
        .logos {
            gap: 2rem;
        }
    }
</style>

<script>
    const logo = document.querySelector(".logos").cloneNode(true);
    document.querySelector(".logos-container").appendChild(logo);
</script>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top:-20px">
      <div>
        <style type="text/css" media="screen">
          iframe {
            min-height: 300px;
            width: 100%;
          }
        </style>
        <?php echo google_map() ?>
      </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
