@extends('mtc.main')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
@include('sweetalert::alert')
<section class="overflow-x:auto;">

    <div class="container mx-auto columns-6 grid grid-flow-col justify-normal gap-2">

        <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 item-center">
            <a href="#">
                <img class="rounded-sm flex-wrap justify-center" src="/image/document.svg" style="width: 150px; height:150px; align-items: center;" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Laporan Kerusakan</h5>
                </a>
                <h1 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-gray-900 md:text-lg lg:text-lg dark:text-white">Yang Masuk Adalah  <span class="bg-green-100 text-green-800 text-xl font-xl mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{$count}}</span></h1>
            </div>

        </x-bladewind.card>
    
        <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 item-center">
            <a href="#">
                <img class="rounded-sm flex-wrap justify-center" src="/image/completed.svg" style="width: 150px; height:150px; align-items: center;" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laporan Selesai</h5>
                </a>
                <h1 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-gray-900 md:text-lg lg:text-lg dark:text-white">Total Laporan Yang Sudah Selesai Dikerjakan  <span class="bg-green-100 text-green-800 text-xl font-xl mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{$ok}}</span></h1>
            </div>
        </x-bladewind.card>
    
            <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 item-center">
                <a href="#">
                    <img class="rounded-sm flex-wrap justify-center" src="/image/progress.svg" style="width: 150px; height:150px; align-items: center;" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laporan Kerusakan Sedang Dalam Progress</h5>
                    </a>
                    <h1 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-gray-900 md:text-lg lg:text-lg dark:text-white">Total Laporan Yang Sedang Dikerjakan  <span class="bg-green-100 text-green-800 text-xl font-xl mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{$progres}}</span></h1>
                </div>
            </x-bladewind.card>
            <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 item-center">
                <a href="#">
                    <img class="rounded-sm flex-wrap justify-center" src="/image/add.svg" style="width: 150px; height:150px; align-items: center;" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laporan Kerusakan Baru</h5>
                    </a>
                    <h1 class="mb-4 text-lg font-extrabold leading-none tracking-tight text-gray-900 md:text-lg lg:text-lg dark:text-white">Total Laporan Yang Baru Dibuat  <span class="bg-green-100 text-green-800 text-xl font-xl mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{$new}}</span></h1>
                </div>
            </x-bladewind.card>
            <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 item-center">
                <a href="#">
                    <img class="rounded-sm flex-wrap justify-center" src="/image/download.svg" style="width: 150px; height:150px; align-items: center;" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Download Laporan</h5>
                    </a>
                    <br>
                    <a href="/downloadlaporan"><button type="button" class="px-6 py-3.5 text-base font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">Download <span><i class="fa-regular fa-circle-down"></i></i></span> </button></a>
                </div>
            </x-bladewind.card>
    
    </div>
<br>
<div class="container mx-auto gap-5 grid">
    <x-bladewind.card>
    <h2 class="text-4xl font-extrabold dark:text-white">Data Laporan Kerusakan <a href="/laporan/create"><button type="button" class="float-right focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah Data</button></a></h2>
    
    <br>               
    <div class="sm:rounded-lg">
        <table id="LK" class=" text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    No.LK
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Alat
                </th>
                <th scope="col" class="px-6 py-3">
                    Kerusakan
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500 justify-content-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$data->nolk}}
                </th>
                <td class="px-6 py-4">
                    {{$data->tanggal}}
                </td>
                <td class="px-6 py-4">
                    {{$data->alat}}
                </td>
                <td class="px-6 py-4">
                    {{$data->kerusakan}}
                </td>
                <td class="px-6 py-4">
                    {{$data->nama}}
                </td>
                <td class="px-6 py-4 justify-center">
                    {{$data->status}}
                </td>
                <td class="px-6 py-4 text-right">
                    @if ($user->level == "SPV-Produksi" or $user->level == "Admin" )
                    <a href="{{route ('proses1.show', $data->id)}}"><button class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg px-6 py-3.5 text-base text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2" data-popover-target="SPVProduksi"><i class="fa-solid fa-person-circle-check"></i></button></a>
                    @endif
                    @if ($user->level == "PlanManager" or $user->level == "Admin" or $user->level == "Dirut")
                    <a href="{{route ('proses2.show', $data->id)}}"><button class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg px-6 py-3.5 text-base text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2" data-popover-target="Manager"><i class="fa-solid fa-people-group"></i></button></a>
                    @endif
                    @if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level == "Teknisi")
                    <a href="{{route ('proses3.show', $data->id)}}"><button class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg px-6 py-3.5 text-base text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2" data-popover-target="Teknisi"><i class="fa-solid fa-user-gear"></i></button></a>
                    <a href="{{route ('complete.show', $data->id)}}"><button class="text-white bg-[#050708] hover:bg-[#050708]/80 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg px-6 py-3.5 text-base text-center inline-flex items-center dark:hover:bg-[#050708]/40 dark:focus:ring-gray-600 me-2 mb-2" data-popover-target="Complete"><i class="fa-solid fa-check"></i></button></a>
                    @endif
                    <a href="{{route ('laporan.show', $data->id)}}"><button class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg px-6 py-3.5 text-base text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2" data-popover-target="show"><i class="fa-regular fa-note-sticky"></i></button></a>
                    <form id="hapus" action="{{ route('laporan.destroy', $data->id) }}" method="POST" onsubmit="confirmDelete('hapus')">
                          @csrf
                          @method('DELETE')
                          <button class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full px-6 py-3.5 text-base text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" data-popover-target="Delete"><i class="fa-solid fa-trash"></i></button>
                    </form>
                  </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </x-bladewind.card>
</div>
</section>
<div data-popover id="SPVProduksi" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Tombol Approval SPV Produksi</h3>
    </div>
    <div data-popper-arrow></div>
</div>
<div data-popover id="Manager" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Tombol Approval Plan Manager</h3>
    </div>
    <div data-popper-arrow></div>
</div>
<div data-popover id="Teknisi" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Tombol Proses Laporan</h3>
    </div>
    <div data-popper-arrow></div>
</div>
<div data-popover id="Complete" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Selesaikan Laporan</h3>
    </div>
    <div data-popper-arrow></div>
</div>
<div data-popover id="Delete" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Tombol Hapus</h3>
    </div>
    <div data-popper-arrow></div>
</div>
<div data-popover id="show" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">Lihat Laporan</h3>
    </div>
    <div data-popper-arrow></div>
</div>
@endif
@endsection
@section('footer')
<script>
    new DataTable ('#LK');
</script>
@endsection