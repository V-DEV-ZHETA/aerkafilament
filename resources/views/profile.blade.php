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
            --primary-green: #2d5a27;
            --secondary-blue: #3b82f6;
            --accent-blue: #3b82f6;
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
            background-color: var(--primary-green);
        }

        .card-bg {
            background-color: var(--card-bg);
            border: 1px solid rgba(45, 90, 39, 0.1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .hover-glow:hover {
            box-shadow: 0 2px 4px rgba(45, 90, 39, 0.1);
        }

        .social-icon {
            transition: opacity 0.3s ease;
        }

        .social-icon:hover {
            opacity: 0.8;
        }

        .profile-hero {
            background: linear-gradient(135deg, #2d5a27 0%, #3b82f6 100%);
            min-height: 60vh;
        }

        .profile-avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 8px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }

        .info-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(45, 90, 39, 0.1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-card {
            background: linear-gradient(135deg, rgba(45, 90, 39, 0.1) 0%, rgba(59, 130, 246, 0.1) 100%);
            border: 1px solid rgba(45, 90, 39, 0.2);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, rgba(45, 90, 39, 0.15) 0%, rgba(59, 130, 246, 0.15) 100%);
        }

        .social-button {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .social-button:hover {
            transform: translateY(-3px) scale(1.1);
        }

        .timeline-item {
            position: relative;
            padding-left: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: var(--primary-green);
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 12px;
            width: 2px;
            height: calc(100% + 10px);
            background-color: rgba(45, 90, 39, 0.3);
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
            border: 1px solid rgba(45, 90, 39, 0.2);
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .profile-hero {
                min-height: 50vh;
            }

            .profile-avatar {
                width: 150px;
                height: 150px;
            }

            .back-button {
                top: 10px;
                left: 10px;
            }
        }
    </style>
</head>
<body class="antialiased">
    <!-- Back Button -->
    <a href="{{ url('/') }}" class="back-button w-12 h-12 rounded-full flex items-center justify-center text-primary-green hover:text-secondary-blue shadow-lg">
        <i class="fas fa-arrow-left text-xl"></i>
    </a>

    <!-- Hero Section -->
    <section class="profile-hero relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-primary-green/30 to-secondary-blue/30"></div>

        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 right-10 w-64 h-64 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-48 h-48 bg-white rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 py-20 relative z-10">
            <div class="text-center">
                <div class="mb-8">
                    <img src="{{ asset('storage/' . $anggota->foto) }}" alt="{{ $anggota->nama }}" class="profile-avatar mx-auto mb-6">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full text-white font-medium mb-4 border border-white/30">
                        <i class="fas fa-crown mr-2 text-yellow-300"></i>
                        Member Aktif
                    </div>
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
                    <div class="info-card rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-primary-green mb-6 flex items-center">
                            <i class="fas fa-user-circle mr-3 text-secondary-blue"></i>
                            Tentang Saya
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-blue-50 rounded-xl border border-green-100">
                                    <div class="w-12 h-12 bg-gradient-to-r from-primary-green to-green-600 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-id-card text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-primary-green uppercase tracking-wide font-semibold">Nama Lengkap</p>
                                        <p class="text-lg font-bold text-gray-800">{{ $anggota->nama }}</p>
                                    </div>
                                </div>

                                <div class="flex items-center p-4 bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl border border-blue-100">
                                    <div class="w-12 h-12 bg-gradient-to-r from-secondary-blue to-blue-600 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-briefcase text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-secondary-blue uppercase tracking-wide font-semibold">Posisi</p>
                                        <p class="text-lg font-bold text-gray-800">{{ $anggota->posisi }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-100">
                                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-map-marked-alt text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-purple-600 uppercase tracking-wide font-semibold">Region</p>
                                        <p class="text-lg font-bold text-gray-800">{{ $anggota->region }}</p>
                                    </div>
                                </div>

                                <div class="flex items-center p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-xl border border-orange-100">
                                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-motorcycle text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-orange-600 uppercase tracking-wide font-semibold">Jenis Kendaraan</p>
                                        <p class="text-lg font-bold text-gray-800">{{ ucfirst($anggota->jeniskendaraan) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Section -->
                    <div class="info-card rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-primary-green mb-6 flex items-center">
                            <i class="fas fa-car mr-3 text-secondary-blue"></i>
                            Kendaraan Itasha
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="flex items-center p-6 bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl border border-gray-200">
                                <div class="w-16 h-16 bg-gradient-to-r from-gray-600 to-gray-800 rounded-full flex items-center justify-center mr-6">
                                    <i class="fas fa-tag text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600 uppercase tracking-wide font-semibold">Merk Kendaraan</p>
                                    <p class="text-xl font-bold text-gray-800">{{ $anggota->merkkendaraan }}</p>
                                </div>
                            </div>

                            <div class="flex items-center p-6 bg-gradient-to-r from-pink-50 to-purple-50 rounded-xl border border-pink-200">
                                <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-purple-600 rounded-full flex items-center justify-center mr-6">
                                    <i class="fas fa-palette text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-pink-600 uppercase tracking-wide font-semibold">Tema Itasha</p>
                                    <p class="text-xl font-bold text-gray-800">{{ $anggota->itasha ?: 'Tidak ada tema spesifik' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Foto Kendaraan Gallery -->
                        @if($anggota->foto_kendaraan && count($anggota->foto_kendaraan) > 0)
                        <div>
                            <h3 class="text-lg font-semibold text-primary-green mb-4 flex items-center">
                                <i class="fas fa-images mr-2 text-secondary-blue"></i>
                                Galeri Foto Kendaraan
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach($anggota->foto_kendaraan as $foto)
                                <div class="group relative overflow-hidden rounded-xl bg-gradient-to-br from-gray-100 to-gray-200 border border-gray-300 hover:border-primary-green transition-all duration-300">
                                    <div class="aspect-video overflow-hidden">
                                        <img src="{{ asset('storage/' . $foto) }}" alt="Foto Kendaraan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                    </div>
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
                    <div class="info-card rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-primary-green mb-6 flex items-center">
                            <i class="fas fa-share-alt mr-3 text-secondary-blue"></i>
                            Sosial Media
                        </h2>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach($anggota->sosmed as $platform => $url)
                                @if(strtolower($platform) === 'instagram')
                                    <a href="{{ $url }}" target="_blank" class="social-button group flex flex-col items-center p-6 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl text-white hover:shadow-xl">
                                        <i class="fab fa-instagram text-3xl mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                                        <span class="font-semibold">Instagram</span>
                                        <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-pink-400 opacity-0 group-hover:opacity-20 transition-opacity duration-300 rounded-xl"></div>
                                    </a>
                                @elseif(strtolower($platform) === 'whatsapp')
                                    <a href="{{ $url }}" target="_blank" class="social-button group flex flex-col items-center p-6 bg-gradient-to-br from-green-500 to-green-600 rounded-xl text-white hover:shadow-xl">
                                        <i class="fab fa-whatsapp text-3xl mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                                        <span class="font-semibold">WhatsApp</span>
                                        <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 opacity-0 group-hover:opacity-20 transition-opacity duration-300 rounded-xl"></div>
                                    </a>
                                @elseif(strtolower($platform) === 'facebook')
                                    <a href="{{ $url }}" target="_blank" class="social-button group flex flex-col items-center p-6 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl text-white hover:shadow-xl">
                                        <i class="fab fa-facebook text-3xl mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                                        <span class="font-semibold">Facebook</span>
                                        <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover:opacity-20 transition-opacity duration-300 rounded-xl"></div>
                                    </a>
                                @elseif(strtolower($platform) === 'tiktok')
                                    <a href="{{ $url }}" target="_blank" class="social-button group flex flex-col items-center p-6 bg-gradient-to-br from-gray-700 to-gray-800 rounded-xl text-white hover:shadow-xl">
                                        <i class="fab fa-tiktok text-3xl mb-3 group-hover:scale-110 transition-transform duration-300"></i>
                                        <span class="font-semibold">TikTok</span>
                                        <div class="absolute inset-0 bg-gradient-to-br from-gray-600 to-gray-700 opacity-0 group-hover:opacity-20 transition-opacity duration-300 rounded-xl"></div>
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
                    <div class="stat-card rounded-2xl p-6 text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-primary-green to-secondary-blue rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-primary-green mb-2">Member Aktif</h3>
                        <p class="text-gray-600">Sejak bergabung dengan komunitas</p>
                    </div>

                    <!-- Activity Timeline -->
                    <div class="info-card rounded-2xl p-6">
                        <h3 class="text-xl font-bold text-primary-green mb-6 flex items-center">
                            <i class="fas fa-history mr-3 text-secondary-blue"></i>
                            Aktivitas
                        </h3>

                        <div class="space-y-4">
                            <div class="timeline-item">
                                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                                    <h4 class="font-semibold text-primary-green">Bergabung Komunitas</h4>
                                    <p class="text-sm text-gray-600">Member aktif ARK Kalimantan</p>
                                    <span class="text-xs text-gray-500">{{ $anggota->created_at->format('d M Y') }}</span>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                                    <h4 class="font-semibold text-primary-green">Kendaraan Itasha</h4>
                                    <p class="text-sm text-gray-600">{{ $anggota->merkkendaraan }} - {{ $anggota->itasha ?: 'Tema custom' }}</p>
                                    <span class="text-xs text-gray-500">Aktif</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="info-card rounded-2xl p-6">
                        <h3 class="text-xl font-bold text-primary-green mb-6 flex items-center">
                            <i class="fas fa-envelope mr-3 text-secondary-blue"></i>
                            Hubungi
                        </h3>

                        <div class="space-y-4">
                            <a href="mailto:contact@ark-kalimantan.com" class="flex items-center p-3 bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:border-blue-300 transition-colors">
                                <i class="fas fa-envelope text-blue-600 mr-3"></i>
                                <span class="text-blue-800 font-medium">Email Komunitas</span>
                            </a>

                            <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center p-3 bg-gradient-to-r from-green-50 to-green-100 rounded-lg border border-green-200 hover:border-green-300 transition-colors">
                                <i class="fab fa-whatsapp text-green-600 mr-3"></i>
                                <span class="text-green-800 font-medium">WhatsApp Group</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary-green py-8">
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
