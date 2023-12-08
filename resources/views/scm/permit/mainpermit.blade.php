@extends('navigation')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi" or $user->level == "SPV-Produksi" or $user->level == "SCM" or $user->level == "HSE" or $user->level == "Laborat")
@include('sweetalert::alert')
<section class="overflow-x:auto; container mx-auto gap-5">
<div class="grid grid-cols-2 gap-5">
    <x-bladewind.card class="item-center">
        <img class="rounded-sm flex-wrap justify-center" src="/image/alert.svg" style="width: 150px; height:150px; align-items: center;" />
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Permintaan Barang Baru</h5>
            <h1 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-gray-900 md:text-lg lg:text-lg dark:text-white">Jumlah Baru Yang Masuk <span class="bg-green-100 text-green-800 text-xl font-xl mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{$new}}</span></h1>
        </div>
    </x-bladewind.card>
    
    <x-bladewind.card class="items-center">
                <img class="rounded-sm flex-wrap justify-center" src="/image/completed.svg" style="width: 150px; height:150px; align-items: center;" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Permintaan Approved</h5>
                    <h1 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-gray-900 md:text-lg lg:text-lg dark:text-white">Laporan Yang Telah di Approv <span class="bg-green-100 text-green-800 text-xl font-xl mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{$aprove}}</span></h1>
                </div>
    </x-bladewind.card>
</div>
<br>
<div class="grid mb-6 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-10">
    <x-bladewind.card  has_shadow="true">
        <div class="grid grid-cols-3">
            <h1 class="col-span-2 flex items-center text-4xl font-extrabold dark:text-white">List Permintaan Barang<span class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">ASB</span></h1>
            <a href="/inputpermit/create" class="col-end-7 col-span-2"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                </svg>
                Buat Permit
            </button></a>
        </div>
        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 divide-amber-900 table-auto" id="barangTable">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No - Permit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Divisi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Diajukan
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
                            {{$data->nopermit}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->divisi}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->nama}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->status}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->inputuser}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route ('inputpermit.show', $data->id)}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-3.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-popover-target="show"><i class="fa-solid fa-file-circle-question"></i></button></a>
                            <a href="{{route ('inputpermit.edit', $data->id)}}"><button class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-3.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900" data-popover-target="edit"><i class="fa-solid fa-file-circle-check"></i></button></a>
                            <form id="hapus" action="{{ route('inputpermit.destroy', $data->id) }}" method="POST" onsubmit="confirmDelete('hapus')" data-popover-target="delete">
                                @csrf
                                 @method('DELETE')
                                <button class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-3.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fa-solid fa-file-circle-minus"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-bladewind.card>
</div>
<div data-popover id="show" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Lihat Input</h3>
    </div>
    <div class="px-3 py-2">
        <p>Lihat Detail Inputan</p>
    </div>
    <div data-popper-arrow></div>
</div>
<div data-popover id="edit" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Proses Input</h3>
    </div>
    <div class="px-3 py-2">
        <p>Proses Hasil Inputan</p>
    </div>
    <div data-popper-arrow></div>
</div>
<div data-popover id="delete" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Hapus Input</h3>
    </div>
    <div class="px-3 py-2">
        <p>Yakin Di Hapus?</p>
    </div>
    <div data-popper-arrow></div>
</div>
</section>
@endif
@endsection
@section('footer')
<script>
    new DataTable('#barangTable')
</script>
@endsection