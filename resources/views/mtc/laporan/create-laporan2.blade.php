@extends('mtc.main')
@section('header')
<script type="text/javascript" src="{{ asset('js/jquery-min-1.12.4.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ttd-jquery-ui-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.signature.js') }}"></script>
<link href="{{ asset('css/ttd.css') }}" rel="stylesheet" /> 
@endsection
@section('main')
<x-bladewind.card>
    
<ol class="flex items-center justify-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
    <li class="flex items-center text-blue-600 dark:text-blue-500">
        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
          1
        </span>
        Isi Permasalahan <span class="hidden sm:inline-flex sm:ml-2">Yang Akan Dilaporkan</span>
        <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center text-blue-600 dark:text-blue-500">
        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            2
        </span>
        Laporan Di Review Oleh <span class="hidden sm:inline-flex sm:ml-2">SPV Produksi</span>
        <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            3
        </span>
        Laporan Di Review Oleh <span class="hidden sm:inline-flex sm:ml-2">Manager</span>
        <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            4
        </span>
        Laporan Di Proses Oleh <span class="hidden sm:inline-flex sm:ml-2">Maintenance</span>
        <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            5
        </span>
        Laporan Selesai
    </li>
</ol>

</x-bladewind.card>
<br>

<section class="bg-white dark:bg-gray-800">
    <x-bladewind.card title="">
    <div class="py-8 px-4 mx-auto lg:py-16">
        <div class="columns-3">
            <img src="/image/mechanic.svg" style="width: 65px; height:75px; align-items:center;">
            <h1 class="mb-4 justify-center text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-3xl dark:text-white">Formulir Laporan <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500" style="align-items: center">Kerusakan</mark></h1>
            <h6 class="float-right text-lg font-bold dark:text-white">ASB/MAIN/FM-032 Rev.00 <p class="text-lg font-normal text-gray-500 lg:text-sm dark:text-gray-400">Tgl. Berlaku : 15 September 2021 </p></h6>
          </div>
        <br>
        <form action="{{ route('proses1.update', $data->id) }}" method="post" >
            @method('PATCH')
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <div class="columns-3">
                        <div class="w-full">
                            <label for="nolk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. LK</label>
                            <input type="text" name="no-lk" id="no-lk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->nolk }}" readonly>
                        </div>
                        <div class="w-full">
                            <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $data->nama }}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="alat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identifikasi Alat</label>
                        <input type="text" name="alat" id="alat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->alat}}" readonly>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="columns-3">
                    <div class="w-full">
                    <label for="Hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari/Tanggal</label>
                    <input type="text" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->tanggal}}" readonly>
                    </div>
                    <div class="w-full">
                    <label for="Jam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam</label>
                    <input type="text" name="day" id="day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->day}}" readonly>
                    </div>
                    <div class="w-full">
                    <label for="PID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.PID</label>
                    <input type="text" name="pid" id="pid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->pid}}" readonly>
                    </div>
                </div>
                <br>
                <div class="columns-3">
                    <div class="w-full">
                    <label for="bangunan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Area Bangunan</label>
                    <textarea id="bangunan" name="bangunan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>{{$data->bangunan}}</textarea>
                    </div>
                    <div class="w-full">
                    <label for="analisa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Analisa Kerusakan</label>
                    <textarea id="analisa" name="analisa" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>{{$data->analisa}}</textarea>
                    </div>
                    <div class="w-full">
                    <label for="kerusakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan Kerusakan/Kelainan</label>
                    <textarea id="kerusakan" name="kerusakan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>{{$data->kerusakan}}</textarea>
                    </div>
                </div>
                <br>
                <div class="w-full">
                    <label for="action" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tindakan Yang Diambil Oleh :</label>
                    <textarea id="action" name="action" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly>{{$data->action}}</textarea>
                </div>
                <br>
                <div class="w-full">
                        <label for="operator" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TTD Operator</label>
                        <img class="h-auto max-w-lg rounded-lg" src="{{ asset($data->operator) }}" alt="ttd operator" style="width: auto; height: 150px;">
                </div>
                <br>
                    <div class="w-full">
                    <label for="diperiksa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Kerusakan (Diisi Oleh SPV)</label>                      
                        <div class="flex items-center">
                            <input id="statuslk" name="statuslk" type="checkbox" value="Lk ini berhubungan dengan proses produksi dan ada kerusakan/kelainan setelah pengecekan dilapangan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="statuslk" class="ml-1 text-sm font-sm text-gray-900 dark:text-gray-300">Lk ini berhubungan dengan proses produksi dan ada kerusakan/kelainan</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="statuslk" name="statuslk" type="checkbox" value="Lk tidak berhubungan dengan proses produksi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="statuslk" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Lk tidak berhubungan dengan proses produksi</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="statuslk" name="statuslk" type="checkbox" value="LK Tidak ada kelainan/kerusakan setelah pengecekan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="statuslk" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">LK Tidak ada kelainan/kerusakan setelah pengecekan</label>
                        </div>
                    </div>
                    <br>
                    <div class="w-full">
                        <label for="spvprod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TTD SPV Produksi</label>
                        <div id="sigspv" ></div>
                            <br/>
                            <button id="clearspv" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded items-center">Clear Signature</button>
                            <textarea id="signature64_spv" name="signedspv" style="display: none"></textarea>
                        </div>
                    </div>
                
            </div>
            <button type="submit" class="px-6 top-10 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center">
                Update Laporan
            </button>
        </form>
    </div>
    </x-bladewind.card>
  </section>
<br>
<script type="text/javascript">
    var sigspv = $('#sigspv').signature({syncField: '#signature64_spv', syncFormat: 'PNG'});
    $('#clearspv').click(function(e) {
        e.preventDefault();
        sigspv.signature('clear');
        $("#signature64_spv").val('');
    });
</script>
@endsection
@section('footer')
@endsection