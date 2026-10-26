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

function getModulKategori()
{
    return [
        [
            'nama' => 'Modul Dasar',
            'modul' => [
                ['id' => 1,  'judul' => 'Dasar LED & Buzzer',     'warna' => 'tosca',  'emoji' => '💡', 'gambar' => ['led.png', 'buzzer.png']],
                ['id' => 3,  'judul' => 'Tombol & Input',         'warna' => 'marun',  'emoji' => '🔘', 'gambar' => ['tombol.png']],
                ['id' => 4,  'judul' => 'Layar LCD',              'warna' => 'biru',   'emoji' => '📟', 'gambar' => ['lcd.png']],
                ['id' => 5,  'judul' => 'Breadboard & Jumper',    'warna' => 'oranye', 'emoji' => '🧩', 'gambar' => ['breadboard.png', 'jumper.png']],
                ['id' => 6,  'judul' => 'Pin GPIO',               'warna' => 'tosca',  'emoji' => '📍', 'gambar' => ['gpio.png']],
            ],
        ],
        [
            'nama' => 'Sensor',
            'modul' => [
                ['id' => 2,  'judul' => 'Sensor Suhu',            'warna' => 'oranye', 'emoji' => '🌡️', 'gambar' => ['dht11.png']],
                ['id' => 7,  'judul' => 'Sensor Cahaya',          'warna' => 'tosca',  'emoji' => '🔆', 'gambar' => ['ldr.png']],
                ['id' => 8,  'judul' => 'Sensor Gerak',           'warna' => 'marun',  'emoji' => '🚶', 'gambar' => ['pir.png']],
                ['id' => 9,  'judul' => 'Sensor Jarak',           'warna' => 'biru',   'emoji' => '📏', 'gambar' => ['ultrasonik.png']],
                ['id' => 10, 'judul' => 'Sensor Sentuh',          'warna' => 'oranye', 'emoji' => '👆', 'gambar' => ['sentuh.png']],
            ],
        ],
        [
            'nama' => 'Logika',
            'modul' => [
                ['id' => 11, 'judul' => 'Variabel & Tipe Data',   'warna' => 'biru',   'emoji' => '📦', 'gambar' => []],
                ['id' => 12, 'judul' => 'Percabangan If-Else',    'warna' => 'tosca',  'emoji' => '🔀', 'gambar' => ['led.png', 'tombol.png']],
                ['id' => 13, 'judul' => 'Perulangan LED',         'warna' => 'oranye', 'emoji' => '🔁', 'gambar' => ['led.png']],
                ['id' => 14, 'judul' => 'Fungsi di Python',       'warna' => 'marun',  'emoji' => '🧠', 'gambar' => []],
                ['id' => 15, 'judul' => 'Logika Sensor & Output', 'warna' => 'biru',   'emoji' => '⚙️', 'gambar' => ['dht11.png', 'buzzer.png']],
            ],
        ],
        [
            'nama' => 'Mini Project',
            'modul' => [
                ['id' => 16, 'judul' => 'Membuat Alarm Sederhana',             'warna' => 'marun',  'emoji' => '🚨', 'gambar' => ['buzzer.png', 'tombol.png']],
                ['id' => 17, 'judul' => 'Membuat Lampu Lalu Lintas Sederhana', 'warna' => 'tosca',  'emoji' => '🚦', 'gambar' => ['led.png']],
                ['id' => 18, 'judul' => 'Membuat Termometer Digital Sederhana', 'warna' => 'oranye', 'emoji' => '🌡️', 'gambar' => ['dht11.png', 'lcd.png']],
                ['id' => 19, 'judul' => 'Membuat Penghitung Tombol Sederhana', 'warna' => 'biru',   'emoji' => '🔢', 'gambar' => ['tombol.png', 'lcd.png']],
                ['id' => 20, 'judul' => 'Membuat Pengingat Suhu Sederhana',    'warna' => 'marun',  'emoji' => '🔥', 'gambar' => ['dht11.png', 'buzzer.png', 'led.png']],
            ],
        ],
    ];
}

// Semua modul dalam satu daftar berurutan (urutan kartu di halaman modul)
function getSemuaModulUrut()
{
    $hasil = [];
    foreach (getModulKategori() as $kat) {
        foreach ($kat['modul'] as $m) {
            $m['kategori'] = $kat['nama'];
            $hasil[] = $m;
        }
    }
    return $hasil;
}

