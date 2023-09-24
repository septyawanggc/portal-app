@extends('mtc.mastermingguan')
@section('mainmenu')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto lg:py-16">
        <h1 class="mb-4 justify-center text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-3xl dark:text-white">Tambah  <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">Data Baru</mark></h1>
        <form action="{{ route('pompadosing.store') }}" method="post" >
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <div class="columns-4">
                        <div class="w-full">
                            <label for="Equipment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id Alat</label>
                            <select id="Equipment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select IdAlat</option>
                            <option value="1">1->PACL1</option>
                            <option value="2">2->PACL2</option>
                            <option value="3">3->PACL3</option>
                            <option value="4">4->PACL4</option>
                            <option value="5">5->PACL5</option>
                            <option value="6">6->PACLPost1</option>
                            <option value="7">7->PACLPost2</option>
                            <option value="8">8->Polymer1</option>
                            <option value="9">9->Polymer2</option>
                            <option value="10">10->Polymer3</option>
                            <option value="11">11->Polymer4</option>
                            <option value="12">12->Polymer5</option>
                            <option value="13">13->SodaAsh1</option>
                            <option value="14">14->SodaAsh2</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="Tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Alat</label>
                            <select id="Equipment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Select Equipment</option>
                                <option value="PACL1">PACL1</option>
                                <option value="PACL2">PACL2</option>
                                <option value="PACL3">PACL3</option>
                                <option value="PACL4">PACL4</option>
                                <option value="PACL5">PACL5</option>
                                <option value="PACLPost1">PACLPost1</option>
                                <option value="PACLPost2">PACLPost2</option>
                                <option value="Polymer1">Polymer1</option>
                                <option value="Polymer2">Polymer2</option>
                                <option value="Polymer3">Polymer3</option>
                                <option value="Polymer4">Polymer4</option>
                                <option value="Polymer5">Polymer5</option>
                                <option value="SodaAsh1">SodaAsh1</option>
                                <option value="SodaAsh2">SodaAsh2</option>
                                </select>
                        </div>
                        <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date" name="Tanggal" id="Tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE bearing pump" required="">
                        </div>
                        <div class="w-full">
                            <label for="Bulan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan</label>
                            <select id="Bulan" name="Bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Bulan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="columns-4">
                    <div class="w-full">
                    <label for="Temperature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input type="text" name="Temp" id="Temp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Temp" required="">
                    </div>
                    <div class="w-full">
                    <label for="Leveloli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Leveloli</label>
                    <input type="text" name="Leveloli" id="Leveloli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="High" required="">
                    </div>
                    <div class="w-full">
                    <label for="Stroke" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stroke</label>
                    <input type="text" name="Stroke" id="Stroke" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="60%" required="">
                    </div>
                    <div class="w-full">
                    <label for="Nois" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nois</label>
                    <select id="Nois" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select Nois</option>
                        <option value="Normal">Normal</option>
                        <option value="TidakNormal">TidakNormal</option>
                    </select>
                    </div>
                </div>
                <div>
                    <label for="Oleh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Di input Oleh {{ Auth::user()->name }}</label>
                    <input type="text" name="Oleh" id="Oleh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Inputer" required="">
                </div> 
                <div>
                    <label for="Status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status </label>
                    <select id="Status" name="Status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option >Select Status</option>
                        <option value="Running">Running</option>
                        <option value="Standby">Standby</option>
                        <option value="UnderMT">UnderMT</option>
                    </select>
                </div> 
                <div class="sm:col-span-3">
                    <label for="Keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                    <textarea id="Keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keterangan Silahkan..."></textarea>
                </div>
                <br>
                <button type="submit" class="px-6 top-10 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center">
                    Add Data
                </button>
            </div>
        </form>
    </div>
  </section>

@endsection
@section('footer')
@endsection