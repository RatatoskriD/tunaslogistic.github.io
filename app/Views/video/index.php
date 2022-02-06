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
                <?php foreach($video as $video) { ?>
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 20px; border:0px;">
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/<?php echo $video['video'] ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen style="width: 100%; height: 220px;"></iframe>
                            </div>
                            <b>
                                <p class="fs-6"><?php echo $video['judul'] ?></p>
                            </b>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->