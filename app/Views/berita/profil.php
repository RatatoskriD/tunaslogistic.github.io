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
        <div class="container pb-5">
            <div class="row ">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>"
                        class="img img-thumbnail">
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h1><?php echo $title ?></h1>
                        </div>
                        <div class="card-body">
                            <?php echo $berita['isi'] ?>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->