@extends('navigation')
@section('header')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('main')
    @if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
    @include('sweetalert::alert')
    <div class="block max-w-auto p-6">
        <x-bladewind.card class="border-2 border-solid border-cyan-300 rounded-lg">
            <h1 class="text-4xl font-extrabold dark:text-white">Form Kalibrasi pH<small class="ms-2 font-semibold text-blue-500 dark:text-blue-400">ASB</small></h1>
            <br>
            <form action="{{ route('formph.store') }}" method="post" >
                @csrf
                <div class="flex grid grid-cols-2 gap-2">
                    <div>
                        <label for="Equipment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Equipment</label>
                        <select id="Equipment" name="Equipment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </select>
                    </div>
                    <div>
                        <label for="Tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="datetime-local" id="Tanggal" name="Tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <br>
                <div class="flex grid grid-cols-3 gap-4">
                    <div>
                        <label for="Range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Range Kalibrasi Ke-1 </label>
                        <select id="Range1" name="Range1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Range</option>
                            <option value="0-9">0-9</option>
                            <option value="0-12">0-12</option>
                            <option value="0-7">0-7</option>
                          </select>
                    </div>
                    <div>
                        <label for="Standar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Standar Yang Digunakan Ke-1</label>
                        <select id="Standar1" name="Standar1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Standar</option>
                            <option value="4">4</option>
                            <option value="7">7</option>
                          </select>
                    </div>
                    <div>
                        <label for="Hasil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Pengukuran Standar Ke-1</label>
                        <input type="text" id="Hasil1" name="Hasil1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="6.99">
                    </div>
                </div>
                <br>
                <div class="flex grid grid-cols-3 gap-4">
                    <div>
                        <label for="Range2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Range Kalibrasi Ke-2 </label>
                        <select id="Range2" name="Range2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Range</option>
                            <option value="0-9">0-9</option>
                            <option value="0-12">0-12</option>
                            <option value="0-7">0-7</option>
                          </select>
                    </div>
                    <div>
                        <label for="Standar2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Standar Yang Digunakan Ke-2</label>
                        <select id="Standar2" name="Standar2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Standar</option>
                            <option value="4">4</option>
                            <option value="7">7</option>
                          </select>
                    </div>
                    <div>
                        <label for="Hasil2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Pengukuran Standar Ke-2</label>
                        <input type="text" id="Hasil2" name="Hasil2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="4.99">
                    </div>
                </div>
                <br>
                <div class="flex grid grid-cols-1 gap-5">
                    <div>
                        <label for="Keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="Keterangan" name="Keterangan" rows="10" class="block p-3.5 w-full text-m text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan keterangan disini"></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-m px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                    Input
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>$(document).ready(function() {
    $('#Equipment').select2({
        placeholder: 'Pilih Alat',
        ajax: {
            url: "{{ route('listalat') }}",
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            id: item.equipment,
                            text: item.equipment
                        }
                    })
                };
            },
            cache: true
        }
    });
});
</script>
@endsection