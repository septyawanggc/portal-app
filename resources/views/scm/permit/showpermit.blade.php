@extends('navigation')
@section('header')
<script type="text/javascript" src="{{ asset('js/jquery-min-1.12.4.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ttd-jquery-ui-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.signature.js') }}"></script>
<link href="{{ asset('css/ttd.css') }}" rel="stylesheet" /> 
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi" or $user->level == "SPV-Produksi" or $user->level == "SCM" or $user->level == "HSE" or $user->level == "Laborat")
<div class="container mx-auto grid grid-cols-1 gap-4">
    <x-bladewind.card class="items-center" title="FORM PERMIT ASB">
        <h1 class="text-3xl font-extrabold dark:text-white">FORM INPUT PERMINTAAN MATERIAL<small class="ms-2 font-semibold text-blue-500 dark:text-blue-400">ASB</small></h1>
        <br>
            <div class="flex grid grid-cols-3 gap-5">
                <div>
                    <label for="permit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No-Permit</label>
                    <input type="text" name="nopermit" id="nopermit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->nopermit}}" readonly>
                </div>
                <div>
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                    <input type="text" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->tanggal}}" required>
                </div>
                <div>
                    <label for="divisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dari Departement : </label>
                    <input type="text" id="divisi" name="divisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->divisi}}" readonly>
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-3 gap-5">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sparepart</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->nama}}" readonly>

                </div>
                <div>
                    <label for="kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Barang </label>
                    <input type="text" id="kode" name="kode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->kode}}" readonly>
                    
                </div>
                <div>
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type/Ukuran </label>
                    <input type="text" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->type}}" readonly>
                    
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-3 gap-5">
                <div>
                    <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Barang</label>
                    <input type="text" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->jumlah}}" readonly>
                    
                </div>
                <div>
                    <label for="satuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                    <input type="text" name="satuan" id="satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->satuan}}" readonly>
                    
                </div>
                <div>
                    <label for="keperluan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keperluan </label>
                    <input type="text" id="keperluan" name="keperluan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->keperluan}}" readonly>
                    
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-1 gap-5">
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea id="keterangan" name="keterangan" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>{{$data->keperluan}}</textarea>
            </div>
            <br>
            <div class="flex grid grid-cols-2 gap-5">
                <div>
                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diajukan</label>
                        <img class="h-auto max-w-lg rounded-lg" src="{{ asset($data->diajukan) }}" alt="ttd Inputer" style="width: auto; height: 150px;">
                        <br>
                        <p class="justifiy-start mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400" >{{$data->inputuser}}</p>
                </div>
                <div>
                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diajukan</label>
                        <img class="h-auto max-w-lg rounded-lg" src="{{ asset($data->diperiksa) }}" alt="ttd Pemeriksa" style="width: auto; height: 150px;">
                        <br>
                        <p class="justifiy-start mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400" >{{$data->inputuser}}</p>
                </div>
            </div>
            <br>
    </x-bladewind.card>
</div>
@endif
@endsection
@section('footer')

@endsection