@extends('navigation')
@section('header')
@endsection
@section('main')
@if ($user->level=="Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="SCM")
<div class="container mx-auto grid grid-cols-1 gap-2">
    <x-bladewind.card>
        <h1 class="text-4xl font-extrabold dark:text-white">FORM INPUT MATERIAL<small class="ms-2 font-semibold text-blue-500 dark:text-blue-400">ASB</small></h1>
        <br>
        <form action="{{ route('scm.store') }}" method="post" >
            @csrf
            <div class="flex grid grid-cols-2 gap-5">
                <div>
                    <label for="kodebarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Barang</label>
                    <input type="text" id="kodebarang" name="kodebarang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xxx-001" required>
                    <p class="mt-2 text-sm text-blue-600 dark:text-blue-500"><span class="font-medium">Masukan</span> Kode Barang</p>
                </div>
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sparepart</label>
                    <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tisu" required>
                    <p class="mt-2 text-sm text-blue-600 dark:text-blue-500"><span class="font-medium">Masukan</span> Nama Barang</p>
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-2 gap-5">
                <div>
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type Barang</label>
                    <input type="text" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="100 Ampere 3 Phase">
                    <p class="mt-2 text-sm text-blue-600 dark:text-blue-500"><span class="font-medium">Masukan</span> Type Barang</p>
                </div>
                <div>
                    <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah </label>
                    <input type="text" id="jumlah" name="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10">
                    <p class="mt-2 text-sm text-blue-600 dark:text-blue-500"><span class="font-medium">Masukan</span> Jumlah Barang</p>
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-2 gap-5">
                <div>
                    <label for="satuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan Barang</label>
                    <input type="text" id="satuan" name="satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pack / Pcs">
                    <p class="mt-2 text-sm text-blue-600 dark:text-blue-500"><span class="font-medium">Masukan</span> Satuan Barang</p>
                </div>
                <div>
                    <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section </label>
                    <input type="text" id="section" name="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Elektrikal">
                    <p class="mt-2 text-sm text-blue-600 dark:text-blue-500"><span class="font-medium">Section</span> Barang</p>
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-1 gap-5">
                <div>
                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Barang</label>
                    <textarea id="keterangan" name="keterangan" rows="10" class="block p-3.5 w-full text-m text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan keterangan disini"></textarea>
                </div>
            </div>
            <br>
            <button type="submit" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-m px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                Tambah Barang
            </button>
            <a href="/scm"><button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-m px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                Kembali
            </button></a>
        </form>
    </x-bladewind.card>
</div>
@endif
@endsection
@section('footer')
@endsection