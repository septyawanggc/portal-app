@extends('navigation')
@section('header')
<script type="text/javascript" src="{{ asset('js/jquery-min-1.12.4.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ttd-jquery-ui-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.signature.js') }}"></script>
<link href="{{ asset('css/ttd.css') }}" rel="stylesheet" /> 
@include('sweetalert::alert')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi" or $user->level == "SPV-Produksi" or $user->level == "SCM" or $user->level == "HSE" or $user->level == "Laborat")
<div class="container mx-auto grid grid-cols-1 gap-4">
    <x-bladewind.card class="items-center" title="FORM PERMIT ASB">
        <h1 class="text-3xl font-extrabold dark:text-white">FORM INPUT PERMINTAAN MATERIAL<small class="ms-2 font-semibold text-blue-500 dark:text-blue-400">ASB</small></h1>
        <br>
        <form action="{{ route('inputpermit.update', $data->id) }}" method="post" >
            @csrf
            @method('PATCH')
            <div class="flex grid grid-cols-3 gap-5">
                <div>
                    <label for="permit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No-Permit</label>
                    <input type="text" name="nopermit" id="nopermit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->nopermit}}" readonly>
                </div>
                <div>
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                    <input type="text" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->tanggal}}" readonly>
                </div>
                <div>
                    <label for="divisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dari Departement : </label>
                    <input type="text" id="divisi" name="divisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->divisi}}">
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-3 gap-5">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sparepart</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->nama}}">

                </div>
                <div>
                    <label for="kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Barang </label>
                    <input type="text" id="kode" name="kode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->kode}}">
                    
                </div>
                <div>
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type/Ukuran </label>
                    <input type="text" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->type}}">
                    
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-3 gap-5">
                <div>
                    <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Barang</label>
                    <input type="text" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->jumlah}} {{$data->satuan}}">
                    
                </div>
                <div>
                    <label for="satuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Satuan</label>
                    <select id="satuan" name="satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Pilih Satuan </option>
                        <option value="PCS">PCS</option>
                        <option value="Pack">Pack</option>
                        <option value="Batang">Batang</option>
                        <option value="Meter">Meter</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Liter">Liter</option>
                        <option value="KG">KG</option>
                        <option value="Kaleng">Kaleng</option>
                        <option value="Pail">Pail</option>
                    </select>
                    
                </div>
                <div>
                    <label for="keperluan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keperluan </label>
                    <input type="text" id="keperluan" name="keperluan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->keperluan}}">
                    
                </div>
            </div>
            <br>
            <div class="flex grid grid-cols-1 gap-5">
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea id="keterangan" name="keterangan" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$data->keperluan}}</textarea>
            </div>
            <br>
            <div class="flex grid grid-cols-1">
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diajukan</label>
                <img class="h-auto max-w-lg rounded-lg" src="{{ asset($data->diajukan) }}" alt="ttd operator" style="width: auto; height: 150px;">
                <br>
                <p class="justifiy-start mb-3 text-lg text-gray-500 md:text-xl dark:text-gray-400" >{{$data->inputuser}}</p>
            </div>
            <br>
            <div class="flex grid grid-cols-10 gap-5">
                <div id="sigscm" ></div>
                    <br/>
                    <button id="clearscm" class="col-start-2 col-span-2 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded items-center">Clear Signature</button>
                    <textarea id="signature64_scm" name="signedscm" style="display: none"></textarea>
                </div>
            </div>
            <br>
            <button type="submit" class="inline-flex items-center px-6 py-3.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Update Data
            </button>
        </form>
    </x-bladewind.card>
</div>
<script type="text/javascript">
    var sigscm = $('#sigscm').signature({syncField: '#signature64_scm', syncFormat: 'PNG'});
    $('#clearscm').click(function(e) {
        e.preventDefault();
        sigscm.signature('clear');
        $("#signature64_scm").val('');
    });
</script>
@endif
@endsection
@section('footer')

@endsection