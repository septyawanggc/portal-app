@extends('mtc.mastermingguan')
@section('mainmenu')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto lg:py-16">
        <h1 class="mb-4 justify-center text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-3xl dark:text-white">Hasil  <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">Inspeksi</mark> Pompa Intake  {{$data->Equipment}}<span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 float-right">{{$data->Status}}</span></h1>
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <div class="columns-3">
                        <div class="w-full">
                            <label for="Equipment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Equipment</label>
                            <input type="text" name="Equipment" id="Equipment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Equipment}}" readonly>
                        </div>
                        <div class="w-full">
                            <label for="Tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                            <input type="text" name="Tanggal" id="Tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Tanggal}}" readonly>
                        </div>
                        <div class="w-full">
                            <label for="Bulan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan</label>
                            <input type="text" name="Bulan" id="Bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Bulan}}" readonly>
                        </div>
                    </div>
                    
                </div>
                <div class="sm:col-span-2 gap-8 ">
                    <div class="columns-1 justify-center">
                        <h1 class="flex justify-center items-center text-3xl font-bold dark:text-white"><mark class="px-3 mb-2 text-white bg-blue-600 rounded dark:bg-blue-500">Water Pump Section</mark></h1>
                    </div>
                    <div class="columns-1 justify-center">
                        <h1 class="flex justify-center items-center text-xl font-bold dark:text-white">Bearing DE Pump</h1>
                    </div>
                <div class="columns-4">
                    <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Vertikal </label>
                    <input type="text" name="DEVP" id="DEVP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->DEVP}}" readonly>
                    </div>
                    <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Horizontal </label>
                    <input type="text" name="DEHP" id="DEHP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->DEHP}}" readonly>
                    </div>
                    <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Axial</label>
                    <input type="text" name="DEAP" id="DEAP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->DEAP}}" readonly>
                    </div>
                    <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input type="text" name="DEPTemp" id="DEPTemp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->DEPTemp}}" readonly>
                    </div>
                </div>
                </div>
                <div class="sm:col-span-2 gap-8 ">
                    <div class="columns-1 justify-center">
                        <h1 class="flex justify-center items-center text-xl font-bold dark:text-white">Bearing NDE Pump</h1>
                    </div>
                <div class="columns-4">
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Vertikal </label>
                        <input type="text" name="NDEVP" id="NDEVP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->NDEVP}}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Horizontal </label>
                        <input type="text" name="NDEHP" id="NDEHP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->NDEHP}}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Axial</label>
                        <input type="text" name="NDEAP" id="NDEAP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->NDEAP}}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                        <input type="text" name="NDEPTemp" id="NDEPTemp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->NDEPTemp}}" readonly>
                        </div>
                </div>
                <div class="sm:col-span-2 gap-8 ">
                    <div class="columns-2">
                        <div class="w-full">
                            <label for="Mechseal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mech Seal Status</label>
                            <input type="text" name="MechP" id="MechP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->MechP}}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="Pressure Pump" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pressure Pump </label>
                        <input type="text" name="PressP" id="PressP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->PressP}}" readonly>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2 gap-8">
                    <div class="columns-1 justify-center">
                        <h1 class="flex justify-center items-center text-3xl font-bold dark:text-white"><mark class="px-3 mb-2 text-white bg-blue-600 rounded dark:bg-blue-500">Motor Section</mark></h1>
                    </div>
                    <div class="columns-1 justify-center">
                        <h1 class="flex justify-center items-center text-xl font-bold dark:text-white">Bearing DE Motor</h1>
                    </div>
                    <div class="columns-4">
                        <div class="w-full">
                    <label for="DE Vertikal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Vertikal </label>
                    <input type="text" name="DEVM" id="DEVM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->DEVM}}" readonly>
                    </div>
                    <div class="w-full">
                    <label for="DE Horizontal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Horizontal </label>
                    <input type="text" name="DEHM" id="DEHM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->DEHM}}" readonly>
                    </div>
                    <div class="w-full">
                    <label for="DE Axial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Axial</label>
                    <input type="text" name="DEAM" id="DEAM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->DEAM}}" readonly>
                    </div>
                    <div class="w-full">
                    <label for="Temperature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input type="text" name="DEMTemp" id="DEMTemp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->DEMTemp}}" readonly>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2 gap-8 ">
                    <div class="columns-1 justify-center">
                        <h1 class="flex justify-center items-center text-xl font-bold dark:text-white">Bearing NDE Motor</h1>
                    </div>
                <div class="columns-4">
                        <div class="w-full">
                        <label for="NDE Vertikal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Vertikal </label>
                        <input type="text" name="NDEVM" id="NDEVM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->NDEVM}}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="NDE Horizontal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Horizontal </label>
                        <input type="text" name="NDEHM" id="NDEHM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->NDEHM}}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="NDE Axial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Axial</label>
                        <input type="text" name="NDEAM" id="NDEAM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->NDEAM}}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="Temperature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                        <input type="text" name="NDEMTemp" id="NDEPTemp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->NDEMTemp}}" readonly>
                        </div>
                </div>
                <div class="sm:col-span-2 gap-8">
                    <div class="columns-3">
                        <div class="w-full">
                            <label for="Frequency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frequency</label>
                            <input type="text" name="FreqM" id="FreqM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->FreqM}}" readonly>
                            </div>
                            <div class="w-full">
                            <label for="Current" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Motor</label>
                            <input type="text" name="Current" id="Current" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Current}}" readonly>
                        </div>
                        <div class="w-full">
                            <label for="RPM" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RPM Motor</label>
                            <input type="text" name="RPM" id="RPM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->RPM}}" readonly>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="Oleh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Di input Oleh {{ Auth::user()->name }}</label>
                    <input type="text" name="Oleh" id="Oleh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Oleh}}" readonly>
                </div> 
                <div>
                    <label for="Status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status </label>
                    <input type="text" name="Status" id="Status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Status}}" readonly>
                </div> 
                <div class="sm:col-span-2">
                    <label for="Keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                    <textarea id="Keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{$data->Keterangan}}</textarea>
                </div>
            </div>
            <div class="flex">
                <div class="flex items-center h-5">
                <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </div>
                <div class="ml-2 text-sm">
                <label for="helper-checkbox" class="font-medium text-gray-900 dark:text-gray-300">Apakah Informasi Membantu?</label>
                <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">Jika ada kesalahan dalam informasi mohon diperbarui lewat menu edit</p>
            </div>
        </div>
        <a href="/pompaintake"><button type="button" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">
            Kembali
          </button></a>
        </div>
    </div>
  </section>

@endsection
@section('footer')
@endsection