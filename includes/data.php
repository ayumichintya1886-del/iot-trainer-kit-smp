<?php

function getKomponen()
{
    return [
        [
            'nama' => 'Resistor',
            'gambar' => 'resistor.png',
            'warna' => 'tosca',
            'emoji' => '〰️',
            'jenis' => 'Pelindung',
            'deskripsi' => 'Pembatas arus listrik supaya komponen lain tidak rusak. Nilainya diukur dalam ohm (Ω), dan warna-warna gelangnya adalah kode nilainya.',
        ],
        [
            'nama' => 'LED',
            'gambar' => 'led.png',
            'warna' => 'oranye',
            'emoji' => '💡',
            'jenis' => 'Output',
            'deskripsi' => 'Lampu kecil yang menyala saat dialiri listrik, cocok untuk indikator. Kaki yang lebih panjang adalah kaki plus (+), jadi jangan sampai terbalik ya.',
        ],
        [
            'nama' => 'Buzzer',
            'gambar' => 'buzzer.png',
            'warna' => 'marun',
            'emoji' => '🔔',
            'jenis' => 'Output',
            'deskripsi' => 'Penghasil bunyi bip untuk alarm dan notifikasi. Bunyinya berasal dari getaran kecil di dalam buzzer.',
        ],
        [
            'nama' => 'Sensor Suhu',
            'gambar' => 'dht11.png',
            'warna' => 'biru',
            'emoji' => '🌡️',
            'jenis' => 'Input',
            'deskripsi' => 'Mengukur suhu dan kelembapan udara di sekitarmu. Satu sensor ini bisa mengukur dua hal sekaligus.',
        ],
        [
            'nama' => 'Tombol',
            'gambar' => 'tombol.png',
            'warna' => 'tosca',
            'emoji' => '🔘',
            'jenis' => 'Input',
            'deskripsi' => 'Saklar kecil yang memberi perintah saat kamu menekannya. Saat ditekan, dua kontak di dalamnya tersambung sehingga listrik bisa lewat.',
        ],
        [
            'nama' => 'Layar LCD',
            'gambar' => 'lcd.png',
            'warna' => 'oranye',
            'emoji' => '📟',
            'jenis' => 'Output',
            'deskripsi' => 'Layar mungil untuk menampilkan teks, angka, dan pesan. LCD 16x2 menampilkan 2 baris, tiap baris muat 16 huruf.',
        ],
        [
            'nama' => 'Breadboard',
            'gambar' => 'breadboard.png',
            'warna' => 'marun',
            'emoji' => '🧩',
            'jenis' => 'Papan rangkai',
            'deskripsi' => 'Papan berlubang untuk merangkai rangkaian tanpa solder, bisa dicabut dan dipasang lagi. Di dalamnya ada jalur logam yang menyambungkan lubang-lubangnya.',
        ],
        [
            'nama' => 'Kabel Jumper',
            'gambar' => 'jumper.png',
            'warna' => 'biru',
            'emoji' => '🔌',
            'jenis' => 'Penghubung',
            'deskripsi' => 'Kabel kecil berujung pin untuk menyambungkan satu komponen ke komponen lain. Warna kabel bebas, tapi biasanya merah untuk plus (+) dan hitam untuk minus (−).',
        ],
        [
            'nama' => 'Pin GPIO',
            'gambar' => 'gpio.png',
            'warna' => 'tosca',
            'emoji' => '📍',
            'jenis' => 'Penghubung',
            'deskripsi' => 'Deretan pin di Raspberry Pi untuk mengirim dan menerima sinyal dari komponen. Pin GPIO bekerja di 3,3 volt, jadi sambungkan kabel dengan benar sebelum menyalakan.',
        ],
    ];
}

function getModul()
{
    return [
        ['id' => 1, 'judul' => 'Dasar LED & Buzzer', 'kategori' => 'Modul Dasar', 'ikon' => '💡', 'warna' => 'tosca'],
        ['id' => 2, 'judul' => 'Sensor Suhu',        'kategori' => 'Sensor',      'ikon' => '🌡️', 'warna' => 'oranye'],
        ['id' => 3, 'judul' => 'Tombol & Input',     'kategori' => 'Interaksi',   'ikon' => '🔘', 'warna' => 'marun'],
        ['id' => 4, 'judul' => 'Layar LCD',          'kategori' => 'Tampilan',    'ikon' => '📟', 'warna' => 'biru'],
    ];
}

function getBantuan()
{
    return [
        ['judul' => 'Jika program error',        'isi' => 'Baca pesan error di bawah layar Thonny, periksa huruf besar-kecil dan tanda titik dua, lalu jalankan lagi.'],
        ['judul' => 'Cara menyalakan CrowPi',    'isi' => 'Sambungkan adaptor, tekan tombol power, lalu tunggu sampai desktop tampil.'],
        ['judul' => 'Cara membuka Thonny',       'isi' => 'Buka menu aplikasi di CrowPi, pilih Programming, lalu klik Thonny Python IDE.'],
        ['judul' => 'Minta bantuan pendamping',  'isi' => 'Angkat tangan atau panggil pendamping di kelas. Sebutkan modul dan langkah yang sedang kamu kerjakan.'],
    ];
}
