<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-rose-900 leading-tight font-serif">
                {{ __('Data Supplier / Pemasok') }}
            </h2>
            <a href="{{ route('suppliers.create') }}" class="bg-rose-600 hover:bg-rose-700 text-white font-semibold px-4 py-2 rounded-2xl shadow-sm text-sm transition">
                + Tambah Supplier
            </a>
        </div>
    </x-slot>

    <div class="py-6 bg-pink-50/50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-3xl border border-rose-100 p-6">
                
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-rose-100 text-rose-800 text-xs uppercase tracking-wider bg-rose-50/50">
                            <th class="py-3 px-4">Nama Pemasok</th>
                            <th class="py-3 px-4">Kontak / Telepon</th>
                            <th class="py-3 px-4">Alamat</th>
                            <th class="py-3 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-rose-50 text-sm text-gray-700">
                        @forelse($suppliers as $supplier)
                            <tr class="hover:bg-pink-50/30 transition">
                                <td class="py-4 px-4 font-semibold text-rose-950">{{ $supplier->name }}</td>
                                <td class="py-4 px-4 text-gray-600 font-medium">{{ $supplier->phone ?? '-' }}</td>
                                <td class="py-4 px-4 text-gray-500">{{ $supplier->address ?? '-' }}</td>
                                <td class="py-4 px-4 text-center space-x-2">
                                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="text-amber-700 hover:text-amber-900 font-semibold text-xs bg-amber-50 px-3 py-1.5 rounded-xl border border-amber-200">Edit</a>
                                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus supplier ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-700 hover:text-rose-900 font-semibold text-xs bg-rose-50 px-3 py-1.5 rounded-xl border border-rose-200">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-6 text-center text-gray-400">Belum ada data supplier.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>