// Isi halaman detail. 'video' = ID video YouTube (isi nanti, kosong = tampil placeholder)
function getDetailModul($id)
{
    $d = [
        1 => [
            'judul' => 'Dasar: LED dan Buzzer',
            'video' => 'SkGmtsA69ts',
            'langkah' => ['Nyalakan CrowPi dan buka Thonny.', 'Buat file baru, simpan sebagai led_buzzer.py.', 'Ketik atau salin kode program di bawah.', 'Tekan tombol Run, lihat LED berkedip dan dengar bunyi bip.'],
            'hasil_emoji' => '💡',
            'hasil_teks' => 'LED menyala dan buzzer berbunyi 1 detik, lalu mati 1 detik, berulang.',
            'penjelasan' => 'LED dan buzzer sama-sama komponen output. Saat pin diberi nilai HIGH, arus mengalir dan keduanya aktif. Saat LOW, keduanya mati. Fungsi sleep membuat program menunggu beberapa detik.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            LED = 17     # sesuaikan dengan pin LED di CrowPi
            BUZZER = 18  # sesuaikan dengan pin buzzer di CrowPi
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(LED, GPIO.OUT)
            GPIO.setup(BUZZER, GPIO.OUT)

            while True:
                GPIO.output(LED, GPIO.HIGH)
                GPIO.output(BUZZER, GPIO.HIGH)
                time.sleep(1)
                GPIO.output(LED, GPIO.LOW)
                GPIO.output(BUZZER, GPIO.LOW)
                time.sleep(1)
            KODE,
        ],
        2 => [
            'judul' => 'Sensor: Membaca Suhu',
            'video' => '',
            'langkah' => ['Pastikan sensor suhu DHT11 terpasang di CrowPi.', 'Buat file baru, simpan sebagai suhu.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lihat angka suhu dan kelembapan di layar Thonny.'],
            'hasil_emoji' => '🌡️',
            'hasil_teks' => 'Suhu dan kelembapan udara tampil setiap 2 detik.',
            'penjelasan' => 'Sensor DHT11 mengubah kondisi udara menjadi data digital yang dikirim lewat satu pin. Program membaca data itu lalu menampilkannya. Sensor ini butuh jeda sekitar 2 detik antar pembacaan.',
            'kode' => <<<'KODE'
            import time
            import board
            import adafruit_dht

            sensor = adafruit_dht.DHT11(board.D4)  # sesuaikan dengan pin DHT11 di CrowPi

            while True:
                try:
                    print("Suhu:", sensor.temperature, "C")
                    print("Kelembapan:", sensor.humidity, "%")
                except RuntimeError:
                    print("Gagal membaca, coba lagi...")
                time.sleep(2)
            KODE,
        ],
        3 => [
            'judul' => 'Input: Tombol Menyalakan LED',
            'video' => 'QaYmXHotSH8',
            'langkah' => ['Cari tombol dan LED di CrowPi.', 'Buat file baru, simpan sebagai tombol.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu tekan tombol dan lihat LED-nya.'],
            'hasil_emoji' => '🔘',
            'hasil_teks' => 'LED menyala saat tombol ditekan dan mati saat dilepas.',
            'penjelasan' => 'Tombol adalah komponen input. Saat ditekan, dua kontak tersambung dan pin membaca nilai berbeda. Program terus mengecek keadaan tombol, lalu menyalakan atau mematikan LED sesuai hasilnya.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            TOMBOL = 22  # sesuaikan dengan pin tombol di CrowPi
            LED = 17     # sesuaikan dengan pin LED di CrowPi
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(TOMBOL, GPIO.IN, pull_up_down=GPIO.PUD_UP)
            GPIO.setup(LED, GPIO.OUT)

            while True:
                if GPIO.input(TOMBOL) == GPIO.LOW:  # LOW = sedang ditekan
                    GPIO.output(LED, GPIO.HIGH)
                else:
                    GPIO.output(LED, GPIO.LOW)
                time.sleep(0.05)
            KODE,
        ],
        4 => [
            'judul' => 'Tampilan: Layar LCD',
            'video' => '',
            'langkah' => ['Pasang library RPLCD lewat terminal: pip install RPLCD.', 'Buat file baru, simpan sebagai lcd.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, baca tulisan di layar LCD.'],
            'hasil_emoji' => '📟',
            'hasil_teks' => 'LCD menampilkan "Halo CrowPi!" di baris pertama dan "Belajar IoT" di baris kedua.',
            'penjelasan' => 'LCD 16x2 punya 2 baris dan tiap baris muat 16 huruf. Layar ini terhubung lewat jalur I2C yang punya alamat sendiri. Kita tinggal mengatur posisi kursor lalu menulis teks.',
            'kode' => <<<'KODE'
            from RPLCD.i2c import CharLCD

            lcd = CharLCD('PCF8574', 0x21)  # sesuaikan alamat I2C LCD di CrowPi

            lcd.clear()
            lcd.write_string("Halo CrowPi!")
            lcd.cursor_pos = (1, 0)  # pindah ke baris kedua
            lcd.write_string("Belajar IoT")
            KODE,
        ],
        5 => [
            'judul' => 'Dasar: Breadboard dan Jumper',
            'video' => '',
            'langkah' => ['Tancapkan kaki panjang LED (+) ke satu lubang breadboard.', 'Sambungkan resistor ke kaki pendek LED, lalu jumper ke GND.', 'Sambungkan jumper dari kaki panjang LED ke pin GPIO 17.', 'Jalankan kode di bawah dan lihat LED berkedip.'],
            'hasil_emoji' => '🧩',
            'hasil_teks' => 'LED di breadboard berkedip setiap 0,5 detik.',
            'penjelasan' => 'Breadboard punya jalur logam di dalamnya yang menyambungkan lubang-lubang yang sejajar. Kabel jumper menghubungkan breadboard ke pin GPIO. Resistor wajib dipasang agar LED tidak rusak karena arus berlebih.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            LED = 17  # pin tempat jumper dipasang
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(LED, GPIO.OUT)

            while True:
                GPIO.output(LED, GPIO.HIGH)
                time.sleep(0.5)
                GPIO.output(LED, GPIO.LOW)
                time.sleep(0.5)
            KODE,
        ],
        6 => [
            'judul' => 'Dasar: Pin GPIO',
            'video' => '',
            'langkah' => ['Kenali pin GPIO di CrowPi (bekerja di 3,3 volt).', 'Buat file baru, simpan sebagai gpio.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lihat teks status pin di layar Thonny.'],
            'hasil_emoji' => '📍',
            'hasil_teks' => 'LED menyala dan mati bergantian, status pin tampil di layar.',
            'penjelasan' => 'Pin GPIO bisa dipakai sebagai output (mengirim sinyal) atau input (menerima sinyal). Nilai HIGH berarti 3,3 volt dan LOW berarti 0 volt. Kita memakai penomoran BCM, yaitu nomor GPIO, bukan nomor urut kaki pin.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            PIN = 17  # sesuaikan dengan pin yang dipakai
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(PIN, GPIO.OUT)

            while True:
                GPIO.output(PIN, GPIO.HIGH)
                print("Pin", PIN, "= HIGH (3,3 volt)")
                time.sleep(1)
                GPIO.output(PIN, GPIO.LOW)
                print("Pin", PIN, "= LOW (0 volt)")
                time.sleep(1)
            KODE,
        ],
        7 => [
            'judul' => 'Sensor: Cahaya',
            'video' => '',
            'langkah' => ['Pastikan sensor cahaya terpasang di CrowPi.', 'Buat file baru, simpan sebagai cahaya.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu tutup sensor dengan tangan dan lihat perubahan teksnya.'],
            'hasil_emoji' => '🔆',
            'hasil_teks' => 'Layar menampilkan "Terang" atau "Gelap" sesuai cahaya di sekitar sensor.',
            'penjelasan' => 'Sensor cahaya mengubah terang-gelap menjadi sinyal. Pada modul digital, pin akan HIGH atau LOW tergantung batas kepekaannya. Program membaca pin itu lalu menampilkan hasilnya.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            SENSOR = 23  # sesuaikan dengan pin sensor cahaya
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(SENSOR, GPIO.IN)

            while True:
                if GPIO.input(SENSOR) == GPIO.LOW:
                    print("Terang")
                else:
                    print("Gelap")
                time.sleep(0.5)
            KODE,
        ],
        8 => [
            'judul' => 'Sensor: Gerak (PIR)',
            'video' => '',
            'langkah' => ['Pasang sensor gerak PIR dan LED di CrowPi.', 'Buat file baru, simpan sebagai gerak.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu lambaikan tangan di depan sensor.'],
            'hasil_emoji' => '🚶',
            'hasil_teks' => 'LED menyala saat sensor mendeteksi gerakan.',
            'penjelasan' => 'Sensor PIR mendeteksi perubahan panas dari tubuh yang bergerak. Saat ada gerakan, pin keluarannya menjadi HIGH. Program membaca pin itu dan menyalakan LED sebagai tanda.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            PIR = 21  # sesuaikan dengan pin sensor gerak
            LED = 17  # sesuaikan dengan pin LED
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(PIR, GPIO.IN)
            GPIO.setup(LED, GPIO.OUT)

            while True:
                if GPIO.input(PIR) == GPIO.HIGH:
                    print("Ada gerakan!")
                    GPIO.output(LED, GPIO.HIGH)
                else:
                    GPIO.output(LED, GPIO.LOW)
                time.sleep(0.2)
            KODE,
        ],
        9 => [
            'judul' => 'Sensor: Jarak Ultrasonik',
            'video' => '',
            'langkah' => ['Pasang sensor ultrasonik di CrowPi.', 'Buat file baru, simpan sebagai jarak.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu dekatkan dan jauhkan tanganmu dari sensor.'],
            'hasil_emoji' => '📏',
            'hasil_teks' => 'Jarak benda di depan sensor tampil dalam satuan cm.',
            'penjelasan' => 'Sensor ultrasonik mengirim bunyi yang tidak terdengar, lalu menghitung berapa lama pantulannya kembali. Waktu itu dikali kecepatan suara dan dibagi dua untuk mendapatkan jarak.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            TRIG = 16  # sesuaikan dengan pin TRIG
            ECHO = 12  # sesuaikan dengan pin ECHO
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(TRIG, GPIO.OUT)
            GPIO.setup(ECHO, GPIO.IN)

            def baca_jarak():
                GPIO.output(TRIG, True)
                time.sleep(0.00001)
                GPIO.output(TRIG, False)
                mulai = time.time()
                selesai = time.time()
                while GPIO.input(ECHO) == 0:
                    mulai = time.time()
                while GPIO.input(ECHO) == 1:
                    selesai = time.time()
                return (selesai - mulai) * 34300 / 2

            while True:
                print("Jarak:", round(baca_jarak(), 1), "cm")
                time.sleep(0.5)
            KODE,
        ],
        10 => [
            'judul' => 'Sensor: Sentuh',
            'video' => '',
            'langkah' => ['Pasang sensor sentuh dan LED di CrowPi.', 'Buat file baru, simpan sebagai sentuh.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu sentuh sensornya.'],
            'hasil_emoji' => '👆',
            'hasil_teks' => 'LED menyala selama sensor disentuh.',
            'penjelasan' => 'Sensor sentuh bekerja seperti tombol, tetapi tanpa ditekan. Cukup disentuh jari, pinnya berubah menjadi HIGH. Program membaca perubahan itu dan menyalakan LED.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            SENTUH = 24  # sesuaikan dengan pin sensor sentuh
            LED = 17     # sesuaikan dengan pin LED
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(SENTUH, GPIO.IN)
            GPIO.setup(LED, GPIO.OUT)

            while True:
                GPIO.output(LED, GPIO.input(SENTUH))
                time.sleep(0.05)
            KODE,
        ],
        11 => [
            'judul' => 'Logika: Variabel dan Tipe Data',
            'video' => '',
            'langkah' => ['Buka Thonny, buat file baru bernama variabel.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run.', 'Ubah isi variabelnya, lalu Run lagi dan bandingkan hasilnya.'],
            'hasil_emoji' => '📦',
            'hasil_teks' => 'Layar Thonny menampilkan nama, umur, tinggi, dan status siswa.',
            'penjelasan' => 'Variabel itu seperti kotak berlabel untuk menyimpan data. Python punya beberapa tipe data: teks (str), bilangan bulat (int), bilangan desimal (float), dan benar/salah (bool). Tipe data ditentukan otomatis dari isinya.',
            'kode' => <<<'KODE'
            nama = "Budi"        # teks (str)
            umur = 13            # bilangan bulat (int)
            tinggi = 150.5       # bilangan desimal (float)
            suka_iot = True      # benar/salah (bool)

            print("Nama:", nama)
            print("Umur:", umur)
            print("Tinggi:", tinggi, "cm")
            print("Suka IoT:", suka_iot)
            print("Tipe data umur:", type(umur))
            KODE,
        ],
        12 => [
            'judul' => 'Logika: Percabangan If-Else',
            'video' => '',
            'langkah' => ['Pasang tombol dan LED di CrowPi.', 'Buat file baru, simpan sebagai ifelse.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu tekan dan lepas tombolnya.'],
            'hasil_emoji' => '🔀',
            'hasil_teks' => 'Layar menulis "Tombol ditekan" atau "Tombol dilepas", dan LED mengikuti.',
            'penjelasan' => 'If-else membuat program memilih jalan. Jika syarat benar, program menjalankan blok if. Jika tidak, program menjalankan blok else. Di sini syaratnya adalah keadaan tombol.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            TOMBOL = 22  # sesuaikan dengan pin tombol
            LED = 17     # sesuaikan dengan pin LED
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(TOMBOL, GPIO.IN, pull_up_down=GPIO.PUD_UP)
            GPIO.setup(LED, GPIO.OUT)

            while True:
                if GPIO.input(TOMBOL) == GPIO.LOW:
                    print("Tombol ditekan")
                    GPIO.output(LED, GPIO.HIGH)
                else:
                    print("Tombol dilepas")
                    GPIO.output(LED, GPIO.LOW)
                time.sleep(0.3)
            KODE,
        ],
        13 => [
            'judul' => 'Logika: Perulangan LED',
            'video' => '',
            'langkah' => ['Pastikan LED terpasang di CrowPi.', 'Buat file baru, simpan sebagai perulangan.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run dan hitung berapa kali LED berkedip.'],
            'hasil_emoji' => '🔁',
            'hasil_teks' => 'LED berkedip tepat 5 kali, lalu program berhenti.',
            'penjelasan' => 'Perulangan for menjalankan blok kode berkali-kali tanpa harus menulis ulang. range(5) artinya mengulang 5 kali. Berbeda dengan while True yang berulang tanpa henti.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            LED = 17  # sesuaikan dengan pin LED
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(LED, GPIO.OUT)

            for i in range(5):
                print("Kedipan ke-", i + 1)
                GPIO.output(LED, GPIO.HIGH)
                time.sleep(0.5)
                GPIO.output(LED, GPIO.LOW)
                time.sleep(0.5)

            GPIO.cleanup()
            KODE,
        ],
        14 => [
            'judul' => 'Logika: Fungsi di Python',
            'video' => '',
            'langkah' => ['Pastikan LED terpasang di CrowPi.', 'Buat file baru, simpan sebagai fungsi.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu ubah angka di kedip(3) dan kedip(6).'],
            'hasil_emoji' => '🧠',
            'hasil_teks' => 'LED berkedip 3 kali, jeda sebentar, lalu berkedip 6 kali.',
            'penjelasan' => 'Fungsi adalah kumpulan perintah yang diberi nama. Kita cukup menulisnya sekali, lalu memanggilnya berkali-kali. Angka di dalam kurung (parameter) mengatur berapa kali LED berkedip.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            LED = 17  # sesuaikan dengan pin LED
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(LED, GPIO.OUT)

            def kedip(jumlah):
                for i in range(jumlah):
                    GPIO.output(LED, GPIO.HIGH)
                    time.sleep(0.3)
                    GPIO.output(LED, GPIO.LOW)
                    time.sleep(0.3)

            kedip(3)
            time.sleep(1)
            kedip(6)
            GPIO.cleanup()
            KODE,
        ],
        15 => [
            'judul' => 'Logika: Sensor dan Output',
            'video' => '',
            'langkah' => ['Pasang sensor suhu dan buzzer di CrowPi.', 'Buat file baru, simpan sebagai sensor_output.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu hangatkan sensor dengan tanganmu.'],
            'hasil_emoji' => '⚙️',
            'hasil_teks' => 'Buzzer berbunyi saat suhu melebihi 30°C.',
            'penjelasan' => 'Alat IoT bekerja dengan alur: baca sensor, ambil keputusan, lalu hidupkan output. Di sini program membaca suhu, membandingkannya dengan batas 30°C, dan membunyikan buzzer jika lebih panas.',
            'kode' => <<<'KODE'
            import time
            import board
            import adafruit_dht
            import RPi.GPIO as GPIO

            BUZZER = 18  # sesuaikan dengan pin buzzer
            BATAS = 30   # batas suhu (derajat Celsius)
            sensor = adafruit_dht.DHT11(board.D4)  # sesuaikan pin DHT11
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(BUZZER, GPIO.OUT)

            while True:
                try:
                    suhu = sensor.temperature
                    print("Suhu:", suhu)
                    GPIO.output(BUZZER, suhu > BATAS)
                except RuntimeError:
                    pass
                time.sleep(2)
            KODE,
        ],
        16 => [
            'judul' => 'Mini Project: Membuat Alarm Sederhana',
            'video' => '',
            'langkah' => ['Siapkan buzzer dan tombol di CrowPi.', 'Buat file baru, simpan sebagai alarm.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, tekan tombol untuk menyalakan alarm, tekan lagi untuk mematikannya.'],
            'hasil_emoji' => '🚨',
            'hasil_teks' => 'Buzzer berbunyi putus-putus saat alarm aktif.',
            'penjelasan' => 'Tombol bertugas sebagai saklar alarm. Variabel aktif menyimpan status alarm (menyala atau mati). Setiap tombol ditekan, statusnya dibalik. Saat aktif, buzzer dibunyikan putus-putus.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            TOMBOL = 22  # sesuaikan dengan pin tombol
            BUZZER = 18  # sesuaikan dengan pin buzzer
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(TOMBOL, GPIO.IN, pull_up_down=GPIO.PUD_UP)
            GPIO.setup(BUZZER, GPIO.OUT)

            aktif = False
            while True:
                if GPIO.input(TOMBOL) == GPIO.LOW:
                    aktif = not aktif
                    time.sleep(0.4)  # jeda agar tidak terbaca dua kali
                if aktif:
                    GPIO.output(BUZZER, GPIO.HIGH)
                    time.sleep(0.2)
                    GPIO.output(BUZZER, GPIO.LOW)
                    time.sleep(0.2)
                else:
                    GPIO.output(BUZZER, GPIO.LOW)
                time.sleep(0.05)
            KODE,
        ],
        17 => [
            'judul' => 'Mini Project: Lampu Lalu Lintas Sederhana',
            'video' => '',
            'langkah' => ['Siapkan 3 LED: merah, kuning, dan hijau.', 'Buat file baru, simpan sebagai lalulintas.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run dan amati urutan lampunya.'],
            'hasil_emoji' => '🚦',
            'hasil_teks' => 'Lampu berganti: merah 3 detik, hijau 3 detik, kuning 1 detik, berulang.',
            'penjelasan' => 'Lampu lalu lintas bekerja dengan urutan tetap. Setiap tahap menyalakan satu LED dan mematikan yang lain, lalu menunggu beberapa detik. Urutan ini diulang terus dengan while True.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time

            MERAH, KUNING, HIJAU = 17, 27, 22  # sesuaikan dengan pin LED
            GPIO.setmode(GPIO.BCM)
            for p in (MERAH, KUNING, HIJAU):
                GPIO.setup(p, GPIO.OUT)

            def nyala(merah, kuning, hijau, detik):
                GPIO.output(MERAH, merah)
                GPIO.output(KUNING, kuning)
                GPIO.output(HIJAU, hijau)
                time.sleep(detik)

            while True:
                nyala(1, 0, 0, 3)  # merah
                nyala(0, 0, 1, 3)  # hijau
                nyala(0, 1, 0, 1)  # kuning
            KODE,
        ],
        18 => [
            'judul' => 'Mini Project: Termometer Digital Sederhana',
            'video' => '',
            'langkah' => ['Pastikan sensor suhu dan layar LCD terpasang.', 'Buat file baru, simpan sebagai termometer.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, suhu akan tampil di layar LCD.'],
            'hasil_emoji' => '🌡️',
            'hasil_teks' => 'LCD menampilkan suhu dan kelembapan yang diperbarui tiap 2 detik.',
            'penjelasan' => 'Proyek ini menggabungkan input dan output. Sensor DHT11 membaca suhu, lalu hasilnya ditulis ke LCD. Layar dibersihkan setiap kali data diperbarui supaya tulisan lama tidak menumpuk.',
            'kode' => <<<'KODE'
            import time
            import board
            import adafruit_dht
            from RPLCD.i2c import CharLCD

            sensor = adafruit_dht.DHT11(board.D4)  # sesuaikan pin DHT11
            lcd = CharLCD('PCF8574', 0x21)         # sesuaikan alamat LCD

            while True:
                try:
                    lcd.clear()
                    lcd.write_string("Suhu: " + str(sensor.temperature) + " C")
                    lcd.cursor_pos = (1, 0)
                    lcd.write_string("Lembap: " + str(sensor.humidity) + " %")
                except RuntimeError:
                    pass
                time.sleep(2)
            KODE,
        ],
        19 => [
            'judul' => 'Mini Project: Penghitung Tombol Sederhana',
            'video' => '',
            'langkah' => ['Pastikan tombol dan layar LCD terpasang.', 'Buat file baru, simpan sebagai penghitung.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu tekan tombol berkali-kali dan lihat angkanya.'],
            'hasil_emoji' => '🔢',
            'hasil_teks' => 'Angka di LCD bertambah 1 setiap tombol ditekan.',
            'penjelasan' => 'Variabel jumlah menyimpan banyaknya tekanan. Setiap tombol ditekan, nilainya ditambah 1 lalu ditampilkan di LCD. Jeda singkat dipakai agar satu tekanan tidak terhitung berkali-kali.',
            'kode' => <<<'KODE'
            import RPi.GPIO as GPIO
            import time
            from RPLCD.i2c import CharLCD

            TOMBOL = 22  # sesuaikan dengan pin tombol
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(TOMBOL, GPIO.IN, pull_up_down=GPIO.PUD_UP)
            lcd = CharLCD('PCF8574', 0x21)  # sesuaikan alamat LCD

            jumlah = 0
            lcd.write_string("Jumlah: 0")

            while True:
                if GPIO.input(TOMBOL) == GPIO.LOW:
                    jumlah += 1
                    lcd.clear()
                    lcd.write_string("Jumlah: " + str(jumlah))
                    time.sleep(0.3)  # cegah terhitung ganda
                time.sleep(0.05)
            KODE,
        ],
        20 => [
            'judul' => 'Mini Project: Pengingat Suhu Sederhana',
            'video' => '',
            'langkah' => ['Pasang sensor suhu, LED, dan buzzer di CrowPi.', 'Buat file baru, simpan sebagai pengingat_suhu.py.', 'Ketik atau salin kode program di bawah.', 'Tekan Run, lalu hangatkan sensor sampai melewati batas.'],
            'hasil_emoji' => '🔥',
            'hasil_teks' => 'LED menyala dan buzzer berbunyi saat suhu lebih dari 30°C.',
            'penjelasan' => 'Alat ini memberi peringatan saat ruangan terlalu panas. Program membaca suhu, lalu memakai if-else: jika suhu melewati batas, LED dan buzzer aktif. Jika tidak, keduanya mati.',
            'kode' => <<<'KODE'
            import time
            import board
            import adafruit_dht
            import RPi.GPIO as GPIO

            LED = 17     # sesuaikan dengan pin LED
            BUZZER = 18  # sesuaikan dengan pin buzzer
            BATAS = 30   # batas suhu (derajat Celsius)
            sensor = adafruit_dht.DHT11(board.D4)  # sesuaikan pin DHT11
            GPIO.setmode(GPIO.BCM)
            GPIO.setup(LED, GPIO.OUT)
            GPIO.setup(BUZZER, GPIO.OUT)

            while True:
                try:
                    suhu = sensor.temperature
                    print("Suhu:", suhu)
                    if suhu > BATAS:
                        GPIO.output(LED, GPIO.HIGH)
                        GPIO.output(BUZZER, GPIO.HIGH)
                    else:
                        GPIO.output(LED, GPIO.LOW)
                        GPIO.output(BUZZER, GPIO.LOW)
                except RuntimeError:
                    pass
                time.sleep(2)
            KODE,
        ],
    ];
    return $d[$id] ?? null;
}
