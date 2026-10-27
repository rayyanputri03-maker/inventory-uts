<x-app-layout>
    <div class="space-y-6" style="max-width: 1100px;">
        
        <!-- Banner Menyapa Soft Fairy Pink -->
        <div class="bg-gradient-to-r from-pink-100 via-rose-100 to-pink-50 rounded-3xl p-6 sm:p-8 flex justify-between items-center shadow-sm border border-rose-200/80">
            <div>
                <h1 class="text-2xl font-extrabold text-rose-950 font-serif tracking-wide">
                    Halo, {{ Auth::user()->name }} 🧚‍♀️✨
                </h1>
                <p class="text-rose-700 text-xs sm:text-sm mt-1 font-medium">
                    Semoga harimu manis! Pantau stok kosmetik & skincare impianmu di Maison de Clarissa 🌸
                </p>
            </div>
            <div>
                <span class="bg-white/90 text-rose-800 font-bold text-xs px-4 py-2 rounded-full shadow-sm border border-pink-200 flex items-center gap-1.5">
                    <span>👑</span> Staff Mode
                </span>
            </div>
        </div>

        <!-- Section Utama: Kartu Statistik + Notifikasi Stok (Flexbox Pas) -->
        <div style="display: flex; gap: 20px; flex-wrap: wrap;">
            
            <!-- Kolom Kiri: Kartu Ringkasan -->
            <div style="flex: 1; min-width: 280px;" class="space-y-4">
                
                <!-- Total Stok Produk -->
                <div class="bg-gradient-to-br from-rose-500 to-pink-600 text-white shadow-md border border-rose-300" style="border-radius: 28px; padding: 24px;">
                    <div class="flex items-center justify-between">
                        <p class="text-xs uppercase tracking-wider text-pink-100 font-bold">💖 Total Stok Produk</p>
                        <span class="text-xl">🛍️</span>
                    </div>
                    <h2 class="text-5xl font-black mt-2 text-white">{{ $totalProducts ?? 0 }}</h2>
                    <p class="text-[11px] text-pink-100/90 mt-2">Item terdaftar di katalog</p>
                </div>

                <!-- Total Stok Kritis / Menipis -->
                <div class="bg-gradient-to-br from-amber-500 to-rose-400 text-white shadow-md border border-amber-200" style="border-radius: 28px; padding: 24px;">
                    <div class="flex items-center justify-between">
                        <p class="text-xs uppercase tracking-wider text-amber-100 font-bold">⚠️ Stok Menipis (< 10)</p>
                        <span class="text-xl">🚨</span>
                    </div>
                    <h2 class="text-5xl font-black mt-2 text-white">{{ $lowStockCount ?? 0 }}</h2>
                    <p class="text-[11px] text-amber-100/90 mt-2">Perlu segera di-restok</p>
                </div>

                <!-- Baris Aksi Cepat Imut -->
                <div class="bg-white rounded-3xl p-4 shadow-sm flex items-center justify-between border border-rose-100">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-rose-800">⚡ Aksi Cepat:</span>
                    <a href="{{ route('products.index') }}" class="bg-rose-500 hover:bg-rose-600 text-white text-xs font-bold px-4 py-2.5 rounded-2xl transition duration-200 shadow-sm flex items-center gap-1.5">
                        <span>🎀</span> Kelola & Restok
                    </a>
                </div>

            </div>

            <!-- Kolom Kanan: Widget Notifikasi Stok Fairy Cutie -->
            <div style="flex: 1.2; min-width: 320px;" class="bg-white shadow-sm border border-rose-100 p-6 rounded-3xl flex flex-col justify-between">
                <div>
                    <!-- Header Widget -->
                    <div class="flex items-center justify-between border-b border-rose-100 pb-3 mb-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-lg">🔔</span>
                            <h3 class="font-bold text-rose-950 text-base font-serif">Notifikasi Stok Menipis</h3>
                        </div>
                        <span class="bg-rose-100 text-rose-800 text-[10px] font-extrabold px-3 py-1 rounded-full border border-rose-200">
                            {{ $lowStockProducts->count() ?? 0 }} Produk
                        </span>
                    </div>

                    <p class="text-xs text-rose-700/80 mb-3 font-medium">
                        Daftar barang cantik yang stoknya hampir habis dan perlu kamu restok:
                    </p>

                    <!-- Daftar Produk Stok Menipis -->
                    <div class="space-y-2.5 max-h-64 overflow-y-auto pr-1">
                        @forelse($lowStockProducts ?? [] as $item)
                            <div class="flex items-center justify-between bg-pink-50/60 hover:bg-pink-100/50 p-3 rounded-2xl border border-pink-100 transition">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-xl bg-rose-200/60 flex items-center justify-center text-xs">
                                        💄
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-xs text-rose-950">{{ $item->name }}</h4>
                                        <p class="text-[10px] text-gray-500">{{ $item->category->name ?? 'Skincare/Makeup' }}</p>
                                    </div>
                                </div>
                                <span class="bg-rose-600 text-white font-extrabold text-[11px] px-3 py-1 rounded-xl shadow-sm">
                                    Sisa {{ $item->stock }}
                                </span>
                            </div>
                        @empty
                            <div class="text-center py-8">
                                <span class="text-3xl">✨</span>
                                <p class="text-xs font-semibold text-rose-800 mt-2">Semua stok aman & melimpah!</p>
                                <p class="text-[10px] text-gray-400 mt-0.5">Tidak ada produk di bawah 10 pcs</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Footer Informasi -->
                <div class="mt-4 pt-3 border-t border-rose-50 text-center">
                    <p class="text-[11px] text-rose-400 font-medium">✨ Maison de Clarissa Inventory System ✨</p>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>