<?php
require 'includes/data.php';

$daftar = getSemuaModulUrut();
$id = (int)($_GET['id'] ?? 0);

$posisi = null;
foreach ($daftar as $i => $m) {
    if ((int)$m['id'] === $id) {
        $posisi = $i;
        break;
    }
}
$detail = getDetailModul($id);

// id tidak ada: kembali ke daftar modul
if ($posisi === null || !$detail) {
    header('Location: modul.php');
    exit;
}

$sebelumnya = $daftar[$posisi - 1] ?? null;
$berikutnya = $daftar[$posisi + 1] ?? null;

$judul = $detail['judul'];
$halaman = 'modul';
$navDiHero = true;
include 'includes/header.php';
?>

<div class="halaman-modul">
    <main class="wrap">
        <a href="modul.php" class="btn btn-tosca btn-kembali">← Kembali ke Modul</a>

        <h1 class="detail-judul"><?= htmlspecialchars($detail['judul']) ?></h1>

        <!-- Tab -->
        <div class="tab-detail" id="tabDetail">
            <a href="#video" class="aktif">Video</a>
            <a href="#materi">Materi</a>
            <a href="#kode">Kode</a>
        </div>

        <!-- Video -->
        <section id="video" class="mb-5">
            <?php if ($detail['video'] !== ''): ?>
                <div class="video-box">
                    <iframe src="https://www.youtube-nocookie.com/embed/<?= htmlspecialchars($detail['video']) ?>"
                        title="Video tutorial <?= htmlspecialchars($detail['judul']) ?>"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen loading="lazy"></iframe>
                </div>
            <?php else: ?>
                <div class="video-box video-kosong" role="img" aria-label="Video belum tersedia">
                    <span class="ikon-play">▶</span>
                </div>
            <?php endif; ?>
        </section>

        <!-- Langkah + hasil -->
        <section id="materi">
            <div class="row g-4 mb-4">
                <div class="col-lg-7">
                    <div class="kartu-putih h-100">
                        <h2 class="h4 judul-kartu">Langkah-langkah</h2>
                        <ol class="daftar-langkah">
                            <?php foreach ($detail['langkah'] as $l): ?>
                                <li><?= htmlspecialchars($l) ?></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="kartu-hasil h-100">
                        <strong class="judul">Hasil yang diharapkan</strong>
                        <div class="hasil-emoji" aria-hidden="true"><?= $detail['hasil_emoji'] ?></div>
                        <p class="mb-0"><?= htmlspecialchars($detail['hasil_teks']) ?></p>
                    </div>
                </div>
            </div>

            <!-- Penjelasan -->
            <div class="kartu-putih mb-5">
                <h2 class="h4 judul-kartu">Penjelasan</h2>
                <p class="mb-0"><?= htmlspecialchars($detail['penjelasan']) ?></p>
            </div>
        </section>

        <!-- Kode -->
        <section id="kode">
            <h2 class="h4 judul-kartu mb-3">Kode Program</h2>
            <div class="kotak-kode"><pre id="isiKode"><code><?= htmlspecialchars($detail['kode']) ?></code></pre></div>
            <button type="button" class="btn btn-oranye btn-sm mt-3" id="btnSalin">Salin Kode</button>
        </section>

        <!-- Navigasi antar modul -->
        <div class="d-flex justify-content-between align-items-center nav-bawah">
            <?php if ($sebelumnya): ?>
                <a href="detail.php?id=<?= (int)$sebelumnya['id'] ?>" class="btn btn-putih btn-sm">← Sebelumnya</a>
            <?php else: ?>
                <span></span>
            <?php endif; ?>

            <?php if ($berikutnya): ?>
                <a href="detail.php?id=<?= (int)$berikutnya['id'] ?>" class="btn btn-ungu btn-sm">Selesai &amp; Lanjut →</a>
            <?php else: ?>
                <a href="modul.php" class="btn btn-ungu btn-sm">Selesai ✓</a>
            <?php endif; ?>
        </div>
    </main>
</div>

<script>
    // Tombol salin kode
    document.getElementById('btnSalin').addEventListener('click', function() {
        const btn = this;
        const teks = document.getElementById('isiKode').innerText;

        function sukses() {
            btn.textContent = 'Tersalin ✓';
            setTimeout(() => btn.textContent = 'Salin Kode', 2000);
        }

        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(teks).then(sukses);
        } else {
            // Cadangan untuk http biasa (misalnya akses lewat IP)
            const t = document.createElement('textarea');
            t.value = teks;
            t.style.position = 'fixed';
            t.style.opacity = '0';
            document.body.appendChild(t);
            t.select();
            document.execCommand('copy');
            t.remove();
            sukses();
        }
    });

    // Tab aktif mengikuti bagian yang sedang dilihat
    (function() {
        const tabs = document.querySelectorAll('#tabDetail a');
        const bagian = Array.from(tabs).map(a => document.querySelector(a.getAttribute('href')));

        function setAktif(i) {
            tabs.forEach((t, x) => t.classList.toggle('aktif', x === i));
        }
        tabs.forEach((t, i) => t.addEventListener('click', () => setAktif(i)));

        window.addEventListener('scroll', function() {
            const y = window.scrollY + 200;
            let aktif = 0;
            bagian.forEach((b, i) => {
                if (b && b.offsetTop <= y) aktif = i;
            });
            setAktif(aktif);
        }, { passive: true });
    })();
</script>

<?php include 'includes/footer.php'; ?>