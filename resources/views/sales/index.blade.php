<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-rose-950 leading-tight font-serif">
                {{ __('Laporan Penjualan & Transaksi') }}
            </h2>
            <button onclick="window.print()" class="bg-rose-600 hover:bg-rose-700 text-white font-semibold px-4 py-2 rounded-2xl shadow-sm text-sm transition flex items-center gap-1.5">
                <span>🖨️</span> Cetak Laporan
            </button>
        </div>
    </x-slot>

    <div class="py-6 bg-pink-50/40 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            
            <div class="bg-white overflow-hidden shadow-sm rounded-3xl border border-rose-100 p-6">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-rose-100 text-rose-800 text-xs uppercase tracking-wider bg-rose-50/50">
                            <th class="py-3 px-4">Tanggal</th>
                            <th class="py-3 px-4">Nama Produk</th>
                            <th class="py-3 px-4 text-center">Jumlah</th>
                            <th class="py-3 px-4 text-right">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-rose-50 text-sm text-gray-700">
                        @forelse($sales ?? [] as $sale)
                            <tr class="hover:bg-pink-50/30 transition">
                                <td class="py-4 px-4 font-medium text-gray-500">
                                    {{ $sale->created_at ? $sale->created_at->format('d M Y, H:i') : '-' }}
                                </td>
                                
                                {{-- Menampilkan nama produk dari relasi atau fallback --}}
                                <td class="py-4 px-4 font-semibold text-rose-950">
                                    {{ $sale->product->name ?? $sale->product_name ?? 'Produk Dihapus' }}
                                </td>
                                
                                {{-- Jumlah Qty --}}
                                <td class="py-4 px-4 text-center font-bold text-rose-800">
                                    {{ $sale->quantity ?? $sale->qty ?? 0 }} pcs
                                </td>
                                
                                {{-- Total Harga --}}
                                <td class="py-4 px-4 text-right font-extrabold text-rose-900">
                                    Rp {{ number_format($sale->total_price ?? $sale->total ?? $sale->subtotal ?? 0, 0, ',', '.') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-8 text-center text-rose-400 font-medium">
                                    <span>🌸</span> Belum ada riwayat transaksi penjualan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>