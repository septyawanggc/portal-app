@extends('navigation')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
@include('sweetalert::alert')

<section>
<div class="block max-w-auto p-6 bg-white border border-gray-200 rounded-lg">
    <div class="border-b border-gray-200 dark:border-gray-700 flex justify-center">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="me-2">
                <a href="/instrumen" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <ion-icon name="file-tray-stacked-outline" class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true"></ion-icon>Main Page
                </a>
            </li>
            <li class="me-2">
                <a href="/formph" class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                    <ion-icon name="speedometer-outline" class="w-4 h-4 me-2 text-blue-600 dark:text-blue-500" aria-hidden="true"></ion-icon>Form Kalibrasi pH
                </a>
            </li>
            <li class="me-2">
                <a href="/turbid" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <ion-icon name="speedometer-outline" class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true"></ion-icon>Form Kalibrasi Turbid
                </a>
            </li>
            <li class="me-2">
                <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <ion-icon name="checkbox-outline" class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true"></ion-icon>Form Mingguan Gas Klorin
                </a>
            </li>
            <li class="me-2">
                <a href="#" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <ion-icon name="file-tray-full-outline" class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true"></ion-icon> Form Pengecekan Instrument Bulanan
                </a>
            </li>
        </ul>
    </div>
<br>
<div class="grid grid-cols-2 gap-2">
    <x-bladewind.card class="hover:bg-sky-600 item-center rounded-md border-solid border-2 border-sky-700">
            <img class="rounded-sm flex-wrap justify-center" src="/image/chemical.svg" style="width: 150px; height:150px; align-items: center;" />
            <div class="justify-content-around">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Input Form Kalibrasi</h5>
                <br>
                <a href="/formph/create"><button type="button" class="text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-6 py-3 text-center inline-flex items-center dark:focus:ring-gray-500 me-2 mb-2">
                Input
                </button></a>
            </div>
    </x-bladewind.card>
    
    <x-bladewind.card class="hover:bg-sky-600 item-center rounded-md border-solid border-2 border-sky-700">
        <img class="rounded-sm flex-wrap justify-center" src="/image/chemical.svg" style="width: 150px; height:150px; align-items: center;" />
        <div class="justify-content-around">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Input Permit Barang</h5>
            <br>
            <a href="/inputpermit"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Data</button></a>
            
        </div>
    </x-bladewind.card>
</div>
</div>
<br>
<div class="grid mb-4 border-solid border-2 border-lime-700 rounded-lg shadow-sm dark:border-sky-700 md:mb-10">
    <x-bladewind.card  has_shadow="true">
        <h1 class="flex items-center text-4xl font-extrabold dark:text-white">List Hasil Kalibrasi <span class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">pH</span></h1>
        <br>
        <div class="shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-auto" id="formph">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Id Alat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Alat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hasil
                        </th>
                        <th scope="col" class="px-6 py-3">
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-black-50 whitespace-nowrap dark:text-black-100">
                            {{ $data->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{$data->Tanggal}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->Kode}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->Equipment}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->Hasil1}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route ('formph.show', $data->id)}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-3.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-popover-target="show"><i class="fa-solid fa-file-circle-question"></i></button></a>
                            <a href="{{route ('formph.edit', $data->id)}}"><button class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-3.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900" data-popover-target="edit"><i class="fa-solid fa-file-circle-check"></i></button></a>
                            <form id="hapus" action="{{route ('formph.destroy', $data->id)}}" method="POST" onsubmit="confirmDelete('hapus')" data-popover-target="delete">
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
    new DataTable('#formph')
</script>
@endsection