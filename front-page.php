<?php
get_header();
?>

<section class="vitare-hero">
    <div class="container vitare-hero-inner">
        <div class="vitare-hero-content">
            <span class="vitare-eyebrow">WELCOME TO MY CREATIVE SPACE ✦</span>

            <h1>Sedikit Ide, <span>Banyak Eksplorasi.</span></h1>

            <p>
                Dari coretan kecil jadi karya, dari rasa penasaran jadi kreasi.
                Di antara desain, teknologi, dan cerita, selalu ada hal baru
                yang seru untuk dicoba.
            </p>

            <div class="vitare-hero-actions">
                <a class="vitare-button vitare-button-primary" href="#portfolio">
                    ✦ Jelajahi Karyaku
                </a>

                <a class="vitare-button vitare-button-secondary" href="#about">
                    Kenalan Yuk!
                </a>
            </div>

            <div class="vitare-hero-note">
                <span class="vitare-note-dot"></span>
                Design it. Build it. Make it yours.
            </div>
        </div>

        <div class="vitare-hero-art" aria-hidden="true">
            <div class="vitare-orbit vitare-orbit-one"></div>
            <div class="vitare-orbit vitare-orbit-two"></div>

            <div class="vitare-glow vitare-glow-one"></div>
            <div class="vitare-glow vitare-glow-two"></div>

            <div class="vitare-art-card">
                <span class="vitare-art-star">✦</span>
                <span class="vitare-art-label">DREAM IT. CREATE IT.</span>
                <strong>Make it<br>meaningful.</strong>
                <span class="vitare-art-caption">Create · Learn · Grow</span>
            </div>

            <span class="vitare-floating-star vitare-star-one">✧</span>
            <span class="vitare-floating-star vitare-star-two">✦</span>
            <span class="vitare-floating-star vitare-star-three">✧</span>
        </div>
    </div>
</section>

<section class="vitare-intro" id="about">
    <div class="container vitare-intro-inner">
        <div>
            <span class="vitare-section-label">A LITTLE BIT ABOUT ME ✧</span>
            <h2>Bukan Cuma Tentang Hasil, tapi Juga Proses.</h2>
        </div>

        <p>
            Ada ide yang berawal dari iseng, desain yang lahir dari eksperimen,
            proyek yang penuh tantangan, dan cerita yang sayang kalau hanya
            disimpan sendiri. Di sini, desain visual bertemu dengan teknologi,
            rasa penasaran berubah menjadi proyek, dan setiap pengalaman
            menjadi bagian dari perjalanan untuk terus berkembang.
            Karena belajar bukan cuma soal menemukan jawaban,
            tetapi juga berani mencoba hal-hal baru.
        </p>
    </div>
</section>

