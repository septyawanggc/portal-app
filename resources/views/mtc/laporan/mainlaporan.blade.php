@extends('mtc.main')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
@include('sweetalert::alert')
<section class="overflow-x:auto;">

    <div class="container mx-auto grid grid-cols-4 gap-5">

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
    
    </div>
<br>
<div class="container mx-auto gap-5 grid">
    <x-bladewind.card>
    <h2 class="text-4xl font-extrabold dark:text-white">Data Laporan Kerusakan <a href="/laporan/create"><button type="button" class="float-right focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah Data</button></a></h2>
    
    <br>               
    <div class="relative sm:rounded-lg">
        <table id="LK" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                <th scope="col" class="px-6 py-3 bg-blue-500">
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
                <td class="px-6 py-4">
                    {{$data->status}}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{route ('proses1.show', $data->id)}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-small rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proses SPV Produksi</button></a>
                    <a href="{{route ('laporan.show', $data->id)}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-small rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proses Manager / Dirut</button></a>
                    <a href="{{route ('laporan.show', $data->id)}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-small rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proses Maintenance</button></a>
                    <a href="{{route ('laporan.edit', $data->id)}}"><button class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-small rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button></a>
                    <form id="hapus" action="{{ route('laporan.destroy', $data->id) }}" method="POST" onsubmit="confirmDelete('hapus')">
                          @csrf
                          @method('DELETE')
                          <button class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                    </form>
                  </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>

    </x-bladewind.card>
</div>

<br>
<div class="relative bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-2 mx-auto font-medium">
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group"><a href="#">
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
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#LK').DataTable(
      );
    
  });
</script>
@endif
@endsection
@section('footer')
@endsection