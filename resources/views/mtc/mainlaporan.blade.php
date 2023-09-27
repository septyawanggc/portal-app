@extends('mtc.main')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
<section class="overflow-x:auto;">

    <div class="container mx-auto grid grid-cols-3 gap-5">

        <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 item-center">
            <a href="#">
                <img class="rounded-sm flex-wrap justify-center" src="/image/document.svg" style="width: 150px; height:150px; align-items: center;" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Laporan Kerusakan</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Adalah ..</p>
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
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Total ..</p>
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
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Adalah ..</p>
                </div>
            </x-bladewind.card>
    
    </div>
<br>
<div class="container mx-auto gap-5 grid">
    <x-bladewind.card>
    <h2 class="text-4xl font-extrabold dark:text-white">Data Laporan Kerusakan <a href="/laporan/create"><button type="button" class="float-right focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah Data</button></a></h2>
    
    <br>               
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
        <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-blue-600 border-b border-blue-400">
                <th scope="row" class="px-6 py-4 font-medium bg-blue-500 text-blue-50 whitespace-nowrap dark:text-blue-100">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    <a href="#" class="font-medium text-white hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-blue-600 border-b border-blue-400">
                <th scope="row" class="px-6 py-4 font-medium bg-blue-500 text-blue-50 whitespace-nowrap dark:text-blue-100">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    <a href="#" class="font-medium text-white hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-blue-600 border-b border-blue-400">
                <th scope="row" class="px-6 py-4 font-medium bg-blue-500 text-blue-50 whitespace-nowrap dark:text-blue-100">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    <a href="#" class="font-medium text-white hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-blue-600 border-b border-blue-400">
                <th scope="row" class="px-6 py-4 font-medium bg-blue-500 text-blue-50 whitespace-nowrap dark:text-blue-100">
                    Google Pixel Phone
                </th>
                <td class="px-6 py-4">
                    Gray
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    Phone
                </td>
                <td class="px-6 py-4">
                    $799
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    <a href="#" class="font-medium text-white hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-blue-600 border-blue-40">
                <th scope="row" class="px-6 py-4 font-medium bg-blue-500 text-blue-50 whitespace-nowrap dark:text-blue-100">
                    Apple Watch 5
                </th>
                <td class="px-6 py-4">
                    Red
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    Wearables
                </td>
                <td class="px-6 py-4">
                    $999
                </td>
                <td class="px-6 py-4 bg-blue-500">
                    <a href="#" class="font-medium text-white hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>

    </x-bladewind.card>
</div>

<br>
<div class="relative bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-2 mx-auto font-medium">
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group"><a href="/maintenance">
            <img src="/image/repair.svg" style="align-items: center; height:30px; width:30px;"></a>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Laporan Kerusakan</span>
        </button>
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group"><a href="#">
            <img src="/image/build-fix.svg" style="align-items: center; height:30px; width:30px;"></a>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Work Order</span>
        </button>
    </div>
</div>


</section>
@endif
@endsection
@section('footer')
@endsection