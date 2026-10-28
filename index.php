<?php
require 'includes/data.php';
$judul = 'Beranda';
$halaman = 'beranda';
$navDiHero = true; // navbar ditaruh di atas hero
include 'includes/header.php';
include 'includes/sprite.php';

$daftarKomponen = getKomponen();
$daftarModul = getModul();
$gradModul = ['tosca' => '#3fb37a,#198651', 'oranye' => '#ffe566,#FFCC00', 'marun' => '#ff5a5a,#D10000', 'biru' => '#279DE5,#002E8C'];
$btnModul = ['tosca' => 'btn-tosca', 'oranye' => 'btn-kuning', 'marun' => '', 'biru' => 'btn-ungu'];
$svgModul = [1 => ['bulb', 110, 130], 2 => ['thermo', 110, 130], 3 => ['btn', 120, 120], 4 => ['lcd', 150, 100]];

// Pemisah antar bagian: tanah + pipa
function tampilPemisah($no, $nama, $blok = true)
{ ?>
    <div class="pemisah" role="separator" aria-label="Bagian <?= $nama ?>">
        <svg class="pp dk" style="left:5%" viewBox="0 0 100 120" aria-hidden="true">
            <use href="#pipe" />
        </svg>
        <?php if ($blok) : ?><span class="blok dk" aria-hidden="true"><svg viewBox="0 0 60 60">
                    <use href="#brick" />
                </svg><svg viewBox="0 0 100 100">
                    <use href="#blk" />
                </svg><svg viewBox="0 0 60 60">
                    <use href="#brick" />
                </svg></span><?php endif; ?>
        <svg class="pp dk" style="right:5%" viewBox="0 0 100 120" aria-hidden="true">
            <use href="#pipe" />
        </svg>
    </div>
<?php } ?>

<div class="nav-lengket"><?php include 'includes/navbar.php'; ?></div>

<!-- HERO -->
<header class="hero" id="top">
    <svg class="cl" style="top:70px;width:260px;animation-duration:55s" aria-hidden="true">
        <use href="#cloud" />
    </svg>
    <svg class="cl" style="top:240px;width:200px;animation-duration:42s;animation-delay:-22s" aria-hidden="true">
        <use href="#cloud" />
    </svg>
    <svg class="cl" style="top:150px;width:110px;animation-duration:34s;animation-delay:-8s" aria-hidden="true">
        <use href="#cloud" />
    </svg>
    <svg class="fl" style="left:4%;top:150px;width:64px" aria-hidden="true">
        <use href="#blk" />
    </svg>
    <svg class="fl" style="left:48%;top:120px;width:44px;animation-delay:.5s" aria-hidden="true">
        <use href="#coin" />
    </svg>
    <svg class="fl" style="left:44%;bottom:130px;width:52px;animation-delay:1s" aria-hidden="true">
        <use href="#star" />
    </svg>
    <div class="wrap">
        <div>
            <span class="rib">belajar IoT seru!</span>
            <h1 aria-label="CrowPi"><span style="color:#D10000">C</span><span style="color:#198651">r</span><span style="color:#FFCC00">o</span><span style="color:#279DE5">w</span><span style="color:#002E8C">P</span><span style="color:#D10000">i</span></h1>
            <div class="bub">Trainer kit pelatihan IoT untuk siswa SMP. Rakit, coding, dan lihat hasilnya langsung di CrowPi.</div>
            <a class="btn" href="modul.php">Lihat Semua Modul →</a>
        </div>
        <div>
            <svg class="dev" viewBox="0 0 520 400" width="100%" role="img" aria-label="CrowPi">
                <use href="#crowpi2" />
            </svg>
            <div class="start"><svg width="46" height="46" aria-hidden="true">
                    <use href="#coin" />
                </svg>
                <div><b>Mulai Belajar</b><span>Ikuti panduan dari nol, tanpa pengalaman.</span><a class="btn yl sm" href="detail.php?id=1">Coba Modul 1 ↗</a></div>
            </div>
        </div>
    </div>
    <svg class="hills" viewBox="0 0 1200 110" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0 60Q150 0 300 50T600 40T900 50T1200 30V110H0Z" fill="#3fb37a" />
        <path d="M0 85Q200 40 400 80T800 70T1200 80V110H0Z" fill="#198651" />
    </svg>
</header>

