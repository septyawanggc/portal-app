@extends('mtc.mastermingguan')
@section('mainmenu')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto lg:py-16">
        <h1 class="mb-4 justify-center text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-3xl dark:text-white">Hasil  <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">Inspeksi</mark> Pompa Dosing  {{$data->Nama}}<span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 float-right">{{$data->Status}}</span></h1>
        <form action="{{ route('pompadosing.update', $data->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <div class="columns-4">
                        <div class="w-full">
                            <label for="Id Alat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id Alat</label>
                            <input type="text" name="idalat" id="idalat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->idalat}}" readonly>
                        </div>
                        <div class="w-full">
                            <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Alat</label>
                            <input type="text" name="Nama" id="Nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Nama}}" readonly>
                        </div>
                        <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date" name="Tanggal" id="Tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Tanggal}}" readonly>
                        </div>
                        <div class="w-full">
                            <label for="Bulan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan</label>
                            <input type="text" name="Bulan" id="Bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Bulan}}" readonly>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="columns-4">
                    <div class="w-full">
                    <label for="Temperature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input type="text" name="Temp" id="Temp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Temp}}">
                    </div>
                    <div class="w-full">
                    <label for="Leveloli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Leveloli</label>
                    <input type="text" name="Leveloli" id="Leveloli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Leveloli}}">
                    </div>
                    <div class="w-full">
                    <label for="Stroke" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stroke</label>
                    <input type="text" name="Stroke" id="Stroke" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Stroke}}" >
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
                    <label for="Oleh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Di input Oleh </label>
                    <input type="text" name="Oleh" id="Oleh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$data->Oleh}}" >
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
                    <textarea id="Keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{$data->Keterangan}}</textarea>
                </div>
                <div class="flex">
                    <div class="flex items-center h-5">
                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="flex">
                        <div class="ml-2 text-sm">
                        <label for="helper-checkbox" class="font-medium text-gray-900 dark:text-gray-300">Apakah Informasi Membantu?</label>
                        <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">Jika ada kesalahan dalam informasi mohon diperbarui lewat menu edit</p>
                    </div>
                </div>
                <br>
            </div>
            <br>
            <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Update
              </button></a>
            <a href="/pompadosing"><button type="button" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">
                Kembali
              </button></a>
        </form>
    </div>
  </section>

@endsection
@section('footer')
@endsection