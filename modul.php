<?php
require 'includes/data.php';
$judul = 'Semua Modul';
$halaman = 'modul';
$navDiHero = true; // halaman ini pakai tombol kembali, bukan navbar
include 'includes/header.php';

$daftarKategori = getModulKategori();
// Warna tombol pintasan, urutannya sama dengan warna latar tiap kategori
$btnKategori = ['btn-tosca', '', 'btn-kuning', 'btn-navy'];
?>

<div class="halaman-modul">
    <main class="wrap">
        <div class="aksi-atas">
            <a href="index.php" class="btn btn-putih btn-kembali">← Kembali ke Beranda</a>
            <?php foreach ($daftarKategori as $i => $kat): ?>
                <a href="#kategori-<?= $i + 1 ?>" class="btn btn-sm <?= $btnKategori[$i % 4] ?>"><?= htmlspecialchars($kat['nama']) ?></a>
            <?php endforeach; ?>
        </div>

        <?php foreach ($daftarKategori as $i => $kat): ?>
            <section class="seksi-kategori" id="kategori-<?= $i + 1 ?>">
                <h2 class="judul-seksi mb-3"><?= htmlspecialchars($kat['nama']) ?></h2>

                <div class="carousel-komp">
                    <button type="button" class="panah panah-kiri" aria-label="Modul sebelumnya">&larr;</button>

                    <div class="track-komp" tabindex="0" role="region" aria-label="Daftar <?= htmlspecialchars($kat['nama']) ?>">
                        <?php foreach ($kat['modul'] as $m): ?>
                            <div class="item-modul">
                                <div class="kartu-modul">
                                    <div class="atas warna-<?= htmlspecialchars($m['warna']) ?>">
                                        <?php foreach ($m['gambar'] as $g): ?>
                                            <img src="assets/img/<?= htmlspecialchars($g) ?>" alt="" loading="lazy" onerror="gambarGagal(this)">
                                        <?php endforeach; ?>
                                        <span class="emoji-modul" <?= empty($m['gambar']) ? '' : 'style="display:none"' ?> aria-hidden="true"><?= $m['emoji'] ?></span>
                                    </div>
                                    <div class="bawah">
                                        <strong class="judul"><?= htmlspecialchars($m['judul']) ?></strong><br>
                                        <small class="text-white-50"><?= htmlspecialchars($kat['nama']) ?></small>
                                        <a href="detail.php?id=<?= (int)$m['id'] ?>" class="btn btn-navy btn-sm w-100 mt-3">Buka Modul</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <button type="button" class="panah panah-kanan" aria-label="Modul berikutnya">&rarr;</button>
                </div>
            </section>
        <?php endforeach; ?>
    </main>
</div>

<script>
    // Tombol kategori: gulir sampai kotak kategori berada di tengah area yang terlihat
    // (area di bawah baris tombol yang menempel)
    document.querySelectorAll('.aksi-atas a[href^="#kategori-"]').forEach(function(a) {
        a.addEventListener('click', function(e) {
            const tujuan = document.querySelector(a.getAttribute('href'));
            if (!tujuan) return;
            e.preventDefault();
            const batasAtas = document.querySelector('.aksi-atas').offsetHeight;
            const ruang = window.innerHeight - batasAtas;
            const r = tujuan.getBoundingClientRect();
            // Kalau kotak lebih tinggi dari ruang yang ada, tempelkan di bawah baris tombol
            const sisa = Math.max((ruang - r.height) / 2, 12);
            window.scrollTo({
                top: window.scrollY + r.top - batasAtas - sisa,
                behavior: 'smooth'
            });
        });
    });

    // Kalau gambar belum ada, tampilkan emoji sebagai pengganti
    function gambarGagal(img) {
        const atas = img.parentElement;
        img.remove();
        if (!atas.querySelector('img')) {
            atas.querySelector('.emoji-modul').style.display = 'block';
        }
    }

    // Carousel dengan ujung: berhenti di kartu pertama dan terakhir
    document.querySelectorAll('.halaman-modul .carousel-komp').forEach(function(wadah) {
        const track = wadah.querySelector('.track-komp');
        const kiri = wadah.querySelector('.panah-kiri');
        const kanan = wadah.querySelector('.panah-kanan');

        // Jarak geser = lebar satu kartu + jarak antar kartu
        function langkah() {
            const kartu = track.children[0];
            const gap = parseFloat(getComputedStyle(track).columnGap) || 24;
            return kartu.getBoundingClientRect().width + gap;
        }

        // Sembunyikan panah kalau sudah di ujung
         function perbarui() {
            const maks = track.scrollWidth - track.clientWidth;
            kiri.disabled = track.scrollLeft <= 8;
            kanan.disabled = track.scrollLeft >= maks - 8;
        }

        kiri.addEventListener('click', () => track.scrollBy({
            left: -langkah()
        }));
        kanan.addEventListener('click', () => track.scrollBy({
            left: langkah()
        }));

        // Tombol panah keyboard saat carousel sedang difokuskan
        track.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') {
                e.preventDefault();
                track.scrollBy({
                    left: langkah()
                });
            }
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                track.scrollBy({
                    left: -langkah()
                });
            }
        });

        track.addEventListener('scroll', perbarui, {
            passive: true
        });
        window.addEventListener('resize', perbarui);
        window.addEventListener('load', perbarui);
        perbarui();
    });
</script>

<?php include 'includes/footer.php'; ?>