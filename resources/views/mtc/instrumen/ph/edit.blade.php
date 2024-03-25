@extends('navigation')
@section('header')
@endsection
@section('main')
    @if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
    @include('sweetalert::alert')
    <div class="block max-w-auto p-6">
        <x-bladewind.card class="border-2 border-solid border-cyan-300 rounded-lg">
            <h1 class="text-4xl font-extrabold dark:text-white">Form Kalibrasi pH<small class="ms-2 font-semibold text-blue-500 dark:text-blue-400">ASB</small></h1>
            <br>
            <form action="{{ route('formph.update', $data->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="flex grid grid-cols-3 gap-5">
                    <div>
                        <label for="Kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Equipment</label>
                        <input type="text" id="Kode" name="Kode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->Kode}}">
                    </div>
                    <div>
                        <label for="Equipment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Equipment</label>
                        <input type="text" id="Equipment" name="Equipment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->Equipment}}">
                    </div>
                    <div>
                        <label for="Tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="text" id="Tanggal" name="Tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->Tanggal}}" readonly>
                    </div>
                </div>
                <br>
                <div class="flex grid grid-cols-3 gap-4">
                    <div>
                        <label for="Range1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Range Kalibrasi Ke-1 </label>
                        <input type="text" id="Range1" name="Range1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->Range1}}">
                        
                    </div>
                    <div>
                        <label for="Standar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Standar Yang Digunakan Ke-1</label>
                        <input type="text" id="Standar1" name="Standar1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->Standar1}}">
                    </div>
                    <div>
                        <label for="Hasil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Pengukuran Standar Ke-1</label>
                        <input type="text" id="Hasil1" name="Hasil1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="6.99" value="{{$data->Hasil1}}">
                    </div>
                </div>
                <br>
                <div class="flex grid grid-cols-3 gap-4">
                    <div>
                        <label for="Range2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Range Kalibrasi Ke-2 </label>
                        <input type="text" id="Range2" name="Range2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->Range2}}">
                    </div>
                    <div>
                        <label for="Standar2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Standar Yang Digunakan Ke-2</label>
                        <input type="text" id="Standar2" name="Standar2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->Standar2}}">
                    </div>
                    <div>
                        <label for="Hasil2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Pengukuran Standar Ke-2</label>
                        <input type="text" id="Hasil2" name="Hasil2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="4.99" value="{{$data->Hasil2}}">
                    </div>
                </div>
                <br>
                <div class="flex grid grid-cols-1 gap-5">
                    <div>
                        <label for="Keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="Keterangan" name="Keterangan" rows="10" class="block p-3.5 w-full text-m text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$data->Keterangan}}</textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-m px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                    Sumbit
                </button>
                <a href="/formph"><button type="button" class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-m px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                    Kembali
                </button></a>
            </form>
        </x-bladewind.card>
    </div>
    
    @endif
@endsection
@section('footer')
@endsection