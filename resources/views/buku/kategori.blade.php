@extends('layouts.tampilan')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class ="p-5 text-gray-900">
                <a href="{{ route('kategori.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black border font-bold py-2 px-4 rounded">
                            + Tambah Data Buku
                    <table class="min-w-full border rounded-md overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-2 px-4">Nama Kategori</th>
</tr>
</thead>
<tbody>
@foreach($kategori as $k)
<tr class="hover:bg-gray-50">
    <td class="py-2 px-4">{{ $k->nama_kategori }}</td>
</tr>
@endforeach
</tbody>
</table>
                </div>
            </div>
        </div>
    </div>
@endsection
