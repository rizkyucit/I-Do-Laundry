<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Do Laundry - Jasa Laundry Eco-Friendly & Terpercaya</title>
    <!-- Menghubungkan File CSS External -->
    <link rel="stylesheet" href="test.css">
    <!-- FontAwesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- HEADER / NAVIGATION BAR -->
    <header class="navbar">
        <div class="container nav-container">
            <!-- Logo -->
            <div class="logo">
                <div class="logo-icon"><i class="fa-solid fa-shirt"></i></div>
                <span class="logo-text">I Do <span>Laundry</span></span>
            </div>

            <!-- Menu Navigasi -->
            <nav class="nav-links">
                <a href="#home" class="active">Home</a>
                <a href="#services">Services</a>
                <a href="#pricing">Pricing</a>
                <a href="#blog">Blog</a>
                <a href="#faq">FAQ</a>
            </nav>

            <!-- Tombol Pesan -->
            <div class="nav-action">
                <a href="#pricing" class="btn btn-primary">BOOK NOW</a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION (HOME) -->
    <section id="home" class="hero">
        <div class="container grid-2">
            <div class="hero-text">
                <span class="badge">Eco-Friendly & Reliable</span>
                <h1>EXPERT LAUNDRY SERVICE FOR YOU!</h1>
                <p>Layanan cuci pakaian profesional yang bersih, harum, ramah lingkungan, dan bebas ribet dengan fitur antar-jemput langsung ke rumah Anda.</p>
                <div class="hero-buttons">
                    <a href="#pricing" class="btn btn-primary">Get Started</a>
                    <a href="#services" class="btn btn-outline">Our Services</a>
                </div>
            </div>
            <div class="hero-image">
                <i class="fa-solid fa-basket-shopping hero-icon"></i>
                <p>Pakaian Bersih, Rapi, & Wangi Setiap Hari</p>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>OUR SERVICES</h2>
                <p>Pilih berbagai jenis layanan perawatan pakaian sesuai dengan kebutuhan Anda.</p>
            </div>

            <div class="grid-3">
                <div class="card">
                    <div class="card-icon"><i class="fa-solid fa-jug-detergent"></i></div>
                    <h3>KILOAN</h3>
                    <p>Layanan cuci komplit (cuci, kering, setrika) harian per kilogram dengan hasil wangi tahan lama.</p>
                    <span class="price">Mulai Rp 7.000 / kg</span>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fa-solid fa-shirt"></i></div>
                    <h3>SATUAN</h3>
                    <p>Perawatan khusus dry cleaning untuk jas, gaun pesta, jaket kulit, dan pakaian formal lainnya.</p>
                    <span class="price">Mulai Rp 25.000 / pcs</span>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fa-solid fa-shoe-prints"></i></div>
                    <h3>SHOES & BAG</h3>
                    <p>Deep cleaning profesional untuk sepatu sneakers dan tas kesayangan agar kembali bersih bersinar.</p>
                    <span class="price">Mulai Rp 35.000 / psg</span>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING SECTION -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-title">
                <h2>TRANSPARENT PRICING</h2>
                <p>Daftar harga terjangkau dengan kualitas cucian terbaik.</p>
            </div>

            <!-- Fitur Simulasi Hitung Harga (Diolah oleh JS) -->
            <div class="pricing-calculator">
                <h3>Kalkulator Estimasi Harga</h3>
                <div class="calc-inputs">
                    <select id="service-select">
                        <option value="7000">Paket Reguler (Rp 7.000/kg)</option>
                        <option value="12000">Paket Express (Rp 12.000/kg)</option>
                        <option value="5000">Setrika Saja (Rp 5.000/kg)</option>
                    </select>
                    <input type="number" id="weight-input" min="1" value="1" placeholder="Berat (kg)">
                </div>
                <div class="calc-result">
                    <span>Total Estimasi: </span>
                    <strong id="total-price">Rp 7.000</strong>
                </div>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Jenis Paket</th>
                            <th>Estimasi Waktu</th>
                            <th>Fasilitas / Keterangan</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Paket Reguler</strong></td>
                            <td>2 - 3 Hari</td>
                            <td>Cuci bersih, setrika uap, parfum premium</td>
                            <td class="highlight-price">Rp 7.000 / kg</td>
                        </tr>
                        <tr>
                            <td><strong>Paket Express</strong></td>
                            <td>24 Jam</td>
                            <td>Prioritas pengerjaan kilat & bebas noda</td>
                            <td class="highlight-price">Rp 12.000 / kg</td>
                        </tr>
                        <tr>
                            <td><strong>Setrika Saja</strong></td>
                            <td>1 Hari</td>
                            <td>Hanya proses pelipatan & setrika rapi</td>
                            <td class="highlight-price">Rp 5.000 / kg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="faq">
        <div class="container container-sm">
            <div class="section-title">
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
                <p>Pertanyaan yang sering diajukan seputar layanan kami.</p>
            </div>

            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question">
                        Apakah pakaian saya dicampur dengan pakaian pelanggan lain?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Tidak sama sekali. Kami menerapkan standar operasional 1 mesin cuci untuk 1 pelanggan guna menjaga higienitas dan mencegah risiko pakaian tertukar.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Bagaimana cara kerja layanan antar-jemput gratis?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Kurir kami akan datang ke alamat Anda sesuai jadwal, mengambil pakaian kotor, lalu mengantarkannya kembali setelah selesai. Gratis biaya kirim untuk radius 5 km.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Metode pembayaran apa saja yang diterima?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Kami menerima pembayaran via Transfer Bank, QRIS, E-Wallet (GoPay, OVO, Dana), maupun Tunai (COD) saat pakaian diantar kembali.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container footer-content">
            <div>
                <h3>I Do Laundry</h3>
                <p>Solusi kebersihan pakaian profesional dengan konsep ramah lingkungan.</p>
            </div>
            <p>&copy; 2026 I Do Laundry. All rights reserved.</p>
        </div>
    </footer>

    <!-- Menghubungkan File JavaScript External -->
    <script src="test.js"></script>
</body>
</html>