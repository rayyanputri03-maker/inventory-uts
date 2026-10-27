<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-rose-900 leading-tight font-serif">
                {{ __('Katalog Produk & Skincare') }}
            </h2>
            <a href="{{ route('products.create') }}" class="bg-rose-600 hover:bg-rose-700 text-white font-semibold px-4 py-2 rounded-2xl shadow-sm text-sm transition">
                + Tambah Produk Baru
            </a>
        </div>
    </x-slot>

    <div class="py-6 bg-pink-50/50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-3xl border border-rose-100 p-6">
                
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-rose-100 text-rose-800 text-xs uppercase tracking-wider bg-rose-50/50">
                            <th class="py-3 px-4">Nama Produk</th>
                            <th class="py-3 px-4">Kategori</th>
                            <th class="py-3 px-4">Harga</th>
                            <th class="py-3 px-4">Stok</th>
                            <th class="py-3 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-rose-50 text-sm text-gray-700">
                        @forelse($products as $product)
                            <tr class="hover:bg-pink-50/30 transition">
                                <td class="py-4 px-4 font-semibold text-rose-950">{{ $product->name }}</td>
                                <td class="py-4 px-4 text-gray-500">{{ $product->category->name ?? '-' }}</td>
                                <td class="py-4 px-4 font-medium text-gray-800">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td class="py-4 px-4">
                                    @if($product->stock < 10)
                                        <span class="bg-rose-100 text-rose-800 text-xs font-bold px-3 py-1 rounded-full border border-rose-200">
                                            {{ $product->stock }} (Stok Menipis)
                                        </span>
                                    @else
                                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-3 py-1 rounded-full border border-emerald-200">
                                            {{ $product->stock }} Pcs
                                        </span>
                                    @endif
                                </td>
                                <td class="py-4 px-4 text-center space-x-2">
                                    <a href="{{ route('products.edit', $product->id) }}" class="text-amber-700 hover:text-amber-900 font-semibold text-xs bg-amber-50 px-3 py-1.5 rounded-xl border border-amber-200">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-700 hover:text-rose-900 font-semibold text-xs bg-rose-50 px-3 py-1.5 rounded-xl border border-rose-200">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-6 text-center text-gray-400">Belum ada data produk skincare.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>