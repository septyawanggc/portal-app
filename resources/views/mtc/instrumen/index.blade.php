@extends('navigation')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
@include('sweetalert::alert')
<section class="block max-w-auto p-6 bg-white border border-gray-200 rounded-lg">
    <div class="border-b border-gray-200 dark:border-gray-700 flex justify-center">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="me-2">
                <a href="/instrumen" class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                    <ion-icon name="file-tray-stacked-outline" class="w-4 h-4 me-2 text-blue-600 dark:text-blue-500" aria-hidden="true"></ion-icon>Main Page
                </a>
            </li>
            <li class="me-2">
                <a href="/formph" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <ion-icon name="speedometer-outline" class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true"></ion-icon>Form Kalibrasi pH
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
    <h1 class="flex items-center text-4xl font-extrabold dark:text-white">List Equipment <span class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-3.5 py-1.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">ASB</span></h1>
    <br>
        <x-bladewind.card  has_shadow="true" class="border-solid border-2 border-cyan-600 rounded-lg">
            <a href="/instrumen/create"><button type="button" class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-m px-5 py-2.5 text-center inline-flex items-right dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                Tambah Alat
            </button></a>
            <div class="shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-auto" id="listalat">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kode Equipment
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Equipment
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kode Open Bravo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                #
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
                                {{$data->kode}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->equipment}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->kodeOB}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->lokasi}}
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
    new DataTable('#listalat')
</script>
@endsection