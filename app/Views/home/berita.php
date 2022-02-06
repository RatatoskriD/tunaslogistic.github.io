<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2>Berita Terbaru</h2>
                <hr>
            </div>
            <?php foreach($berita2 as $berita2) { ?>
            <div class="col-md-4">
                <div class="card" style="margin-bottom: 20px;">
                    <img src="<?php echo base_url('assets/upload/image/'.$berita2['gambar']) ?>" height="220px">
                    <div class="card-body">
                        <b>
                            <p class="fs-6"><?php echo $berita2['judul_berita'] ?></p>
                        </b>
                        <p> <?php echo tanggal_singkat($berita2['tanggal']) ?> | <small class="text-gray-dark"><i
                                    class="fa fa-eye"></i>
                                <?php echo $berita2['hits']?> Lihat</small></p>
                        <p>
                            <a href="<?php echo base_url('berita/read/'.$berita2['slug_berita']) ?>"
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