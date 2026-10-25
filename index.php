<?php
require 'includes/data.php';
$judul = 'Beranda';
$halaman = 'beranda';
$navDiHero = true; // navbar ditaruh di dalam hero
include 'includes/header.php';

$daftarKomponen = getKomponen();
?>

<!-- HERO -->
<section class="hero">
    <?php include 'includes/navbar.php'; ?>

    <p class="text-center fs-3 mt-4 mb-0">belajar IoT seru.</p>
    <div class="hero-judul judul" aria-label="CrowPi">
        Crow<span class="robot" aria-hidden="true"><span class="robot-layar">
                <span class="mata"><i style="background:#ffd966"></i><i style="background:#fff"></i><i style="background:#7ba7dc"></i></span>
                <span class="mulut"></span>
            </span></span>Pi
    </div>

    <div class="row align-items-end g-3">
        <div class="col-md-6">
            <p>Trainer kit pelatihan IoT untuk siswa SMP.<br>Rakit, coding, dan lihat hasilnya langsung di CrowPi.</p>
            <a href="#modul" class="btn btn-putih">Lihat Semua Modul →</a>
        </div>
        <div class="col-md-5 offset-md-1">
            <div class="kartu-mulai">
                <div class="ikon-roket">🚀</div>
                <div>
                    <strong class="judul">Mulai Belajar</strong>
                    <p class="small mb-2">Ikuti panduan dari nol, tanpa pengalaman.</p>
                    <a href="detail.php?id=1" class="btn btn-ungu btn-sm">Coba Modul 1</a>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="wrap">

    <!-- KENALAN DULU -->
    <section class="kartu-kenal row g-0 my-5">
        <div class="col-md-6 p-4 p-md-5">
            <span class="label-pill">Kenalan dulu</span>
            <h2 class="judul-seksi mt-3">Apa itu CrowPi?</h2>
            <p>CrowPi adalah komputer mini berbentuk laptop yang sudah dilengkapi banyak sensor, LED, buzzer, dan layar. Kamu bisa belajar membuat alat pintar tanpa harus menyolder kabel.</p>
            <div class="d-flex flex-wrap gap-2">
                <a href="panduan.php?topik=crowpi" class="btn btn-ungu">Panduan Penggunaan CrowPi</a>
                <a href="panduan.php?topik=thonny" class="btn btn-tosca">Panduan Thonny</a>
            </div>
        </div>
        <div class="col-md-6 panel-tosca" aria-hidden="true">💻</div>
        <!-- Ganti emoji dengan gambar: <img src="assets/img/crowpi.png" class="img-fluid" alt="CrowPi"> -->
    </section>

    <!-- KOMPONEN (carousel dengan panah kiri-kanan) -->
    <section id="komponen" class="my-5">
        <span class="label-pill">Komponen IoT</span>
        <h2 class="judul-seksi mt-3">Kenali komponennya</h2>
        <p class="mb-1">Ada <?= count($daftarKomponen) ?> komponen yang akan kamu pakai di CrowPi. Geser kartunya untuk berkenalan satu per satu.</p>

        <div class="carousel-komp">
            <button type="button" class="panah panah-kiri" id="btnKiri" aria-label="Komponen sebelumnya">&larr;</button>

            <div class="track-komp" id="trackKomp" tabindex="0" role="region" aria-label="Daftar komponen">
                <?php foreach ($daftarKomponen as $k): ?>
                    <article class="komp warna-<?= htmlspecialchars($k['warna']) ?>">
                        <span class="jenis"><?= htmlspecialchars($k['jenis']) ?></span>
                        <div class="ikon-bulat">
                            <img src="assets/img/<?= htmlspecialchars($k['gambar']) ?>"
                                alt="<?= htmlspecialchars($k['nama']) ?>"
                                width="500" height="500" loading="lazy"
                                onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                            <span class="emoji-fallback" aria-hidden="true"><?= $k['emoji'] ?></span>
                        </div>
                        <h3 class="h4"><?= htmlspecialchars($k['nama']) ?></h3>
                        <p class="deskripsi mb-0"><?= htmlspecialchars($k['deskripsi']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

            <button type="button" class="panah panah-kanan" id="btnKanan" aria-label="Komponen berikutnya">&rarr;</button>
        </div>
    </section>
</main>

<!-- MODUL -->
<section id="modul" class="seksi-gelap">
    <div class="wrap">
        <span class="label-pill">Modul Pembelajaran</span>
        <div class="d-flex justify-content-between align-items-end mt-3 mb-4">
            <h2 class="judul text-white mb-0">Pilih petualanganmu</h2>
            <a href="modul.php" class="link-tosca">Lihat semua →</a>
        </div>
        <div class="row g-4">
            <?php foreach (getModul() as $m): ?>
                <div class="col-6 col-lg-3">
                    <div class="kartu-modul">
                        <div class="atas warna-<?= $m['warna'] ?>"><?= $m['ikon'] ?></div>
                        <div class="bawah">
                            <strong class="judul"><?= htmlspecialchars($m['judul']) ?></strong><br>
                            <small class="text-white-50"><?= htmlspecialchars($m['kategori']) ?></small>
                            <a href="detail.php?id=<?= $m['id'] ?>" class="btn btn-putih btn-sm w-100 mt-3">Buka Modul</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- BANTUAN -->
<section id="bantuan" class="wrap my-5">
    <span class="label-pill">Bantuan</span>
    <h2 class="judul-seksi mt-3">Butuh bantuan?</h2>
    <div class="accordion accordion-flush col-lg-6 px-0" id="akordeonBantuan">
        <?php foreach (getBantuan() as $i => $b): ?>
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bantu<?= $i ?>">
                        <?= htmlspecialchars($b['judul']) ?>
                    </button>
                </h3>
                <div id="bantu<?= $i ?>" class="accordion-collapse collapse" data-bs-parent="#akordeonBantuan">
                    <div class="accordion-body"><?= htmlspecialchars($b['isi']) ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Script carousel komponen (berputar tanpa ujung) -->
<script>
    (function() {
        const track = document.getElementById('trackKomp');
        const kiri = document.getElementById('btnKiri');
        const kanan = document.getElementById('btnKanan');
        if (!track) return;

        const asli = Array.from(track.children);
        const n = asli.length;

        // Gandakan kartu di depan dan di belakang supaya putarannya tanpa ujung
        function klon(el) {
            const c = el.cloneNode(true);
            c.setAttribute('aria-hidden', 'true');
            c.setAttribute('inert', '');
            return c;
        }
        track.prepend(...asli.map(klon));
        track.append(...asli.map(klon));

        // Jarak geser = lebar satu kartu + jarak antar kartu
        function langkah() {
            const kartu = track.children[n];
            const gap = parseFloat(getComputedStyle(track).columnGap) || 24;
            return kartu.getBoundingClientRect().width + gap;
        }
        let lebar = langkah();

        // Pindah posisi seketika (tanpa animasi dan tanpa snap)
        function lompat(x) {
            const snap = track.style.scrollSnapType;
            const perilaku = track.style.scrollBehavior;
            track.style.scrollSnapType = 'none';
            track.style.scrollBehavior = 'auto';
            track.scrollLeft = x;
            track.style.scrollSnapType = snap;
            track.style.scrollBehavior = perilaku;
        }

        // Posisi scroll saat kartu asli pertama tepat di tepi kiri
        function posisiAwal() {
            const kartu = track.children[n];
            return track.scrollLeft + kartu.getBoundingClientRect().left - track.getBoundingClientRect().left;
        }

        // Kalau sudah masuk area kartu gandaan, lompat diam-diam ke kartu aslinya
        function normalisasi() {
            const a = posisiAwal();
            const p = n * lebar;
            let x = track.scrollLeft;
            if (x < a - 1) x += p;
            else if (x >= a + p - 1) x -= p;
            else return;
            lompat(x);
        }

        function keAwal() {
            lebar = langkah();
            lompat(posisiAwal());
        }

        kiri.addEventListener('click', () => track.scrollBy({
            left: -lebar
        }));
        kanan.addEventListener('click', () => track.scrollBy({
            left: lebar
        }));

        // Tombol panah keyboard saat carousel sedang difokuskan
        track.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') {
                e.preventDefault();
                track.scrollBy({
                    left: lebar
                });
            }
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                track.scrollBy({
                    left: -lebar
                });
            }
        });

        // Setelah geseran berhenti, rapikan posisinya
        let jeda;
        track.addEventListener('scroll', () => {
            clearTimeout(jeda);
            jeda = setTimeout(normalisasi, 120);
        }, {
            passive: true
        });

        window.addEventListener('resize', keAwal);
        window.addEventListener('load', keAwal);
        keAwal();
    })();
</script>

<?php include 'includes/footer.php'; ?>