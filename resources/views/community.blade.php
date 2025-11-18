    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ARK - Anime Riding Kalimantan | Komunitas Motor Itasha</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
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
            
            .member-card {
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                position: relative;
                overflow: hidden;
                background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
                border: 1px solid rgba(45, 90, 39, 0.1);
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            }

            .member-card:hover {
                transform: translateY(-8px) scale(1.02);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                border-color: rgba(45, 90, 39, 0.2);
            }

            .member-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(90deg, #2d5a27, #3b82f6, #2d5a27);
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .member-card:hover::before {
                opacity: 1;
            }

            .member-card::after {
                content: '';
                position: absolute;
                inset: 0;
                padding: 1px;
                background: linear-gradient(135deg, rgba(45, 90, 39, 0.1), rgba(59, 130, 246, 0.1));
                border-radius: inherit;
                mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
                mask-composite: exclude;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .member-card:hover::after {
                opacity: 1;
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
            

            
            .chart-container {
                position: relative;
                height: 300px;
                width: 100%;
            }
            
            .loader {
                border: 3px solid rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                border-top: 3px solid var(--primary-green);
                width: 40px;
                height: 40px;
                animation: spin 1s linear infinite;
            }
            
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            

        </style>
    </head>
    <body class="antialiased">
        <!-- Header -->
        <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-green-200 shadow-sm">
            <div class="container mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <div class="w-full h-12 rounded-lg flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('storage/logo/logo komu 2.png') }}" alt="ARK Logo" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <nav class="hidden md:flex items-center space-x-8">
                        <a href="#sosmed" class="text-gray-700 hover:text-primary-green font-medium transition-colors duration-200">
                            Sosial Media
                        </a>
                        <a href="#members" class="text-gray-700 hover:text-primary-green font-medium transition-colors duration-200">
                            Members
                        </a>
                        <a href="#stats" class="text-gray-700 hover:text-primary-green font-medium transition-colors duration-200">
                            Statistik
                        </a>
                        <a href="#news" class="text-gray-700 hover:text-primary-green font-medium transition-colors duration-200">
                            Berita
                        </a>
                        <a href="#gallery" class="text-gray-700 hover:text-primary-green font-medium transition-colors duration-200">
                            Dokumentasi
                        </a>
                        <a href="#contact" class="text-gray-700 hover:text-primary-green font-medium transition-colors duration-200">
                            Kontak
                        </a>
                    </nav>

                    <button id="menu-toggle" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                    <a href="#sosmed" class="block py-2 text-gray-700 hover:text-primary-green font-medium transition-colors">Sosial Media</a>
                    <a href="#members" class="block py-2 text-gray-700 hover:text-primary-green font-medium transition-colors">Members</a>
                    <a href="#stats" class="block py-2 text-gray-700 hover:text-primary-green font-medium transition-colors">Statistik</a>
                    <a href="#news" class="block py-2 text-gray-700 hover:text-primary-green font-medium transition-colors">Berita</a>
                    <a href="#gallery" class="block py-2 text-gray-700 hover:text-primary-green font-medium transition-colors">Dokumentasi</a>
                    <a href="#contact" class="block py-2 text-gray-700 hover:text-primary-green font-medium transition-colors">Kontak</a>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center justify-center relative pt-20 bg-white">

            <div class="container mx-auto px-6 z-10 relative">
                <div class="text-center">
                    <div class="mb-6">
                        <span class="inline-block bg-primary-green/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-4 border border-primary-green/20 text-primary-green">
                            🏍️ Komunitas Motor Itasha Terbesar di Kalimantan
                        </span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-bold mb-6 text-primary-green">
                        ANIME RIDING KALIMANTAN
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                        Ekspresikan passion anime Anda melalui kendaraan itasha dan bergabunglah dengan komunitas rider terbesar di Kalimantan
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#members" class="gradient-kalimantan text-white px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition-all duration-300 inline-flex items-center justify-center shadow-lg">
                            <i class="fas fa-users mr-2"></i>
                            Jelajahi Members
                        </a>
                        <a href="#contact" class="bg-white text-primary-green px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-all duration-300 border border-primary-green/20 inline-flex items-center justify-center shadow-md">
                            <i class="fas fa-plus-circle mr-2"></i>
                            Bergabung Sekarang
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <!-- Social Media Section -->
        <section id="sosmed" class="py-16 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary-green mb-4">Ikuti Kami</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Stay connected with our community through social media</p>
                </div>

                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#" class="social-icon card-bg p-6 rounded-xl text-center hover-glow w-40">
                        <div class="w-16 h-16 bg-primary-green rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-instagram text-white text-2xl"></i>
                        </div>
                        <h3 class="text-primary-green font-semibold">Instagram</h3>
                        <p class="text-gray-600 text-sm mt-1">@ark_kalimantan</p>
                    </a>

                    <a href="#" class="social-icon card-bg p-6 rounded-xl text-center hover-glow w-40">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-whatsapp text-white text-2xl"></i>
                        </div>
                        <h3 class="text-primary-green font-semibold">WhatsApp</h3>
                        <p class="text-gray-600 text-sm mt-1">Group Chat</p>
                    </a>

                    <a href="#" class="social-icon card-bg p-6 rounded-xl text-center hover-glow w-40">
                        <div class="w-16 h-16 bg-secondary-blue rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-facebook text-white text-2xl"></i>
                        </div>
                        <h3 class="text-primary-green font-semibold">Facebook</h3>
                        <p class="text-gray-600 text-sm mt-1">ARK Community</p>
                    </a>

                    <a href="#" class="social-icon card-bg p-6 rounded-xl text-center hover-glow w-40">
                        <div class="w-16 h-16 bg-gray-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-tiktok text-white text-2xl"></i>
                        </div>
                        <h3 class="text-primary-green font-semibold">TikTok</h3>
                        <p class="text-gray-600 text-sm mt-1">@ark.riding</p>
                    </a>

                    <a href="#" class="social-icon card-bg p-6 rounded-xl text-center hover-glow w-40">
                        <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-youtube text-white text-2xl"></i>
                        </div>
                        <h3 class="text-primary-green font-semibold">YouTube</h3>
                        <p class="text-gray-600 text-sm mt-1">ARK Channel</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Members Section -->
        <section id="members" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary-green mb-4">Our Members</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Kenali para rider itasha yang membawa semangat anime di jalanan Kalimantan</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @forelse($anggotas as $anggota)
                    <div class="card-bg rounded-2xl overflow-hidden shadow-lg border border-gray-200 bg-white">
                        <!-- Header with Avatar and Badges -->
                        <div class="relative bg-gradient-to-br from-gray-100 to-gray-100 p-6 overflow-hidden">
                            <!-- Background Pattern -->
                            <div class="absolute inset-0 opacity-5">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-primary-green rounded-full -translate-y-16 translate-x-16"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-secondary-blue rounded-full translate-y-12 -translate-x-12"></div>
                            </div>

                            <div class="relative flex items-center space-x-4">
                                <div class="relative group">
                                    <div class="absolute inset-0 bg-gradient-to-r from-primary-green to-secondary-blue rounded-full blur-lg opacity-30 group-hover:opacity-50 transition-opacity duration-300"></div>
                                    <img src="{{ asset('storage/' . $anggota->foto) }}" alt="Member" class="relative w-20 h-20 rounded-full object-cover border-4 border-white shadow-xl ring-2 ring-primary-green/20 group-hover:ring-primary-green/40 transition-all duration-300">
                                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-gradient-to-r from-emerald-400 to-green-500 rounded-full border-3 border-white flex items-center justify-center shadow-lg animate-pulse">
                                        <i class="fas fa-circle text-white text-xs"></i>
                                    </div>
                                    <!-- Glow effect -->
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-primary-green/20 to-secondary-blue/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-xl"></div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-800 mb-1 group-hover:text-primary-green transition-colors duration-300">{{ $anggota->nama }}</h3>
                                    <p class="text-primary-green font-medium text-sm mb-2 flex items-center">
                                        {{ $anggota->posisi }}
                                    </p>
                                </div>
                            </div>

                            <!-- Status Badges -->
                            <div class="absolute top-4 right-4 flex flex-col space-y-2">
                                @if($anggota->itasha)
                                @endif
                                <div class="bg-green-500 text-white text-xs px-3 py-1.5 rounded-full font-semibold shadow-lg hover:shadow-xl transition-shadow duration-300 flex items-center">
                                    <i class="fas fa-leaf mr-2"></i>
                                    <span class="relative">
                                        AKTIF
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-6 bg-gradient-to-br from-white to-gray-50">
                            <!-- Location & Vehicle Info -->
                            <div class="space-y-3 mb-6">
                                <div class="group flex items-center p-4 bg-gradient-to-r from-white to-green-50 rounded-xl border border-green-100 hover:border-green-200 transition-all duration-300 hover:shadow-md">
                                    <div class="w-10 h-10 bg-gradient-to-r from-primary-green to-green-600 rounded-full flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                        <i class="fas fa-map-marker-alt text-black text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-xs text-primary-green uppercase tracking-wide font-semibold mb-1">Region</p>
                                        <p class="text-sm font-bold text-gray-800 group-hover:text-primary-green transition-colors duration-300">{{ $anggota->region }}</p>
                                    </div>
                                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <i class="fas fa-arrow-right text-primary-green text-sm"></i>
                                    </div>
                                </div>

                                <div class="group flex items-center p-4 bg-gradient-to-r from-white to-blue-50 rounded-xl border border-blue-100 hover:border-blue-200 transition-all duration-300 hover:shadow-md">
                                    <div class="w-10 h-10 bg-gradient-to-r from-secondary-blue to-blue-600 rounded-full flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                        @if(strtolower($anggota->jeniskendaraan) === 'mobil')
                                            <i class="fas fa-car text-black text-sm"></i>
                                        @else
                                            <i class="fas fa-motorcycle text-black text-sm"></i>
                                        @endif
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-xs text-secondary-blue uppercase tracking-wide font-semibold mb-1">Unit kendaraan</p>
                                        <p class="text-sm font-bold text-gray-800 group-hover:text-secondary-blue transition-colors duration-300">{{ $anggota->merkkendaraan }}</p>
                                        <p class="text-xs text-gray-600 semibold">{{ $anggota->itasha }}</p>
                                    </div>
                                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <i class="fas fa-arrow-right text-secondary-blue text-sm"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Media Links -->
                            <div class="flex items-center justify-between">
                                <div class="flex space-x-3">
                                    @if(is_array($anggota->sosmed) && !empty($anggota->sosmed))
                                        @foreach($anggota->sosmed as $platform => $url)
                                            @if(is_string($platform) && is_string($url))
                                                @if(strtolower($platform) === 'instagram')
                                                    <a href="{{ $url }}" target="_blank" class="group relative w-11 h-11 flex items-center justify-center text-white hover:scale-110 transition-all duration-300">
                                                        <i class="fab fa-instagram text-purple-500 text-2xl"></i>
                                                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                                                    </a>
                                                @elseif(strtolower($platform) === 'whatsapp')
                                                    <a href="{{ $url }}" target="_blank" class="group relative w-11 h-11 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
                                                        <i class="fab fa-whatsapp text-sm"></i>
                                                        <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-green-600 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                                                    </a>
                                                @elseif(strtolower($platform) === 'facebook')
                                                    <a href="{{ $url }}" target="_blank" class="group relative w-11 h-11 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
                                                        <i class="fab fa-facebook text-sm"></i>
                                                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                                                    </a>
                                                @elseif(strtolower($platform) === 'tiktok')
                                                    <a href="{{ $url }}" target="_blank" class="group relative w-11 h-11 bg-gradient-to-r from-gray-700 to-gray-800 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
                                                        <i class="fab fa-tiktok text-sm"></i>
                                                        <div class="absolute inset-0 bg-gradient-to-r from-gray-700 to-gray-800 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300 blur-lg"></div>
                                                    </a>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif
                                </div>

                                <a href="{{ route('profile', ['id' => $anggota->id]) }}" class="group relative px-5 py-2.5 bg-green-500 text-white text-sm font-semibold rounded-xl hover:from-green-600 hover:to-primary-green transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 overflow-hidden inline-block">
                                    <span class="relative z-10 flex items-center">
                                        <i class="fas fa-user-plus mr-2 group-hover:rotate-12 transition-transform duration-300"></i>
                                        Full Profile
                                    <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-primary-green opacity-0 group-hover:opacity-20 transition-opacity duration-300 rounded-xl"></div>
                                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-xl"></div>
                                </a>
                            </div>
                        </div>


                    </div>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-3xl text-gray-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada data anggota</h3>
                        <p class="text-gray-500">Data anggota akan segera ditampilkan di sini.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Stats Section -->
<section id="stats" class="py-16 bg-white text-gray-900 relative overflow-hidden">
    <!-- Background Animation -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary-green/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-1/2 -right-10 w-60 h-60 bg-secondary-blue/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 left-1/4 w-32 h-32 bg-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-r from-primary-green to-secondary-blue mb-4">
                <i class="fas fa-chart-line text-2xl"></i>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent">Statistik Komunitas</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Data statistik real-time komunitas ANIME RIDING KALIMANTAN</p>
        </div>
        
        <!-- Main Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-green to-green-600 rounded-xl blur-lg opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                <div class="relative bg-white backdrop-blur-md border border-gray-200 rounded-xl p-6 hover:border-green-500/50 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-green to-green-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full">+12%</span>
                    </div>
                    <div class="text-3xl font-bold mb-1">{{ $totalMembers }}</div>
                    <div class="text-gray-600 text-sm">Total Members</div>
                    <div class="mt-4 h-1 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-primary-green to-green-600 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>
            
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-secondary-blue to-blue-600 rounded-xl blur-lg opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                <div class="relative bg-white backdrop-blur-md border border-gray-200 rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-secondary-blue to-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-motorcycle text-white"></i>
                        </div>
                        <span class="text-xs font-medium text-blue-600 bg-blue-100 px-2 py-1 rounded-full">+8%</span>
                    </div>
                    <div class="text-3xl font-bold mb-1">{{ $totalItasha }}</div>
                    <div class="text-gray-600 text-sm">Itasha Vehicles</div>
                    <div class="mt-4 h-1 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-secondary-blue to-blue-600 rounded-full" style="width: 72%"></div>
                    </div>
                </div>
            </div>
            
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-purple-700 rounded-xl blur-lg opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                <div class="relative bg-white backdrop-blur-md border border-gray-200 rounded-xl p-6 hover:border-purple-500/50 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-700 rounded-lg flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-white"></i>
                        </div>
                        <span class="text-xs font-medium text-purple-600 bg-purple-100 px-2 py-1 rounded-full">+15%</span>
                    </div>
                    <div class="text-3xl font-bold mb-1">{{ $totalEvents }}</div>
                    <div class="text-gray-600 text-sm">Events</div>
                    <div class="mt-4 h-1 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-purple-500 to-purple-700 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
            </div>
            
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-amber-500 to-amber-700 rounded-xl blur-lg opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                <div class="relative bg-white backdrop-blur-md border border-gray-200 rounded-xl p-6 hover:border-amber-500/50 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-amber-500 to-amber-700 rounded-lg flex items-center justify-center">
                            <i class="fas fa-map-marked-alt text-white"></i>
                        </div>
                        <span class="text-xs font-medium text-amber-600 bg-amber-100 px-2 py-1 rounded-full">+5%</span>
                    </div>
                    <div class="text-3xl font-bold mb-1">{{ $totalCities }}</div>
                    <div class="text-gray-600 text-sm">Cities</div>
                    <div class="mt-4 h-1 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-amber-500 to-amber-700 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <div class="bg-white backdrop-blur-md border border-gray-200 rounded-xl p-6 hover:border-green-500/30 transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-semibold">Distribusi Member</h3>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-xs bg-gray-100 rounded-full hover:bg-gray-200 transition-colors">Bulan</button>
                        <button class="px-3 py-1 text-xs bg-green-100 text-green-600 rounded-full">Tahun</button>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="memberChart"></canvas>
                </div>
                <div class="mt-4 flex items-center justify-between text-sm">
                    <span class="text-gray-600">Pertumbuhan tahunan</span>
                    <span class="text-green-600 font-medium">+23.5%</span>
                </div>
            </div>

            <div class="bg-white backdrop-blur-md border border-gray-200 rounded-xl p-6 hover:border-blue-500/30 transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-semibold">Jenis Kendaraan</h3>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-xs bg-blue-100 text-blue-600 rounded-full">Total</button>
                        <button class="px-3 py-1 text-xs bg-gray-100 rounded-full hover:bg-gray-200 transition-colors">Aktif</button>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="vehicleChart"></canvas>
                </div>
                <div class="mt-4 flex items-center justify-between text-sm">
                    <span class="text-gray-600">Total kendaraan terdaftar</span>
                    <span class="text-blue-600 font-medium">{{ $totalItasha }}</span>
                </div>
            </div>
        </div>
        
        <!-- Activity Timeline -->
        <div class="bg-white backdrop-blur-md border border-gray-200 rounded-xl p-6">
            <h3 class="text-xl font-semibold mb-6">Aktivitas Terkini</h3>
            <div class="space-y-4">
                <div class="flex items-start space-x-4">
                    <div class="relative">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-user-plus text-green-600"></i>
                        </div>
                        <div class="absolute top-10 left-5 w-0.5 h-16 bg-gray-100"></div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h4 class="font-medium">5 member baru bergabung</h4>
                            <span class="text-xs text-gray-600">2 jam yang lalu</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Dari berbagai kota di Kalimantan</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="relative">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar-check text-blue-600"></i>
                        </div>
                        <div class="absolute top-10 left-5 w-0.5 h-16 bg-gray-100"></div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h4 class="font-medium">Event "Itasha Meetup" berhasil</h4>
                            <span class="text-xs text-gray-600">1 hari yang lalu</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Diikuti oleh 35 member dari 7 kota</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="relative">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-trophy text-purple-600"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h4 class="font-medium">Komunitas mencapai 100 member</h4>
                            <span class="text-xs text-gray-600">3 hari yang lalu</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Milestone pertama komunitas ARK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- News Section -->
        <section id="news" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary-green mb-4">Berita & Event</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Update terbaru dari kegiatan dan event komunitas</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($beritas as $berita)
                    <article class="card-bg rounded-xl overflow-hidden hover-glow">
                        <div class="relative">
                            @if($berita->foto)
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="News" class="w-full h-48 object-cover">
                            @else
                            <img src="https://picsum.photos/seed/news/600/400.jpg" alt="News" class="w-full h-48 object-cover">
                            @endif
                            <div class="absolute top-3 left-3">
                                <span class="bg-primary-green text-white text-xs px-3 py-1 rounded-full">
                                    {{ $berita->tanggal->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-primary-green mb-3">{{ $berita->judul }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ Str::limit($berita->deskripsi, 150) }}
                            </p>
                            @if($berita->url)
                            <a href="{{ $berita->url }}" target="_blank" class="text-secondary-blue font-medium hover:text-primary-green transition-colors inline-flex items-center">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            @else
                            <span class="text-gray-500 font-medium inline-flex items-center">
                                Detail Berita
                            </span>
                            @endif
                        </div>
                    </article>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-600">Belum ada berita yang tersedia.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="py-16 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary-green mb-4">Dokumentasi</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Dokumentasi kegiatan dan koleksi itasha kami</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @forelse($dokumentasis as $dokumentasi)
                    <div class="relative overflow-hidden rounded-lg group cursor-pointer">
                        @if(is_array($dokumentasi->dokumentasi) && !empty($dokumentasi->dokumentasi))
                            @php
                                $firstImage = is_string($dokumentasi->dokumentasi[0]) ? $dokumentasi->dokumentasi[0] : null;
                            @endphp
                            @if($firstImage)
                            <img src="{{ asset('storage/' . $firstImage) }}" alt="Gallery" class="w-full h-full object-cover">
                            @else
                            <img src="https://picsum.photos/seed/gallery/400/400.jpg" alt="Gallery" class="w-full h-full object-cover">
                            @endif
                        @elseif(is_string($dokumentasi->dokumentasi) && !empty($dokumentasi->dokumentasi))
                        <img src="{{ asset('storage/' . $dokumentasi->dokumentasi) }}" alt="Gallery" class="w-full h-full object-cover">
                        @else
                        <img src="https://picsum.photos/seed/gallery/400/400.jpg" alt="Gallery" class="w-full h-full object-cover">
                        @endif
                        <div class="absolute inset-0 bg-primary-green/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 text-white">
                                <h3 class="font-semibold">{{ $dokumentasi->judul }}</h3>
                                @if($dokumentasi->kategori)
                                <p class="text-sm text-green-100">{{ $dokumentasi->kategori }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-600">Belum ada dokumentasi yang tersedia.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary-green mb-4">Hubungi Kami</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Tertarik bergabung dengan ANIME RIDING KALIMANTAN? Hubungi kami sekarang!</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="card-bg rounded-xl p-6">
                        <h3 class="text-xl font-semibold text-primary-green mb-4">Kirim Pesan</h3>
                        <form id="contactForm">
                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-medium mb-2" for="name">
                                    Nama Lengkap
                                </label>
                                <input class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/20" id="name" type="text" placeholder="Nama Anda">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-medium mb-2" for="email">
                                    Email
                                </label>
                                <input class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/20" id="email" type="email" placeholder="email@example.com">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-medium mb-2" for="message">
                                    Pesan
                                </label>
                                <textarea class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:border-primary-green focus:ring-2 focus:ring-primary-green/20" id="message" rows="4" placeholder="Pesan Anda"></textarea>
                            </div>
                            <button type="submit" class="w-full gradient-kalimantan text-white px-6 py-3 rounded-lg font-semibold hover:opacity-90 transition-all duration-300">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                    
                    <div class="card-bg rounded-xl p-6">
                        <h3 class="text-xl font-semibold text-primary-green mb-4">Informasi Kontak</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-primary-green mt-1 mr-3"></i>
                                <div>
                                    <h4 class="text-primary-green font-medium">Alamat</h4>
                                    <p class="text-gray-600 text-sm">Jl. Soekarno Hatta No. 123, Balikpapan, Kalimantan Timur</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone text-primary-green mt-1 mr-3"></i>
                                <div>
                                    <h4 class="text-primary-green font-medium">Telepon</h4>
                                    <p class="text-gray-600 text-sm">+62 812-3456-7890</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-primary-green mt-1 mr-3"></i>
                                <div>
                                    <h4 class="text-primary-green font-medium">Email</h4>
                                    <p class="text-gray-600 text-sm">info@ark-kalimantan.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-clock text-primary-green mt-1 mr-3"></i>
                                <div>
                                    <h4 class="text-primary-green font-medium">Jam Operasional</h4>
                                    <p class="text-gray-600 text-sm">Senin - Jumat: 09:00 - 17:00</p>
                                    <p class="text-gray-600 text-sm">Sabtu - Minggu: 10:00 - 15:00</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6">
                            <h4 class="text-primary-green font-medium mb-3">Ikuti Kami</h4>
                            <div class="flex space-x-3">
                                <a href="#" class="w-10 h-10 bg-primary-green rounded-full flex items-center justify-center text-white hover:opacity-80 transition-opacity">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-green rounded-full flex items-center justify-center text-white hover:opacity-80 transition-opacity">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-green rounded-full flex items-center justify-center text-white hover:opacity-80 transition-opacity">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-green rounded-full flex items-center justify-center text-white hover:opacity-80 transition-opacity">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-primary-green py-12">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center space-x-2 mb-2">
                            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-lg">
                                <span class="text-primary-green font-bold text-lg">ARK</span>
                            </div>
                            <div>
                                <span class="text-xl font-semibold text-white">ANIME RIDING KALIMANTAN</span>
                                <p class="text-green-100 text-xs">Komunitas Motor Itasha</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center md:text-right">
                        <p class="text-green-100 text-sm mb-2">Follow us on social media</p>
                        <div class="flex space-x-4 justify-center md:justify-end">
                            <a href="#" class="text-green-100 hover:text-white transition-colors">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="#" class="text-green-100 hover:text-white transition-colors">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                            <a href="#" class="text-green-100 hover:text-white transition-colors">
                                <i class="fab fa-facebook text-xl"></i>
                            </a>
                            <a href="#" class="text-green-100 hover:text-white transition-colors">
                                <i class="fab fa-youtube text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="border-t border-green-300/30 mt-8 pt-8 text-center">
                    <p class="text-green-100 text-sm">&copy; 2024 ANIME RIDING KALIMANTAN. All rights reserved.</p>
                    <p class="text-white text-xs mt-2">Ride with Style, Express with Passion 🏍️✨</p>
                </div>
            </div>
        </footer>

        <!-- JavaScript -->
        <script>
            // Mobile menu toggle
            document.getElementById('menu-toggle').addEventListener('click', function() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            });

            // Close mobile menu when clicking on a link
            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    document.getElementById('mobile-menu').classList.add('hidden');
                });
            });

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

            // Add scroll effect to header
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 50) {
                    header.classList.add('shadow-lg');
                } else {
                    header.classList.remove('shadow-lg');
                }
            });

            // Contact form submission
            document.getElementById('contactForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const message = document.getElementById('message').value;
                
                // Simple validation
                if (!name || !email || !message) {
                    alert('Mohon lengkapi semua field');
                    return;
                }
                
                // Here you would normally send the data to a server
                // For this demo, we'll just show a success message
                alert('Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.');
                
                // Reset form
                document.getElementById('contactForm').reset();
            });

            // Initialize Charts
            document.addEventListener('DOMContentLoaded', function() {
                // Member Distribution Chart
                const memberCtx = document.getElementById('memberChart').getContext('2d');
                const memberData = @json($memberDistribution);
                const memberLabels = Object.keys(memberData);
                const memberValues = Object.values(memberData);

                const memberChart = new Chart(memberCtx, {
                    type: 'bar',
                    data: {
                        labels: memberLabels,
                        datasets: [{
                            label: 'Jumlah Member',
                            data: memberValues,
                            backgroundColor: [
                                'rgba(45, 90, 39, 0.8)',   // Dark Green
                                'rgba(59, 130, 246, 0.8)', // Blue
                                'rgba(245, 158, 11, 0.8)', // Amber
                                'rgba(239, 68, 68, 0.8)',  // Red
                                'rgba(168, 85, 247, 0.8)', // Purple
                                'rgba(6, 182, 212, 0.8)',  // Cyan
                                'rgba(34, 197, 94, 0.8)',  // Emerald
                                'rgba(251, 191, 36, 0.8)'  // Yellow
                            ],
                            borderColor: [
                                'rgba(45, 90, 39, 1)',
                                'rgba(59, 130, 246, 1)',
                                'rgba(245, 158, 11, 1)',
                                'rgba(239, 68, 68, 1)',
                                'rgba(168, 85, 247, 1)',
                                'rgba(6, 182, 212, 1)',
                                'rgba(34, 197, 94, 1)',
                                'rgba(251, 191, 36, 1)'
                            ],
                            borderWidth: 2,
                            borderRadius: 4,
                            borderSkipped: false,
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.1)'
                                },
                                ticks: {
                                    color: 'rgba(255, 255, 255, 0.7)',
                                    stepSize: 1
                                }
                            },
                            x: {
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.1)'
                                },
                                ticks: {
                                    color: 'rgba(255, 255, 255, 0.7)'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                labels: {
                                    color: 'rgba(255, 255, 255, 0.7)'
                                }
                            }
                        }
                    }
                });

                // Vehicle Type Chart
                const vehicleCtx = document.getElementById('vehicleChart').getContext('2d');
                const vehicleData = @json($vehicleTypes);
                const vehicleLabels = Object.keys(vehicleData).map(label => {
                    const labelMap = {
                        'motor': 'Motor',
                        'mobil': 'Mobil',
                        'lainnya': 'Lainnya'
                    };
                    return labelMap[label] || label.charAt(0).toUpperCase() + label.slice(1);
                });
                const vehicleValues = Object.values(vehicleData);

                const vehicleChart = new Chart(vehicleCtx, {
                    type: 'doughnut',
                    data: {
                        labels: vehicleLabels,
                        datasets: [{
                            data: vehicleValues,
                            backgroundColor: [
                                'rgba(45, 90, 39, 0.8)',   // Dark Green
                                'rgba(59, 130, 246, 0.8)', // Blue
                                'rgba(245, 158, 11, 0.8)', // Amber
                                'rgba(239, 68, 68, 0.8)',  // Red
                                'rgba(168, 85, 247, 0.8)'  // Purple
                            ],
                            borderColor: [
                                'rgba(45, 90, 39, 1)',
                                'rgba(59, 130, 246, 1)',
                                'rgba(245, 158, 11, 1)',
                                'rgba(239, 68, 68, 1)',
                                'rgba(168, 85, 247, 1)'
                            ],
                            borderWidth: 2,
                            hoverBorderWidth: 3,
                            hoverOffset: 8
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'right',
                                labels: {
                                    color: 'rgba(255, 255, 255, 0.7)'
                                }
                            }
                        }
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

            // Observe all sections
            document.querySelectorAll('section').forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(20px)';
                section.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
                observer.observe(section);
            });
        </script>
    </body>
    </html>