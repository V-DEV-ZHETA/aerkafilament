<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $anggota->nama }} - ANIME RIDING KALIMANTAN</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-green: #1a4d2e; /* Hijau hutan Kalimantan yang lebih dalam */
            --secondary-blue: #87ceeb; /* Biru langit yang lebih cerah */
            --accent-blue: #4682b4; /* Biru steel untuk aksen */
            --light-bg: #ffffff;
            --card-bg: #ffffff;
            --text-dark: #1f2937;
            --text-light: #6b7280;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        body {
            background-color: var(--light-bg);
            color: var(--text-dark);
        }

        .gradient-kalimantan {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--secondary-blue) 100%);
        }

        .card-bg {
            background-color: var(--card-bg);
            border: 1px solid rgba(26, 77, 46, 0.1);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .hover-glow:hover {
            box-shadow: 0 10px 15px rgba(26, 77, 46, 0.1);
        }

        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .profile-hero {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--accent-blue) 100%);
            min-height: 70vh;
            position: relative;
            overflow: hidden;
        }

        .profile-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1540206395-68808572332f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') center/cover;
            opacity: 0.2;
            z-index: 0;
        }

        .profile-avatar {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }

        .info-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(26, 77, 46, 0.1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-radius: 16px;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-card {
            background: linear-gradient(135deg, rgba(26, 77, 46, 0.1) 0%, rgba(135, 206, 235, 0.1) 100%);
            border: 1px solid rgba(26, 77, 46, 0.2);
            transition: all 0.3s ease;
            border-radius: 16px;
        }

        .stat-card:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, rgba(26, 77, 46, 0.15) 0%, rgba(135, 206, 235, 0.15) 100%);
        }

        .social-button {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 12px;
            overflow: hidden;
            position: relative;
        }

        .social-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
            z-index: 1;
        }

        .social-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .timeline-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 24px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 6px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background-color: var(--primary-green);
            z-index: 2;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: 6px;
            top: 20px;
            width: 2px;
            height: calc(100% + 10px);
            background-color: rgba(26, 77, 46, 0.3);
        }

        .timeline-item:last-child::after {
            display: none;
        }

        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 50;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(26, 77, 46, 0.2);
            transition: all 0.3s ease;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .info-item {
            background: linear-gradient(135deg, rgba(26, 77, 46, 0.05) 0%, rgba(135, 206, 235, 0.05) 100%);
            border-radius: 12px;
            padding: 16px;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary-green);
        }

        .info-item:hover {
            background: linear-gradient(135deg, rgba(26, 77, 46, 0.1) 0%, rgba(135, 206, 235, 0.1) 100%);
            transform: translateX(5px);
        }

        .vehicle-gallery img {
            transition: all 0.3s ease;
            border-radius: 12px;
        }

        .vehicle-gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            background-color: var(--secondary-blue);
            border-radius: 50%;
            top: -150px;
            right: -150px;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            background-color: var(--primary-green);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
        }

        .shape-3 {
            width: 150px;
            height: 150px;
            background-color: var(--secondary-blue);
            border-radius: 50%;
            top: 50%;
            left: 10%;
        }

        @media (max-width: 768px) {
            .profile-hero {
                min-height: 50vh;
            }

            .profile-avatar {
                width: 180px;
                height: 180px;
            }

            .back-button {
                top: 10px;
                left: 10px;
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body class="antialiased">
    <!-- Back Button -->
    <a href="{{ url('/') }}" class="back-button">
        <i class="fas fa-arrow-left text-xl" style="color: var(--primary-green)"></i>
    </a>

    <!-- Hero Section -->
    <section class="profile-hero relative">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>

        <div class="container mx-auto px-6 py-20 relative z-10">
            <div class="text-center">
                <div class="mb-8">
                    <img src="{{ asset('storage/' . $anggota->foto) }}" alt="{{ $anggota->nama }}" class="profile-avatar mx-auto mb-6">
                </div>

                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">{{ $anggota->nama }}</h1>
                <p class="text-xl md:text-2xl text-white/90 mb-2">{{ $anggota->posisi }}</p>
                <p class="text-lg text-white/80 flex items-center justify-center">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    {{ $anggota->region }}
                </p>
            </div>
        </div>
    </section>

    <!-- Profile Content -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Info -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- About Section -->
                    <div class="info-card p-8">
                        <h2 class="text-2xl font-bold mb-6 flex items-center" style="color: var(--primary-green)">
                            <i class="fas fa-user-circle mr-3" style="color: var(--accent-blue)"></i>
                            Tentang Saya
                        </h2>

                        <div class="space-y-4">
                            <div class="info-item">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4" style="background-color: var(--primary-green)">
                                        <i class="fas fa-id-card text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Nama Lengkap</p>
                                        <p class="text-lg font-bold">{{ $anggota->nama }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4" style="background-color: var(--accent-blue)">
                                        <i class="fas fa-briefcase text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Posisi</p>
                                        <p class="text-lg font-bold">{{ $anggota->posisi }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4" style="background-color: var(--secondary-blue)">
                                        <i class="fas fa-map-marked-alt text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Region</p>
                                        <p class="text-lg font-bold">{{ $anggota->region }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4" style="background-color: var(--primary-green)">
                                        <i class="fas fa-motorcycle text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Jenis Kendaraan</p>
                                        <p class="text-lg font-bold">{{ ucfirst($anggota->jeniskendaraan) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Section -->
                    <div class="info-card p-8">
                        <h2 class="text-2xl font-bold mb-6 flex items-center" style="color: var(--primary-green)">
                            <i class="fas fa-car mr-3" style="color: var(--accent-blue)"></i>
                            Kendaraan Itasha
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="info-item">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4" style="background-color: var(--primary-green)">
                                        <i class="fas fa-tag text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Merk Kendaraan</p>
                                        <p class="text-lg font-bold">{{ $anggota->merkkendaraan }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4" style="background-color: var(--accent-blue)">
                                        <i class="fas fa-palette text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">Tema Itasha</p>
                                        <p class="text-lg font-bold">{{ $anggota->itasha ?: 'Tidak ada tema spesifik' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Foto Kendaraan Gallery -->
                        @if($anggota->foto_kendaraan && count($anggota->foto_kendaraan) > 0)
                        <div>
                            <h3 class="text-lg font-semibold mb-4 flex items-center" style="color: var(--primary-green)">
                                <i class="fas fa-images mr-2" style="color: var(--accent-blue)"></i>
                                Galeri Foto Kendaraan
                            </h3>
                            <div class="vehicle-gallery grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach($anggota->foto_kendaraan as $foto)
                                <div class="overflow-hidden rounded-xl" style="border: 1px solid rgba(26, 77, 46, 0.2)">
                                    <img src="{{ asset('storage/' . $foto) }}" alt="Foto Kendaraan" class="w-full h-48 object-cover">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @else
                        <div class="text-center py-8 text-gray-500">
                            <i class="fas fa-camera text-4xl mb-4 text-gray-300"></i>
                            <p>Belum ada foto kendaraan yang diupload</p>
                        </div>
                        @endif
                    </div>

                    <!-- Social Media Section -->
                    @if($anggota->sosmed && count($anggota->sosmed) > 0)
                    <div class="info-card p-8">
                        <h2 class="text-2xl font-bold mb-6 flex items-center" style="color: var(--primary-green)">
                            <i class="fas fa-share-alt mr-3" style="color: var(--accent-blue)"></i>
                            Sosial Media
                        </h2>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach($anggota->sosmed as $platform => $url)
                                @if(strtolower($platform) === 'instagram')
                                    <a href="{{ $url }}" target="_blank" class="social-button flex flex-col items-center p-6 text-white" style="background: linear-gradient(135deg, #833ab4 0%, #fd1d1d 50%, #fcb045 100%)">
                                        <i class="fab fa-instagram text-3xl mb-3"></i>
                                        <span class="font-semibold">Instagram</span>
                                    </a>
                                @elseif(strtolower($platform) === 'whatsapp')
                                    <a href="{{ $url }}" target="_blank" class="social-button flex flex-col items-center p-6 text-white" style="background-color: #25D366">
                                        <i class="fab fa-whatsapp text-3xl mb-3"></i>
                                        <span class="font-semibold">WhatsApp</span>
                                    </a>
                                @elseif(strtolower($platform) === 'facebook')
                                    <a href="{{ $url }}" target="_blank" class="social-button flex flex-col items-center p-6 text-white" style="background-color: #1877F2">
                                        <i class="fab fa-facebook text-3xl mb-3"></i>
                                        <span class="font-semibold">Facebook</span>
                                    </a>
                                @elseif(strtolower($platform) === 'tiktok')
                                    <a href="{{ $url }}" target="_blank" class="social-button flex flex-col items-center p-6 text-white" style="background-color: #000000">
                                        <i class="fab fa-tiktok text-3xl mb-3"></i>
                                        <span class="font-semibold">TikTok</span>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Quick Stats -->
                    <div class="stat-card p-6 text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--accent-blue) 100%)">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2" style="color: var(--primary-green)">Member Aktif</h3>
                        <p class="text-gray-600">Sejak bergabung dengan komunitas</p>
                    </div>

                    <!-- Activity Timeline -->
                    <div class="info-card p-6">
                        <h3 class="text-xl font-bold mb-6 flex items-center" style="color: var(--primary-green)">
                            <i class="fas fa-history mr-3" style="color: var(--accent-blue)"></i>
                            Aktivitas
                        </h3>

                        <div>
                            <div class="timeline-item">
                                <div class="bg-white p-4 rounded-lg shadow-sm">
                                    <h4 class="font-semibold" style="color: var(--primary-green)">Bergabung Komunitas</h4>
                                    <p class="text-sm text-gray-600">Member aktif ARK Kalimantan</p>
                                    <span class="text-xs text-gray-500">{{ $anggota->created_at->format('d M Y') }}</span>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="bg-white p-4 rounded-lg shadow-sm">
                                    <h4 class="font-semibold" style="color: var(--primary-green)">Kendaraan Itasha</h4>
                                    <p class="text-sm text-gray-600">{{ $anggota->merkkendaraan }} - {{ $anggota->itasha ?: 'Tema custom' }}</p>
                                    <span class="text-xs text-gray-500">Aktif</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="info-card p-6">
                        <h3 class="text-xl font-bold mb-6 flex items-center" style="color: var(--primary-green)">
                            <i class="fas fa-envelope mr-3" style="color: var(--accent-blue)"></i>
                            Hubungi
                        </h3>

                        <div class="space-y-4">
                            <a href="mailto:contact@ark-kalimantan.com" class="flex items-center p-3 rounded-lg transition-colors" style="background-color: rgba(135, 206, 235, 0.1); border: 1px solid rgba(135, 206, 235, 0.3)">
                                <i class="fas fa-envelope mr-3" style="color: var(--accent-blue)"></i>
                                <span class="font-medium">Email Komunitas</span>
                            </a>

                            <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center p-3 rounded-lg transition-colors" style="background-color: rgba(26, 77, 46, 0.1); border: 1px solid rgba(26, 77, 46, 0.3)">
                                <i class="fab fa-whatsapp mr-3" style="color: var(--primary-green)"></i>
                                <span class="font-medium">WhatsApp Group</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8" style="background-color: var(--primary-green)">
        <div class="container mx-auto px-6 text-center">
            <p class="text-green-100 text-sm">&copy; 2024 ANIME RIDING KALIMANTAN. All rights reserved.</p>
            <p class="text-white text-xs mt-2">Ride with Style, Express with Passion 🏍️✨</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Smooth scroll for anchor links
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

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.info-card, .stat-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            observer.observe(card);
        });
    </script>
</body>
</html>