<section class="vitare-section" id="portfolio">
    <div class="container">
        <div class="vitare-section-heading">
            <div>
                <span class="vitare-section-label">MADE WITH CURIOSITY & CREATIVITY ✦</span>
                <h2>Things I've Made <span>& Loved.</span></h2>
            </div>

            <p>
                Dari visual penuh warna sampai proyek digital yang bikin mikir.
                Setiap karya punya cerita, tantangan, dan prosesnya sendiri.
            </p>
        </div>

        <div class="vitare-card-grid">
            <?php
            $vitare_portfolio = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'portfolio,artikel',
                'post_status' => 'publish'
            ));

            if ($vitare_portfolio->have_posts()) :
                while ($vitare_portfolio->have_posts()) :
                    $vitare_portfolio->the_post();
            ?>

                <article class="vitare-work-card">
                    <a class="vitare-work-image" href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else : ?>
                            <div class="vitare-image-placeholder">
                                <span>✧</span>
                                <small>A LITTLE PIECE OF CREATIVITY</small>
                            </div>
                        <?php endif; ?>
                    </a>

                    <div class="vitare-work-content">
                        <span class="vitare-card-label">PORTFOLIO ✦</span>

                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <p>
                            <?php echo esc_html(wp_trim_words(get_the_excerpt(), 18)); ?>
                        </p>

                        <a class="vitare-text-link" href="<?php the_permalink(); ?>">
                            Lihat Ceritanya ↗
                        </a>
                    </div>
                </article>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>

                <article class="vitare-work-card vitare-empty-card">
                    <div class="vitare-image-placeholder">
                        <span>✧</span>
                        <small>VISUAL PLAYGROUND</small>
                    </div>

                    <div class="vitare-work-content">
                        <span class="vitare-card-label">GRAPHIC DESIGN</span>
                        <h3>Visual Playground</h3>
                        <p>
                            Dari logo yang punya karakter sampai poster penuh cerita.
                            Di sinilah ide-ide visual menemukan bentuknya.
                        </p>
                    </div>
                </article>

                <article class="vitare-work-card vitare-empty-card">
                    <div class="vitare-image-placeholder">
                        <span>⌘</span>
                        <small>DIGITAL LAB</small>
                    </div>

                    <div class="vitare-work-content">
                        <span class="vitare-card-label">INFORMATICS</span>
                        <h3>Digital Lab</h3>
                        <p>
                            Eksplorasi website, aplikasi, dan teknologi.
                            Tempat rasa penasaran bertemu barisan kode.
                        </p>
                    </div>
                </article>

                <article class="vitare-work-card vitare-empty-card">
                    <div class="vitare-image-placeholder">
                        <span>✎</span>
                        <small>BEYOND THE SCREEN</small>
                    </div>

                    <div class="vitare-work-content">
                        <span class="vitare-card-label">CREATIVE PROJECTS</span>
                        <h3>Beyond the Screen</h3>
                        <p>
                            Cerita di balik kepanitiaan, kolaborasi,
                            publikasi, dan pengalaman yang memberi banyak pelajaran.
                        </p>
                    </div>
                </article>

            <?php
            endif;
            ?>
        </div>
    </div>
</section>

<section class="vitare-journal" id="journal">
    <div class="container vitare-journal-inner">
        <div>
            <span class="vitare-section-label">LITTLE NOTES, BIG JOURNEYS ✧</span>

            <h2>Di Balik <span>Proses.</span></h2>

            <p>
                Tempat berbagi hal yang kupelajari, pengalaman yang kutemui,
                proyek yang kukerjakan, dan ide-ide yang terus berkembang.
                Mulai dari catatan perkuliahan, cerita kepanitiaan,
                publikasi ilmiah, sampai hal-hal kecil yang ternyata
                memberi banyak pelajaran.
            </p>
        </div>

        <div class="vitare-journal-list">
            <?php
            $vitare_journal = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'jurnal',
                'post_status' => 'publish'
            ));

            if ($vitare_journal->have_posts()) :
                while ($vitare_journal->have_posts()) :
                    $vitare_journal->the_post();
            ?>

                <article class="vitare-journal-item">
                    <span><?php echo esc_html(get_the_date('d M Y')); ?></span>

                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>

                    <a class="vitare-text-link" href="<?php the_permalink(); ?>">
                        Baca Ceritanya ↗
                    </a>
                </article>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>

                <div class="vitare-journal-item">
                    <span>A NOTE TO MYSELF ✧</span>

                    <h3>Every little step means something.</h3>

                    <p>
                        Catatan belajar, cerita perjalanan, ide yang sedang
                        tumbuh, dan pengalaman yang mengajarkanku sesuatu.
                        Semuanya punya tempat di sini.
                    </p>
                </div>

            <?php endif; ?>
        </div>
    </div>
</section>

<section class="vitare-contact">
    <div class="container vitare-contact-inner">
        <span class="vitare-section-label">YOUR NEXT CHAPTER STARTS HERE ✦</span>

        <h2>Masih Banyak Ide yang Ingin Kucoba.</h2>

        <p>
            Terus belajar, berani bereksperimen, dan menciptakan sesuatu
            yang bermakna. Karena cerita terbaik mungkin belum dimulai.
        </p>

        <a class="vitare-button vitare-button-primary" href="#portfolio">
            Let's Explore! ✧
        </a>
    </div>
</section>

<?php
get_footer();
?>