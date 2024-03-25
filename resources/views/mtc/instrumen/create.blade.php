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
            <form action="{{ route('instrumen.store') }}" method="post" >
                @csrf
                <div class="flex grid grid-cols-2 gap-2">
                    <div>
                        <label for="kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Equipment</label>
                        <input type="text" id="kode" name="kode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="kode" required>
                    </div>
                    <div>
                        <label for="equipment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Equipment</label>
                        <input type="text" id="equipment" name="equipment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
                <br>
                <div class="flex grid grid-cols-2 gap-6">
                    <div>
                        <label for="kodeOB" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Open Bravo</label>
                        <input type="text" id="kodeOB" name="kodeOB" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokas Equipment</label>
                        <input type="text" id="lokasi" name="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
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
@endsection