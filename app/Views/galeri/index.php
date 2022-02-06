<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <b>
                    <p class="fs-4"><?php echo $title ?></p>
                </b>
                <ol>
                    <li><a href="<?php echo base_url() ?>">Halaman Utama</a></li>
                    <li><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
            <div class="gallery-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                    <div class="row pb-5">
                        <?php foreach($galeri as $galeri) { ?>
                        <div class="col-md-4">
                            <div class="card" style="margin-bottom: 20px;">
                                <a class="gallery"
                                    href="<?php echo base_url('assets/upload/image/'.$galeri['gambar']) ?>">
                                    <img style="height:220px;width:100%;"
                                        src="<?php echo base_url('assets/upload/image/'.$galeri['gambar']) ?>"
                                        class="img-fluid" alt="<?php echo $galeri['judul_galeri'] ?>">
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
    </section>