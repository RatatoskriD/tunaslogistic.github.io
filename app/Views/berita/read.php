<?php 
use App\Models\Berita_model;
$m_berita   = new Berita_model();
$sidebar  = $m_berita->sidebar();
?>
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
                <div class="col-md-8">
                    <div class="card" style="margin-bottom: 20px; border: 0px">
                        <div class="">
                            <h7>
                                <?php echo tanggal_singkat($berita['tanggal']) ?> | <small class="text-gray-dark"><i
                                        class="fa fa-eye"></i>
                                    <?php echo $berita['hits']?> Lihat</small></h7>
                        </div>
                        <br>
                        <img src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>">
                        <div class="">
                            <br>
                            <?php echo $berita['isi'] ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="border: 0px;">
                        <div class="card-header">
                            <h3>Berita Lainnya</h3>
                        </div>
                        <div class="card-body">
                            <div class="row"><?php foreach($sidebar as $sidebar) { ?>
                                <div class="col-3">
                                    <?php if($sidebar['gambar']=="") { ?>
                                    <img src="<?php echo icon() ?>" class="img img-thumbnail">
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url('assets/upload/image/thumbs/'.$sidebar['gambar']) ?>"
                                        class="img img-thumbnail">
                                    <?php } ?>
                                </div>
                                <div class="col-9">
                                    <h4 style="font-size: 18px;">
                                        <a href="<?php echo base_url('berita/read/'.$sidebar['slug_berita']) ?>">
                                            <?php echo $sidebar['judul_berita'] ?>
                                        </a>
                                    </h4>
                                    <p class="fs-6"><?php echo tanggal_singkat($sidebar['tanggal']) ?>
                                        | <i class="fa fa-eye"></i>
                                        <?php echo $sidebar['hits'] ?> Lihat</p>
                                </div>
                                <div class="clearfix">
                                    <br>
                                </div>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->