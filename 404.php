
<?php
get_header();
?>

<section class="vitare-404-section">

    <div class="container">

        <div class="vitare-404-content">

            <span class="vitare-section-label">OOPS! THIS PAGE IS MISSING ✧</span>

            <h1>Lost in Space<span>?</span></h1>

            <div class="vitare-404-number">404</div>

            <p>
                Sepertinya halaman yang kamu cari tidak ditemukan,
                mungkin sudah dipindahkan atau alamatnya kurang tepat.
            </p>

            <a class="vitare-button" href="<?php echo esc_url(home_url('/')); ?>">
                Kembali ke Beranda ↗
            </a>

        </div>

    </div>

</section>

<?php
get_footer();
?>
