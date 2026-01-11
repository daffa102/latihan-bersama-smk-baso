<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AbsenKu - Sistem Absensi Masa Depan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .gradient-text {
            background: linear-gradient(90deg, #4F46E5 0%, #3B82F6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-[#F8FAFC] min-h-screen">

    <header class="fixed w-full top-0 z-50 bg-white/70 backdrop-blur-lg border-b border-slate-100 shadow-sm">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center group cursor-pointer">
                    <div class="bg-indigo-600 p-2 rounded-xl group-hover:rotate-12 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <span class="ml-3 text-2xl font-extrabold tracking-tight text-gray-900">Absen<span class="text-indigo-600">Ku</span></span>
                </div>
                <div class="hidden md:flex space-x-8 font-semibold">
                    <a href="#beranda" class="text-gray-600 hover:text-indigo-600 transition">Beranda</a>
                    <a href="#fitur" class="text-gray-600 hover:text-indigo-600 transition">Fitur</a>
                    <a href="#testimonial" class="text-gray-600 hover:text-indigo-600 transition">Testimonial</a>
                </div>
                <a href="/login" 
                   class="bg-indigo-600 text-white px-6 py-2.5 rounded-full font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:scale-105 transition active:scale-95">
                    Masuk
                </a>
            </div>
        </nav>
    </header>

    <section id="beranda" class="relative pt-32 pb-20 overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10 overflow-hidden text-indigo-100/50">
            <svg viewBox="0 0 100 100" class="w-full opacity-20"><circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="0.5" fill="none"/></svg>
        </div>
        
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <div class="inline-block px-4 py-1.5 mb-6 bg-indigo-50 border border-indigo-100 rounded-full text-indigo-600 text-sm font-bold uppercase tracking-widest">
                    🚀 New Era of Attendance
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Sistem Absensi <br><span class="gradient-text">Digital Terpercaya</span>
                </h1>
                <p class="text-lg text-gray-500 mb-10 max-w-lg leading-relaxed">
                    Ubah cara lama Anda mencatat kehadiran. Lebih efisien dengan dashboard otomatis dan pelaporan real-time yang akurat.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/register" class="bg-indigo-600 text-white px-8 py-4 rounded-2xl font-bold shadow-2xl shadow-indigo-300/50 hover:bg-indigo-700 transition-all transform hover:-translate-y-1 text-center">Mulai Gratis Sekarang</a>
                    <a href="/login" class="bg-white text-gray-700 px-8 py-4 rounded-2xl font-bold border border-gray-200 hover:bg-gray-50 transition-all shadow-sm text-center">Masuk ke Akun</a>
                </div>
            </div>
            <div class="md:w-1/2 relative flex justify-center">
                <div class="relative w-full max-w-md bg-white rounded-[2.5rem] shadow-[0_32px_64px_-16px_rgba(0,0,0,0.1)] p-10 border border-gray-100 transform md:rotate-2 hover:rotate-0 transition-transform duration-700">
                    <div class="flex items-center justify-center w-20 h-20 bg-indigo-600 rounded-[2rem] shadow-xl shadow-indigo-200 mx-auto mb-8">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-center text-3xl font-black text-gray-900 mb-2 uppercase">Absen Pro</h3>
                    <p class="text-center text-gray-400 mb-8 font-medium">Kamis, 8 Januari 2026</p>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-5 bg-indigo-50/50 border border-indigo-100 rounded-2xl">
                            <span class="text-gray-600 font-semibold">Waktu Masuk</span>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg font-bold text-sm">08:00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center p-5 bg-indigo-50/50 border border-indigo-100 rounded-2xl">
                            <span class="text-gray-600 font-semibold">Status Anda</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg font-bold text-sm">Tercatat Hadir</span>
                        </div>
                        <button class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-black tracking-widest hover:bg-indigo-700 transition shadow-lg mt-4 uppercase">Check In Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-indigo-600 font-black tracking-tighter text-sm uppercase mb-3">Community Love</h2>
                <h3 class="text-4xl md:text-5xl font-extrabold text-gray-900">Apa Kata Mereka?</h3>
                <div class="w-24 h-1.5 bg-indigo-600 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <div class="bg-gray-50 p-8 rounded-[2rem] border border-gray-100 hover:shadow-2xl hover:shadow-indigo-100 transition duration-500 group">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-indigo-600 rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg rotate-3 group-hover:rotate-0 transition-transform">I</div>
                        <div class="ml-4 text-left">
                            <h4 class="font-bold text-gray-900 text-lg leading-none">Iki</h4>
                            <span class="text-indigo-500 text-sm font-semibold">Pro Developer</span>
                        </div>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed text-lg">"Ingat semua kemungkinan kecil bukan berarti nol kemungkinan."</p>
                </div>

                <div class="bg-indigo-600 p-8 rounded-[2rem] shadow-xl shadow-indigo-200 transform md:-translate-y-4 hover:scale-105 transition duration-500">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white font-bold text-2xl border border-white/30">D</div>
                        <div class="ml-4 text-left text-white">
                            <h4 class="font-bold text-lg leading-none">Dafa Baso</h4>
                            <span class="text-indigo-200 text-sm font-semibold">Creative Chef</span>
                        </div>
                    </div>
                    <p class="text-white italic leading-relaxed text-lg font-medium">"Jangan lupa makan, karena coding butuh tenaga."</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-[2rem] border border-gray-100 hover:shadow-2xl hover:shadow-indigo-100 transition duration-500 group">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-teal-500 rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg -rotate-3 group-hover:rotate-0 transition-transform">S</div>
                        <div class="ml-4 text-left">
                            <h4 class="font-bold text-gray-900 text-lg leading-none">Siswa</h4>
                            <span class="text-teal-600 text-sm font-semibold">Web Learner</span>
                        </div>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed text-lg">"Selama belajar bersama bg daffa memberi pengalaman mengetik code yang sangat menyenangkan!"</p>
                </div>

                <div class="bg-white p-8 rounded-[2rem] border-2 border-dashed border-gray-200 hover:border-indigo-400 transition group">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-rose-500 rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg rotate-6 group-hover:rotate-0 transition-transform">P</div>
                        <div class="ml-4 text-left">
                            <h4 class="font-bold text-gray-900 text-lg leading-none">Peserta</h4>
                            <span class="text-rose-500 text-sm font-semibold">Bug Hunter</span>
                        </div>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed text-lg">"Mempersiapkan semua pelajaran agar bisa mengantisipasi semua bug atau error di masa depan."</p>
                </div>

                <div class="bg-gray-900 p-8 rounded-[2rem] shadow-2xl hover:scale-105 transition duration-500">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-indigo-500 rounded-2xl flex items-center justify-center text-white font-bold text-2xl">M</div>
                        <div class="ml-4 text-left">
                            <h4 class="font-bold text-white text-lg leading-none">Motivasi</h4>
                            <span class="text-indigo-400 text-sm font-semibold">Daily Wisdom</span>
                        </div>
                    </div>
                    <p class="text-gray-300 italic leading-relaxed text-lg font-medium">"Jangan pantang menyerah untuk mencapai tujuan, sesulit apapun jalannya."</p>
                </div>

                <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 hover:bg-white hover:border-indigo-200 transition duration-500">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg">F</div>
                        <div class="ml-4 text-left text-gray-900">
                            <h4 class="font-bold text-lg leading-none">Feedback</h4>
                            <span class="text-blue-600 text-sm font-semibold">Student Voice</span>
                        </div>
                    </div>
                    <p class="text-gray-700 italic leading-relaxed text-lg font-semibold">"Mungkin agar siswa lebih memahaminya, usahakan agar praktek diiringi dengan materi yang ada."</p>
                </div>

            </div>
        </div>
    </section>

    <footer id="kontak" class="bg-gray-900 text-white py-12 px-6">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <span class="text-2xl font-black">Absen<span class="text-indigo-500">Ku</span></span>
                <p class="text-gray-400 mt-2">Solusi modern manajemen kehadiran.</p>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-white transition italic">Instagram</a>
                <a href="#" class="text-gray-400 hover:text-white transition italic">LinkedIn</a>
                <a href="#" class="text-gray-400 hover:text-white transition italic">Twitter</a>
            </div>
        </div>
    </footer>

</body>
</html>