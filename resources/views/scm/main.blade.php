@extends('navigation')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi" or $user->level == "SPV-Produksi" or $user->level == "SCM" or $user->level == "HSE" or $user->level == "Laborat")
@include('sweetalert::alert')
<section>
<div class="container mx-auto grid grid-cols-3 gap-2">
    <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 item-center">
            <img class="rounded-sm flex-wrap justify-center" src="/image/document.svg" style="width: 150px; height:150px; align-items: center;" />
            <div class="justify-content-around">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tambah Barang</h5>
                <br>
                <a href="/scm/create"><button type="button" class="text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-6 py-3 text-center inline-flex items-center dark:focus:ring-gray-500 me-2 mb-2">
                Tambah Barang
                </button></a>
            </div>
    </x-bladewind.card>
    
    <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 item-center">
        <img class="rounded-sm flex-wrap justify-center" src="/image/addfile.svg" style="width: 150px; height:150px; align-items: center;" />
        <div class="justify-content-around">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Input Permit Barang</h5>
            <br>
            <a href="/inputpermit"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Data</button></a>
            
        </div>
    </x-bladewind.card>
    
    <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 items-center">
                <a href="#">
                    <img class="rounded-sm flex-wrap justify-center" src="/image/progress.svg" style="width: 150px; height:150px; align-items: center;" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laporan Kerusakan Sedang Dalam Progress</h5>
                    </a>
                    <h1 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-gray-900 md:text-lg lg:text-lg dark:text-white">Total Laporan Yang Sedang Dikerjakan  <span class="bg-green-100 text-green-800 text-xl font-xl mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300"></span></h1>
                </div>
    </x-bladewind.card>
</div>
<br>
<div class="grid mb-4 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-10">
    <x-bladewind.card  has_shadow="true">
        <h1 class="flex items-center text-4xl font-extrabold dark:text-white">Daftar Barang<span class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">ASB</span></h1>
        <br>
        <div class="shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-auto" id="barangTable">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type / PN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Satuan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-black-50 whitespace-nowrap dark:text-black-100">
                            {{$loop->iteration}}
                        </th>
                        <td class="px-6 py-4">
                            {{$data->kodebarang}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->nama}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->type}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->jumlah}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->satuan}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route ('scm.show', $data->id)}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-3.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-popover-target="show"><i class="fa-solid fa-file-circle-question"></i></button></a>
                            <a href="{{route ('scm.edit', $data->id)}}"><button class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-3.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900" data-popover-target="edit"><i class="fa-solid fa-file-circle-check"></i></button></a>
                            <form id="hapus" action="{{ route('scm.destroy', $data->id) }}" method="POST" onsubmit="confirmDelete('hapus')" data-popover-target="delete">
                                @csrf
                                 @method('DELETE')
                                <button class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-3.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fa-solid fa-file-circle-minus"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <div data-popover id="show" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Lihat Data</h3>
                        </div>
                        <div class="px-3 py-2">
                            <p>Lihat Detail Data</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <div data-popover id="edit" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Edit Data</h3>
                        </div>
                        <div class="px-3 py-2">
                            <p>Edit Data Ini</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <div data-popover id="delete" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Hapus Data</h3>
                        </div>
                        <div class="px-3 py-2">
                            <p>Yakin Di Hapus?</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </tbody>
            </table>
        </div>
    </x-bladewind.card>
</div>
</section>
@endif
@endsection
@section('footer')
<script>
    new DataTable('#barangTable')
</script>
@endsection