<main>
    <!-- DUNIA 1: KENALAN -->
    <?php tampilPemisah(1, 'Kenalan'); ?>
    <section id="kenalan" class="sec">
        <div class="wrap about">
            <div>
                <div class="judul-blok"><span class="tag rd">Kenalan dulu</span>
                    <h2 class="judul-seksi">Apa itu CrowPi?</h2>
                </div>
                <p>CrowPi adalah komputer mini berbentuk laptop yang sudah dilengkapi banyak sensor, LED, buzzer, dan layar. Kamu bisa belajar membuat alat pintar tanpa harus menyolder kabel.</p>
                <div class="btns"><a class="btn bl" href="panduan.php?topik=crowpi">Panduan Penggunaan CrowPi</a><a class="btn gr" href="panduan.php?topik=thonny">Panduan Thonny</a></div>
            </div>
            <div class="stage"><svg class="main" viewBox="0 0 520 400" role="img" aria-label="CrowPi">
                    <use href="#crowpi2" />
                </svg></div>
        </div>
    </section>

    <!-- DUNIA 2: KOMPONEN -->
    <?php tampilPemisah(2, 'Komponen'); ?>
    <section id="komponen" class="sec">
        <div class="wrap">
            <div class="baris">
                <div>
                    <div class="judul-blok"><span class="tag yl">Komponen IoT</span>
                        <h2 class="judul-seksi">Kenali komponennya</h2>
                    </div>
                    <p class="sub">Ada <?= count($daftarKomponen) ?> komponen yang akan kamu pakai di CrowPi. Geser kartunya untuk berkenalan satu per satu.</p>
                </div>
                <div class="arrows"><button type="button" class="panah" id="btnKiri" aria-label="Komponen sebelumnya">&larr;</button><button type="button" class="panah" id="btnKanan" aria-label="Komponen berikutnya">&rarr;</button></div>
            </div>
            <div class="carousel-komp">
                <div class="track-komp" id="trackKomp" tabindex="0" role="region" aria-label="Daftar komponen">
                    <?php foreach ($daftarKomponen as $k): ?>
                        <article class="komp warna-<?= htmlspecialchars($k['warna']) ?>">
                            <span class="jenis"><?= htmlspecialchars($k['jenis']) ?></span>
                            <div class="ikon-bulat">
                                <img src="assets/img/<?= htmlspecialchars($k['gambar']) ?>" alt="<?= htmlspecialchars($k['nama']) ?>" width="500" height="500" loading="lazy"
                                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                                <span class="emoji-fallback" aria-hidden="true"><?= $k['emoji'] ?></span>
                            </div>
                            <h3><?= htmlspecialchars($k['nama']) ?></h3>
                            <p><?= htmlspecialchars($k['deskripsi']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- DUNIA 3: MODUL -->
    <?php tampilPemisah(3, 'Modul'); ?>
    <section id="modul" class="sec">
        <div class="wrap">
            <div class="baris">
                <div>
                    <div class="judul-blok"><span class="tag">Modul Pembelajaran</span>
                        <h2 class="judul-seksi">Pilih petualanganmu</h2>
                    </div>
                </div>
                <a href="modul.php" class="btn yl sm">Lihat semua →</a>
            </div>
            <div class="wheel-wrap">
                <button type="button" class="panah panah-kiri" id="mKiri" aria-label="Modul sebelumnya">&larr;</button>
                <button type="button" class="panah panah-kanan" id="mKanan" aria-label="Modul berikutnya">&rarr;</button>
                <div class="wheel" id="wheel">
                    <?php foreach ($daftarModul as $m):
                        $s = $svgModul[$m['id']] ?? null; ?>
                        <div class="mc" style="--c:linear-gradient(160deg,<?= $gradModul[$m['warna']] ?? $gradModul['biru'] ?>)">
                            <div class="im">
                                <?php if ($s): ?><svg width="<?= $s[1] ?>" height="<?= $s[2] ?>" aria-hidden="true">
                                        <use href="#<?= $s[0] ?>" />
                                    </svg>
                                <?php else: ?><span aria-hidden="true"><?= $m['ikon'] ?></span><?php endif; ?>
                            </div>
                            <div class="bd">
                                <b><?= htmlspecialchars($m['judul']) ?></b><small><?= htmlspecialchars($m['kategori']) ?></small><br>
                                <a class="btn <?= $btnModul[$m['warna']] ?? '' ?> sm" href="detail.php?id=<?= $m['id'] ?>">Buka Modul</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="dots" id="dots"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- DUNIA 4: BANTUAN -->
    <?php tampilPemisah(4, 'Bantuan', false); ?>
    <section id="bantuan" class="sec">
        <div class="wrap">
            <div class="judul-blok"><span class="tag rd">Bantuan</span>
                <h2 class="judul-seksi">Butuh bantuan?</h2>
            </div>
            <div class="faq">
                <?php foreach (getBantuan() as $b): ?>
                    <details>
                        <summary><?= htmlspecialchars($b['judul']) ?></summary>
                        <p><?= htmlspecialchars($b['isi']) ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<script>
    // Roda kartu modul
    (function() {
        const cs = [...document.querySelectorAll('.mc')],
            dots = document.getElementById('dots'),
            n = cs.length;
        let a = 0;
        cs.forEach((_, i) => {
            const d = document.createElement('i');
            d.onclick = () => go(i);
            dots.appendChild(d);
        });

        function go(x) {
            a = (x + n) % n;
            render();
        }

        function render() {
            const w = innerWidth < 800 ? 150 : 250;
            cs.forEach((c, i) => {
                const o = ((i - a + 1) % n + n) % n - 1,
                    ab = Math.abs(o);
                c.style.transform = `translate(${o*w}px,${ab*50}px) rotate(${o*9}deg) scale(${1-ab*.14})`;
                c.style.opacity = ab > 1 ? 0 : 1;
                c.style.pointerEvents = ab > 1 ? 'none' : 'auto';
                c.style.zIndex = 10 - ab;
                c.classList.toggle('aktif', i === a);
                c.onclick = ab ? () => go(i) : null;
            });
            [...dots.children].forEach((d, i) => d.className = i == a ? 'on' : '');
        }
        document.getElementById('mKiri').onclick = () => go(a - 1);
        document.getElementById('mKanan').onclick = () => go(a + 1);
        addEventListener('resize', render);
        render();
    })();

    // Carousel komponen (berputar tanpa ujung)
    (function() {
        const track = document.getElementById('trackKomp'),
            kiri = document.getElementById('btnKiri'),
            kanan = document.getElementById('btnKanan');
        if (!track) return;
        const asli = Array.from(track.children),
            n = asli.length;
        const klon = el => {
            const c = el.cloneNode(true);
            c.setAttribute('aria-hidden', 'true');
            c.setAttribute('inert', '');
            return c;
        };
        track.prepend(...asli.map(klon));
        track.append(...asli.map(klon));
        const langkah = () => track.children[n].offsetWidth + (parseFloat(getComputedStyle(track).columnGap) || 20);
        let lebar = langkah();

        function lompat(x) {
            const s = track.style.scrollSnapType,
                p = track.style.scrollBehavior;
            track.style.scrollSnapType = 'none';
            track.style.scrollBehavior = 'auto';
            track.scrollLeft = x;
            track.style.scrollSnapType = s;
            track.style.scrollBehavior = p;
        }
        const posisiAwal = () => track.scrollLeft + track.children[n].getBoundingClientRect().left - track.getBoundingClientRect().left;

        function normalisasi() {
            const a = posisiAwal(),
                p = n * lebar;
            let x = track.scrollLeft;
            if (x < a - 1) x += p;
            else if (x >= a + p - 1) x -= p;
            else return;
            lompat(x);
        }
        const keAwal = () => {
            lebar = langkah();
            lompat(posisiAwal());
        };
        kiri.onclick = () => track.scrollBy({
            left: -lebar
        });
        kanan.onclick = () => track.scrollBy({
            left: lebar
        });
        track.addEventListener('keydown', e => {
            if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
                e.preventDefault();
                track.scrollBy({
                    left: e.key === 'ArrowRight' ? lebar : -lebar
                });
            }
        });
        let jeda;
        track.addEventListener('scroll', () => {
            clearTimeout(jeda);
            jeda = setTimeout(normalisasi, 120);
        }, {
            passive: true
        });
        addEventListener('resize', keAwal);
        addEventListener('load', keAwal);
        keAwal();
    })();

    // Bantuan: buka satu, yang lain otomatis menutup
    document.querySelectorAll('.faq details').forEach(d => d.addEventListener('toggle', () => {
        if (d.open) document.querySelectorAll('.faq details[open]').forEach(o => {
            if (o !== d) o.open = false;
        });
    }));

    // Navbar mengikuti bagian yang sedang dilihat
    (function() {
        const links = [...document.querySelectorAll('.nav-hero a:not(.logo)')];
        const peta = {
            top: 'beranda',
            kenalan: 'beranda',
            komponen: 'komponen',
            modul: 'modul',
            bantuan: 'bantuan'
        };
        const cari = nama => links.find(a => a.textContent.trim().toLowerCase() === nama);

        function perbarui() {
            let aktif = 'top';
            Object.keys(peta).forEach(id => {
                const el = document.getElementById(id);
                if (el && el.getBoundingClientRect().top <= innerHeight * 0.4) aktif = id;
            });
            if (innerHeight + scrollY >= document.body.scrollHeight - 4) aktif = 'bantuan';
            const tujuan = cari(peta[aktif]);
            if (tujuan) links.forEach(a => a.classList.toggle('aktif', a === tujuan));
        }
        addEventListener('scroll', perbarui, {
            passive: true
        });
        addEventListener('load', perbarui);
        perbarui();
    })();
</script>

<?php include 'includes/footer.php'; ?>