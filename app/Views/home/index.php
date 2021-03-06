<?php 
use App\Models\Menu_model;
$menu         = new Menu_model();
$berita       = $menu->berita();
$profil       = $menu->profil();
$layanan      = $menu->layanan();
?>

<!-- ======= Hero Section ======= -->


<section id="hero">
    <div id="heroCarousel" data-bs-interval="4000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <?php $noslide=1; foreach($slider as $slider) {  ?>
            <!-- Slide 1 -->
            <div class="carousel-item<?php if($noslide==1) { echo ' active'; } ?>"
                style="background-image: url(<?php echo base_url('assets/upload/image/'.$slider['gambar']) ?>)">
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
    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Layanan Kami</h2>
                <p>Yuk gunakan layanan yang ada di <?php echo namaweb() ?>. <?php echo tagline() ?></p>
            </div>
            <div class="row">
                <?php $ml = 1; foreach($layanan as $layanan) { ?>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="<?php echo $ml; ?>00">
                    <div class="icon"><i class="<?php echo $layanan['icon'] ?>"></i></div>
                    <h4 class="title"><a
                            href="<?php echo base_url('berita/layanan/'.$layanan['slug_berita']) ?>"><?php echo $layanan['judul_berita'] ?></a>
                    </h4>
                    <p class="description"><?php echo $layanan['ringkasan'] ?></p>
                </div>
                <?php $ml++; } ?>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Services Section ======= -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about ">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang <?php echo $konfigurasi['namaweb'] ?></h2>
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

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
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