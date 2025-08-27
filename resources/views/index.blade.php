<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabang Dinas Kehutanan Wilayah Sumenep</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/img/logo.png') }}" type="image/png">
    <style>
        :root {
            --primary-green: #2d5f3f;
            --light-green: #4a7c59;
            --accent-green: #6db89d;
            --light-bg: #f8fffe;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .fab {
                font-size: 1.5rem !important;
            }
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            padding-top: 80px; /* Add padding to prevent content hiding behind fixed navbar */
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-green), var(--light-green)) !important;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .logo {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        
        .hero-section {
            background: linear-gradient(rgba(45, 95, 63, 0.8), rgba(45, 95, 63, 0.8)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%234a7c59" width="1200" height="600"/><circle fill="%232d5f3f" opacity="0.3" cx="200" cy="150" r="80"/><circle fill="%236db89d" opacity="0.3" cx="800" cy="400" r="120"/><circle fill="%232d5f3f" opacity="0.2" cx="1000" cy="200" r="60"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero-subtitle {
            font-size: 1.4rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }
        
        .section-title {
            color: var(--primary-green);
            font-weight: 700;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--accent-green);
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            color: white;
            border: none;
            padding: 1.5rem;
            font-weight: 600;
        }
        
        .icon-box {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--accent-green), var(--light-green));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
        }
        
        .task-item {
            background: var(--light-bg);
            border-left: 4px solid var(--accent-green);
            padding: 1.5rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .task-item:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .task-number {
            background: var(--primary-green);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 1rem;
        }
        
        /* Gallery Styles */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }
        
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(45, 95, 63, 0.8), rgba(109, 184, 157, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-overlay i {
            color: white;
            font-size: 2rem;
        }
        
        .footer {
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            color: white;
            padding: 3rem 0 1rem;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-in-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .social-links a {
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-links a:hover {
            transform: translateY(-3px);
            opacity: 0.8;
        }
        
        .fab {
            font-size: 1.8rem !important;
        }
        
        /* Scroll offset adjustment */
        section {
            scroll-margin-top: 100px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/img/logo.png') }}" alt="Logo Kementerian Kehutanan" class="logo">
                Dishut Sumenep
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visi-misi">Visi & Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tugas">Tugas Utama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.index') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="hero-title fade-in">Cabang Dinas Kehutanan</h1>
                    <h2 class="hero-subtitle fade-in">Wilayah Sumenep</h2>
                    <p class="lead fade-in">Mengelola Sumber Daya Hutan Lestari untuk Kesejahteraan Masyarakat</p>
                    <a href="#profil" class="btn btn-light btn-lg mt-3 fade-in">
                        <i class="fas fa-leaf me-2"></i>Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Section -->
    <section id="profil" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Profil Instansi</h2>
            <div class="row">
                <div class="col-lg-6 fade-in">
                    <div class="icon-box">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4 class="text-center mb-4">Tentang Kami</h4>
                    <p class="text-justify">
                        Cabang Dinas Kehutanan Wilayah Sumenep merupakan unit pelaksana teknis di bawah naungan 
                        Dinas Kehutanan Provinsi Jawa Timur yang bertugas menyelenggarakan urusan pemerintahan 
                        bidang kehutanan di tingkat kabupaten, khususnya di wilayah Kabupaten Sumenep.
                    </p>
                    <p class="text-justify">
                        Instansi ini memiliki peran penting dalam mendukung pelestarian lingkungan, pengelolaan 
                        sumber daya hutan, serta pemberdayaan masyarakat sekitar hutan melalui berbagai program 
                        dan kebijakan yang sejalan dengan prinsip pembangunan berkelanjutan.
                    </p>
                </div>
                <div class="col-lg-6 fade-in">
                    <div class="icon-box">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h4 class="text-center mb-4">Wilayah Kerja</h4>
                    <p class="text-justify">
                        Wilayah kerja Cabang Dinas Kehutanan Wilayah Sumenep meliputi kawasan hutan yang tersebar 
                        di berbagai kecamatan di Kabupaten Sumenep, termasuk kawasan yang dikelola oleh Perhutani 
                        serta kawasan hutan rakyat.
                    </p>
                    <p class="text-justify">
                        Dalam pelaksanaannya, cabang dinas ini menjalin kerja sama dengan berbagai pihak, termasuk 
                        Kelompok Tani Hutan (KTH), lembaga swadaya masyarakat, dan pemerintah desa dalam mendukung 
                        pengelolaan hutan yang berorientasi pada kelestarian dan kesejahteraan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section id="visi-misi" class="py-5" style="background-color: var(--light-bg);">
        <div class="container">
            <h2 class="section-title fade-in">Visi & Misi</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 fade-in">
                        <div class="card-header text-center">
                            <i class="fas fa-eye fa-2x mb-3"></i>
                            <h4>VISI</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-center">
                                Mewujudkan pengelolaan sumber daya hutan yang lestari dan partisipatif demi 
                                meningkatkan kesejahteraan masyarakat serta kelestarian lingkungan hidup di 
                                wilayah Kabupaten Sumenep.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 fade-in">
                        <div class="card-header text-center">
                            <i class="fas fa-bullseye fa-2x mb-3"></i>
                            <h4>MISI</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Melaksanakan pengawasan dan perlindungan hutan secara menyeluruh
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Memberdayakan masyarakat sekitar hutan melalui pembinaan KTH
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Mengembangkan sistem informasi kehutanan yang akurat dan terintegrasi
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Mendorong kolaborasi lintas sektor dalam pengelolaan hutan
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Menjalankan program konservasi dan rehabilitasi hutan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tugas Utama Section -->
    <section id="tugas" class="py-5">
        <div class="container">
            <h2 class="section-title fade-in">Tugas Utama</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="task-item fade-in">
                        <span class="task-number">1</span>
                        <strong>Pengawasan Hutan:</strong> Melakukan pengawasan terhadap kegiatan pengelolaan hutan di wilayah Sumenep.
                    </div>
                    <div class="task-item fade-in">
                        <span class="task-number">2</span>
                        <strong>Pembinaan KTH:</strong> Memberikan pembinaan dan pendampingan teknis kepada Kelompok Tani Hutan (KTH).
                    </div>
                    <div class="task-item fade-in">
                        <span class="task-number">3</span>
                        <strong>Pengelolaan Data:</strong> Mengelola data dan informasi terkait potensi hasil hutan serta kegiatan rehabilitasi lahan.
                    </div>
                    <div class="task-item fade-in">
                        <span class="task-number">4</span>
                        <strong>Pemanfaatan Berkelanjutan:</strong> Mendorong pemanfaatan hutan yang legal, berkelanjutan, dan berwawasan lingkungan.
                    </div>
                    <div class="task-item fade-in">
                        <span class="task-number">5</span>
                        <strong>Pelaporan:</strong> Menyusun laporan evaluasi dan perkembangan kegiatan kehutanan tingkat kabupaten.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="galeri" class="py-5" style="background-color: var(--light-bg);">
        <div class="container">
            <h2 class="section-title fade-in">Galeri</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item fade-in">
                        <img src="{{ asset('assets/images/img/logo.png') }}" alt="Logo Dinas Kehutanan">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <h6 class="text-center mt-3">Logo Dinas Kehutanan</h6>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item fade-in">
                        <img src="{{ asset('assets/images/img/image1.jpg') }}" alt="Rehabilitasi Hutan">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <h6 class="text-center mt-3">Rehabilitasi Hutan</h6>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item fade-in">
                        <img src="{{ asset('assets/images/img/image2.jpg') }}" alt="Pembinaan KTH Dengan BEKA">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <h6 class="text-center mt-3">Pembinaan KTH Dengan BEKA</h6>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item fade-in">
                        <img src="{{ asset('assets/images/img/image3.jpg') }}" alt="Pembinaan Perhutani dan CDK Sumenep">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <h6 class="text-center mt-3">Pembinaan Perhutani dan CDK Sumenep</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Transformasi Digital Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 fade-in">
                    <h3 class="mb-4" style="color: var(--primary-green);">
                        <i class="fas fa-digital-tachograph me-2"></i>
                        Transformasi Digital
                    </h3>
                    <p class="text-justify">
                        Seiring meningkatnya kompleksitas dalam pengelolaan data dan kebutuhan informasi yang cepat, 
                        akurat, dan terintegrasi, Cabang Dinas Kehutanan Wilayah Sumenep mulai melakukan transformasi 
                        digital dalam sistem pelaporan dan pemantauan kegiatan kehutanan.
                    </p>
                    <p class="text-justify">
                        Salah satu langkah strategis tersebut adalah membangun sistem informasi berbasis web untuk 
                        mendukung proses pelaporan perkembangan KTH. Sistem ini tidak hanya meningkatkan efisiensi 
                        internal instansi, tetapi juga menjadi sarana pemberdayaan masyarakat.
                    </p>
                </div>
                <div class="col-lg-6 fade-in">
                    <div class="icon-box" style="width: 150px; height: 150px; font-size: 4rem;">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h5>
                        <img src="{{ asset('assets/images/img/logo.png') }}" alt="" class="logo" style="width: 40px; height: 40px; vertical-align: middle;">
                        Cabang Dinas Kehutanan Wilayah Sumenep
                    </h5>
                    <p class="mb-3">Unit Pelaksana Teknis Dinas Kehutanan Provinsi Jawa Timur</p>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Kabupaten Sumenep, Jawa Timur
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-envelope me-2"></i>
                        dishut.sumenep@jatimprov.go.id
                    </p>
                </div>
                <div class="col-lg-4">
                    <h6>Ikuti Kami</h6>
                    <div class="social-links">
                        <a href="#" class="text-white me-3 fs-4"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="text-white me-3 fs-4"><i class="fab fa-instagram-square"></i></a>
                        <a href="#" class="text-white me-3 fs-4"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" class="text-white me-3 fs-4"><i class="fab fa-youtube-square"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; 2025 Cabang Dinas Kehutanan Wilayah Sumenep. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Active navigation highlighting
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section[id]');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Initialize animations on page load
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.querySelectorAll('.hero-section .fade-in').forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('visible');
                    }, index * 200);
                });
            }, 500);
        });

        // Gallery click functionality
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                const img = this.querySelector('img');
                const imgSrc = img.src;
                const imgAlt = img.alt;
                
                // Create modal for full-size image display
                const modal = document.createElement('div');
                modal.innerHTML = `
                    <div class="modal fade" id="imageModal" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">${imgAlt}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="${imgSrc}" alt="${imgAlt}" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(modal);
                const modalInstance = new bootstrap.Modal(document.getElementById('imageModal'));
                modalInstance.show();
                
                // Remove modal from DOM after hiding
                document.getElementById('imageModal').addEventListener('hidden.bs.modal', function() {
                    modal.remove();
                });
            });
        });
    </script>
</body>
</html>