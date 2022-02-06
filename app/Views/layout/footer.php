<?php 
use App\Models\Konfigurasi_model;
$konfigurasi  = new Konfigurasi_model;
$site         = $konfigurasi->listing();
// Menu
use App\Models\Menu_model;
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
?>
<!-- ======= Footer ======= -->
<footer id="footer" class="">
    <div class="footer-top ">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <h3 class="text-warning"><?php echo $site['namaweb'] ?></h3>
                    <br>
                    <div class="footer-info">

                        <p>
                            <?php echo nl2br(strip_tags($site['alamat'])) ?>
                            <br>
                            <strong>Phone:</strong> <?php echo $site['telepon'] ?><br>
                            <strong>Email:</strong> <?php echo $site['email'] ?><br>
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h3 class="text-warning">Tentang Kami</h3>
                    <br>
                    <ul>
                        <?php foreach($menu_profil as $menu_profil) { ?>
                        <li><i class="bx bx-chevron-right text-warning"></i> <a
                                href="<?php echo base_url('berita/profil/'.$menu_profil['slug_berita']) ?>"><?php echo $menu_profil['judul_berita'] ?></a>
                        </li>
                        <?php } ?>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h3 class="text-warning">Layanan Kami</h3>
                    <br>
                    <ul>
                        <?php foreach($menu_layanan as $menu_layanan) { ?>
                        <li><i class="bx bx-chevron-right text-warning"></i> <a
                                href="<?php echo base_url('berita/layanan/'.$menu_layanan['slug_berita']) ?>"><?php echo $menu_layanan['judul_berita'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h3 class="text-warning">Ikuti Kami</h3>

                    <div class="social-links mt-3">
                        <a href="<?php echo $site['twitter'] ?>" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $site['facebook'] ?>" class="facebook"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo $site['instagram'] ?>" class="instagram"><i
                                class="fab fa-instagram"></i></a>
                        <a href="<?php echo $site['youtube'] ?>" class="google-plus"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright 2022<strong></strong>. Web Design and Development <a href="" class="text-warning">Tunas
                logistics</a>
        </div>

    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/purecounter/purecounter.js"></script>
<script src="<?php echo base_url() ?>/assets/template/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url() ?>/assets/template/assets/js/main.js"></script>
<!-- DataTables  & Plugins -->

<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>

<script>
const scriptURL =
    'https://script.google.com/macros/s/AKfycbyb-GlTAm5I1INwFLzdq7vJ1VMoOHIbqAPtxttFcQ1-IPgDvo5Nv2ACXAaO6B2W0Y3E/exec'
const form = document.forms['tunas-logistic-contact-form']
const btnKirim = document.querySelector('.btn-kirim')
const btnLoading = document.querySelector('.btn-loading')
const alert = document.querySelector('.alert')


form.addEventListener('submit', e => {
    e.preventDefault()

    btnLoading.classList.toggle('d-none')
    btnKirim.classList.toggle('d-none')

    fetch(scriptURL, {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => {
            btnLoading.classList.toggle('d-none')
            btnKirim.classList.toggle('d-none')
            alert.classList.toggle('d-none')

            form.reset()
            console.log('Success!', response)
        })
        .catch(error => console.error('Error!', error.message))
})
</script>

<script>
$(function() {
    $('#example1').DataTable();
});
</script>
</body>

</html>