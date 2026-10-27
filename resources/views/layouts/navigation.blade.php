<aside class="w-64 bg-white border-r border-rose-100 flex flex-col justify-between min-h-screen p-4 shrink-0">
    <div class="space-y-6">
        <!-- Logo Brand -->
        <div class="flex items-center space-x-3 px-3 py-2">
            <span class="text-2xl">💄</span>
            <div>
                <h1 class="font-bold text-lg text-rose-950 font-serif leading-tight">Maison de Clarissa</h1>
                <p class="text-[10px] text-rose-400 font-medium">Inventory & Sales System</p>
            </div>
        </div>

        <!-- List Menu Sidebar -->
        <nav class="space-y-1.5">
            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-2xl font-bold text-xs transition {{ request()->routeIs('dashboard') ? 'bg-pink-100 text-rose-900 shadow-sm' : 'text-gray-600 hover:bg-pink-50 hover:text-rose-800' }}">
                <span>📊</span>
                <span>Dashboard</span>
            </a>

            <!-- Kelola Kategori -->
            @if(Route::has('categories.index'))
            <a href="{{ route('categories.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-2xl font-bold text-xs transition {{ request()->routeIs('categories.*') ? 'bg-pink-100 text-rose-900 shadow-sm' : 'text-gray-600 hover:bg-pink-50 hover:text-rose-800' }}">
                <span>🏷️</span>
                <span>Kelola Kategori</span>
            </a>
            @endif

            <!-- Katalog Produk -->
            @if(Route::has('products.index'))
            <a href="{{ route('products.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-2xl font-bold text-xs transition {{ request()->routeIs('products.*') ? 'bg-pink-100 text-rose-900 shadow-sm' : 'text-gray-600 hover:bg-pink-50 hover:text-rose-800' }}">
                <span>🛍️</span>
                <span>Katalog Produk</span>
            </a>
            @endif

            <!-- Data Pemasok -->
            @if(Route::has('suppliers.index'))
            <a href="{{ route('suppliers.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-2xl font-bold text-xs transition {{ request()->routeIs('suppliers.*') ? 'bg-pink-100 text-rose-900 shadow-sm' : 'text-gray-600 hover:bg-pink-50 hover:text-rose-800' }}">
                <span>🏢</span>
                <span>Data Pemasok</span>
            </a>
            @endif

            <!-- Pembelian Stok -->
            <a href="{{ Route::has('purchases.index') ? route('purchases.index') : '#' }}" class="flex items-center space-x-3 px-4 py-3 rounded-2xl font-bold text-xs transition {{ request()->routeIs('purchases.*') ? 'bg-pink-100 text-rose-900 shadow-sm' : 'text-gray-600 hover:bg-pink-50 hover:text-rose-800' }}">
                <span>📦</span>
                <span>Pembelian Stok</span>
            </a>

            <!-- Kasir Penjualan -->
            <a href="{{ Route::has('sales.create') ? route('sales.create') : '#' }}" class="flex items-center space-x-3 px-4 py-3 rounded-2xl font-bold text-xs transition {{ request()->routeIs('sales.create') ? 'bg-pink-100 text-rose-900 shadow-sm' : 'text-gray-600 hover:bg-pink-50 hover:text-rose-800' }}">
                <span>🛒</span>
                <span>Kasir Penjualan</span>
            </a>

            <!-- Laporan Penjualan -->
            @if(Route::has('sales.index'))
            <a href="{{ route('sales.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-2xl font-bold text-xs transition {{ request()->routeIs('sales.index') ? 'bg-pink-100 text-rose-900 shadow-sm' : 'text-gray-600 hover:bg-pink-50 hover:text-rose-800' }}">
                <span>📋</span>
                <span>Laporan Penjualan</span>
            </a>
            @endif
        </nav>
    </div>

    <!-- User & Logout -->
    <div class="border-t border-rose-100 pt-4 flex items-center justify-between">
        <div>
            <p class="font-bold text-xs text-rose-950">{{ Auth::user()->name ?? 'User' }}</p>
            <p class="text-[10px] text-gray-400">Staff Toko</p>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-xs font-bold text-rose-600 bg-rose-50 hover:bg-rose-100 px-3 py-1.5 rounded-xl transition border border-rose-200">
                Keluar
            </button>
        </form>
    </div>
</aside>