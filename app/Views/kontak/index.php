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
    <br> <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <strong>Terimakasih!</strong> Pesan anda telah kami terima.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form name="tunas-logistic-contact-form"><label for="exampleFormControlInput1"
                        class="form-label">Nama</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Masukan Nama Anda" aria-label="First name"
                            name='nama'>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name='email'
                            placeholder="Masukan Alamat Email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Masukan Pertanyaan Anda" name='pesan'></textarea>
                    </div>
                    <button class="btn btn-primary btn-kirim" type="submit">Kirim</button>
                    <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>

            </div>

        </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Alamat Kami:</h3>
                                <p><?php echo nl2br($konfigurasi['alamat']) ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Kami:</h3>
                                <p><?php echo nl2br($konfigurasi['email']) ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Telepon Kami:</h3>
                                <p><?php echo nl2br($konfigurasi['telepon']) ?></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <style type="text/css" media="screen">
                    iframe {
                        width: 100%;
                        min-height: 400px;
                    }
                    </style>
                    <?php echo $konfigurasi['google_map'] ?>
                </div>

            </div>
        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->