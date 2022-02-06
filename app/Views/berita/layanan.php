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
            <div class="card pb-5" style="margin-bottom: 20px; border: 0px">

                <br>
                <img src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>">
                <div class="">
                    <br>
                    <?php echo $berita['isi'] ?>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->