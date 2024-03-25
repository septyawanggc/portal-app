@extends('mtc.main')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
@include('sweetalert::alert')
<section class="overflow-x:auto; container mx-auto gap-5">
    <x-bladewind.card title=" Download Laporan">
        <h2 class="text-4xl font-extrabold dark:text-white">Data Laporan Kerusakan Yang Sudah Selesai </h2>
    <br>               
    <div class="sm:rounded-lg">
        <table id="download" class=" text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    #
                </th>
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
                <td class="px-6 py-4">
                    {{$loop->iteration}}
                </td>
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
                    <a href="{{route ('savelaporan', $data->id)}}" data-popover-target="savelaporan"><button class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg px-6 py-3.5 text-base text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2"><i class="fa-solid fa-file-arrow-down"></i></button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </x-bladewind.card>
    <div data-popover id="savelaporan" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
            <h3 class="font-semibold text-gray-900 dark:text-white">Download Data</h3>
        </div>
        <div data-popper-arrow></div>
    </div>
</section>
@endif
@endsection
@section('footer')
<script>
    new DataTable ('#download');
</script>
@endsection