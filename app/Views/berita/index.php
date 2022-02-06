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

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row pb-5">
                <?php foreach($berita as $berita) { ?>
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 20px;">
                        <img src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>" height="220px">
                        <div class="card-body">
                            <b>
                                <p class="fs-6"><?php echo $berita['judul_berita'] ?></p>
                            </b>
                            <p> <?php echo tanggal_singkat($berita['tanggal']) ?> | <small class="text-gray-dark"><i
                                        class="fa fa-eye"></i>
                                    <?php echo $berita['hits']?> Lihat</small></p>
                            <p>
                                <a href="<?php echo base_url('berita/read/'.$berita['slug_berita']) ?>"
                                    class="btn btn-primary btn-sm">
                                    <i class="fa fa-chevron-right"></i> Membaca
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->