<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fresh Laundry - Layanan Laundry Terpercaya</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Instrument Sans', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
        
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 600;
            color: #667eea;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: #667eea;
        }
        
        /* Hero Section */
        .hero {
            padding: 120px 0 80px;
            text-align: center;
            color: white;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .cta-button {
            display: inline-block;
            background: #fff;
            color: #667eea;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
        
        /* Services Section */
        .services {
            background: white;
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 3rem;
            color: #333;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .service-card {
            background: #f8f9ff;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e9ecef;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
        }
        
        .service-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 1rem;
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .service-card p {
            color: #666;
            line-height: 1.6;
        }
        
        /* Pricing Section */
        .pricing {
            background: #f8f9ff;
            padding: 80px 0;
        }
        
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .price-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .price-card:hover {
            transform: translateY(-5px);
        }
        
        .price-card.featured {
            border: 2px solid #667eea;
            transform: scale(1.05);
        }
        
        .price-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 1rem;
        }
        
        .price-features {
            list-style: none;
            margin-bottom: 2rem;
        }
        
        .price-features li {
            padding: 0.5rem 0;
            color: #666;
        }
        
        .price-features li:before {
            content: "✓";
            color: #667eea;
            font-weight: bold;
            margin-right: 0.5rem;
        }
        
        .order-btn {
            background: #667eea;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .order-btn:hover {
            background: #5a6fd8;
        }
        
        /* Contact Section */
        .contact {
            background: white;
            padding: 80px 0;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }
        
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: #667eea;
            width: 40px;
        }
        
        .contact-form {
            background: #f8f9ff;
            padding: 2rem;
            border-radius: 15px;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #333;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
        }
        
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            background: #667eea;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .submit-btn:hover {
            background: #5a6fd8;
        }
        
        /* Footer */
        .footer {
            background: #333;
            color: white;
            padding: 40px 0 20px;
            text-align: center;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            margin-bottom: 1rem;
            color: #667eea;
        }
        
        .footer-section p,
        .footer-section a {
            color: #ccc;
            text-decoration: none;
            line-height: 1.6;
        }
        
        .footer-section a:hover {
            color: #667eea;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: #667eea;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
        }
        
        .social-links a:hover {
            background: #5a6fd8;
        }
        
        .footer-bottom {
            border-top: 1px solid #555;
            padding-top: 20px;
            color: #ccc;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .services-grid,
            .pricing-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<header class="header">
    <nav class="nav">
        <div class="logo">
            <i class="fas fa-tshirt"></i>
            Fresh Laundry
        </div>
        <ul class="nav-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#pricing">Harga</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li>
                <a href="{{ route('filament.admin.auth.login') }}"
                   class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                    Login
                </a>
            </li>
            @if (Route::has('filament.auth.register'))
                <li>
                    <a href="{{ route('filament.auth.register') }}"
                       class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Register
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Fresh Laundry</h1>
            <p>Layanan laundry berkualitas tinggi dengan hasil yang bersih, wangi, dan rapi</p>
            <a href="#contact" class="cta-button">Pesan Sekarang</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Layanan Kami</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Laundry Reguler</h3>
                    <p>Layanan cuci reguler dengan waktu pengerjaan 2-3 hari. Cocok untuk pakaian sehari-hari.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Laundry Express</h3>
                    <p>Layanan cuci cepat dengan waktu pengerjaan 24 jam. Untuk kebutuhan mendesak.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Laundry Premium</h3>
                    <p>Layanan cuci premium dengan perawatan khusus untuk pakaian mahal dan sensitif.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Pickup & Delivery</h3>
                    <p>Layanan antar jemput gratis untuk area tertentu. Praktis dan menghemat waktu.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-iron"></i>
                    </div>
                    <h3>Setrika Premium</h3>
                    <p>Layanan setrika dengan hasil yang rapi dan tidak kusut. Cocok untuk pakaian formal.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Garansi Kualitas</h3>
                    <p>Garansi 100% untuk hasil cucian yang tidak memuaskan. Kami siap mengganti rugi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing">
        <div class="container">
            <h2 class="section-title">Paket Harga</h2>
            <div class="pricing-grid">
                <div class="price-card">
                    <h3 class="price-title">Paket Reguler</h3>
                    <div class="price">Rp 8.000</div>
                    <ul class="price-features">
                        <li>Cuci + Setrika</li>
                        <li>Waktu 2-3 hari</li>
                        <li>Detergen berkualitas</li>
                        <li>Pewangi pilihan</li>
                        <li>Packaging rapi</li>
                    </ul>
                    <button class="order-btn">Pesan Sekarang</button>
                </div>
                <div class="price-card featured">
                    <h3 class="price-title">Paket Express</h3>
                    <div class="price">Rp 12.000</div>
                    <ul class="price-features">
                        <li>Cuci + Setrika</li>
                        <li>Waktu 24 jam</li>
                        <li>Detergen premium</li>
                        <li>Pewangi premium</li>
                        <li>Packaging eksklusif</li>
                        <li>Prioritas pengerjaan</li>
                    </ul>
                    <button class="order-btn">Pesan Sekarang</button>
                </div>
                <div class="price-card">
                    <h3 class="price-title">Paket Premium</h3>
                    <div class="price">Rp 15.000</div>
                    <ul class="price-features">
                        <li>Cuci + Setrika</li>
                        <li>Waktu 1-2 hari</li>
                        <li>Detergen hypoallergenic</li>
                        <li>Pewangi natural</li>
                        <li>Packaging premium</li>
                        <li>Perawatan khusus</li>
                        <li>Garansi kualitas</li>
                    </ul>
                    <button class="order-btn">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jl. Sudirman No. 123, Jakarta Pusat<br>DKI Jakarta 10110</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4>Telepon</h4>
                            <p>+62 21 1234 5678<br>+62 812 3456 7890</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p>info@freshlaundry.com<br>order@freshlaundry.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4>Jam Operasional</h4>
                            <p>Senin - Sabtu: 07:00 - 21:00<br>Minggu: 08:00 - 18:00</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Kirim Pesan</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telepon</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Fresh Laundry</h3>
                    <p>Layanan laundry berkualitas tinggi dengan hasil yang bersih, wangi, dan rapi. Kami berkomitmen memberikan pelayanan terbaik untuk kepuasan pelanggan.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Layanan</h3>
                    <p><a href="#">Laundry Reguler</a></p>
                    <p><a href="#">Laundry Express</a></p>
                    <p><a href="#">Laundry Premium</a></p>
                    <p><a href="#">Pickup & Delivery</a></p>
                    <p><a href="#">Setrika Premium</a></p>
                </div>
                <div class="footer-section">
                    <h3>Informasi</h3>
                    <p><a href="#">Tentang Kami</a></p>
                    <p><a href="#">Cara Order</a></p>
                    <p><a href="#">Syarat & Ketentuan</a></p>
                    <p><a href="#">Kebijakan Privasi</a></p>
                    <p><a href="#">FAQ</a></p>
                </div>
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <p>Jl. Sudirman No. 123<br>Jakarta Pusat 10110</p>
                    <p>+62 21 1234 5678</p>
                    <p>info@freshlaundry.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Fresh Laundry. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission handling
        document.querySelector('.contact-form form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.');
            this.reset();
        });

        // Order button handling
        document.querySelectorAll('.order-btn').forEach(button => {
            button.addEventListener('click', function() {
                alert('Terima kasih! Pesanan Anda telah diterima. Kami akan segera memproses pesanan Anda.');
            });
        });

        // Login function
        function showLogin() {
            alert('Silakan login untuk mengakses dashboard admin.');
            // Di sini bisa ditambahkan modal login atau redirect ke halaman login
        }
    </script>
</body>
</html>