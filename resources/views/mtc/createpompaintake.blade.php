@extends('mtc.mastermingguan')
@section('mainmenu')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto lg:py-16">
        <h1 class="mb-4 justify-center text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-3xl dark:text-white">Tambah  <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">Data Baru</mark></h1>
        <form action="{{ route('pompaintake.store') }}" method="post" >
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <div class="columns-3">
                        <div class="w-full">
                            <label for="Equipment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Equipment</label>
                            <select id="Equipment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Equipment</option>
                            <option value="Pompa1">Pompa1</option>
                            <option value="Pompa2">Pompa2</option>
                            <option value="Pompa3">Pompa3</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="Tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                            <input type="date" name="Tanggal" id="Tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tanggal">
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
                <div class="sm:col-span-2 gap-8 ">
                    <div class="columns-1 justify-center">
                        <h1 class="flex justify-center items-center text-3xl font-bold dark:text-white">Water Pump Section</h1>
                    </div>
                    <div class="columns-1 justify-center">
                        <h1 class="flex justify-center items-center text-xl font-bold dark:text-white">Bearing DE Pump</h1>
                    </div>
                <div class="columns-4">
                    <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Vertikal </label>
                    <input type="text" name="DEVP" id="DEVP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE bearing pump" required="">
                    </div>
                    <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Horizontal </label>
                    <input type="text" name="DEHP" id="DEHP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE bearing pump" required="">
                    </div>
                    <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Axial</label>
                    <input type="text" name="DEAP" id="DEAP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE bearing pump" required="">
                    </div>
                    <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input type="text" name="DEPTemp" id="DEPTemp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE Bearing Temp " required="">
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
                        <input type="text" name="NDEVP" id="NDEVP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NDE bearing pump" required="">
                        </div>
                        <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Horizontal </label>
                        <input type="text" name="NDEHP" id="NDEHP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NDE bearing pump" required="">
                        </div>
                        <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Axial</label>
                        <input type="text" name="NDEAP" id="NDEAP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NDE bearing pump" required="">
                        </div>
                        <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                        <input type="text" name="NDEPTemp" id="NDEPTemp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NDE Bearing Temp " required="">
                        </div>
                </div>
                <div class="sm:col-span-2 gap-8 ">
                    <div class="columns-2">
                        <div class="w-full">
                            <label for="Mechseal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mech Seal Status</label>
                            <select id="MechP" name="MechP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Select Status</option>
                                <option value="OK/TidakRembes">OK/TidakRembes</option>
                                <option value="NOK/Rembes">NOK/Rembes</option>
                            </select>
                        <div class="w-full">
                        <label for="Pressure Pump" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pressure Pump </label>
                        <input type="text" name="PressP" id="PressP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pressure" required="">
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
                    <input type="text" name="DEVM" id="DEVM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE bearing Motor" required="">
                    </div>
                    <div class="w-full">
                    <label for="DE Horizontal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Horizontal </label>
                    <input type="text" name="DEHM" id="DEHM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE bearing motor" required="">
                    </div>
                    <div class="w-full">
                    <label for="DE Axial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DE Axial</label>
                    <input type="text" name="DEAM" id="DEAM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE bearing motor" required="">
                    </div>
                    <div class="w-full">
                    <label for="Temperature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input type="text" name="DEMTemp" id="DEMTemp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="DE Motor Temp " required="">
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
                        <input type="text" name="NDEVM" id="NDEVM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NDE bearing motor" required="">
                        </div>
                        <div class="w-full">
                        <label for="NDE Horizontal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Horizontal </label>
                        <input type="text" name="NDEHM" id="NDEHM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NDE bearing motor" required="">
                        </div>
                        <div class="w-full">
                        <label for="NDE Axial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NDE Axial</label>
                        <input type="text" name="NDEAM" id="NDEAM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NDE bearing pump" required="">
                        </div>
                        <div class="w-full">
                        <label for="Temperature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                        <input type="text" name="NDEMTemp" id="NDEPTemp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="NDE Motor Temp " required="">
                        </div>
                </div>
                <div class="sm:col-span-2 gap-8">
                    <div class="columns-3">
                        <div class="w-full">
                            <label for="Frequency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frequency</label>
                            <input type="text" name="FreqM" id="FreqM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Frequency motor" required="">
                            </div>
                            <div class="w-full">
                            <label for="Current" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Motor</label>
                            <input type="text" name="Current" id="Current" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Current Motor" required="">
                        </div>
                        <div class="w-full">
                            <label for="RPM" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RPM Motor</label>
                            <input type="text" name="RPM" id="RPM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="RPM Motor" required="">
                        </div>
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
                <div class="sm:col-span-2">
                    <label for="Keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                    <textarea id="Keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keterangan Silahkan..."></textarea>
                </div>
            </div>
            <div class="columns-lg justify-center">
            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center">
                Add Data
            </button>
            </div>
        </form>
    </div>
  </section>

@endsection
@section('footer')
@endsection