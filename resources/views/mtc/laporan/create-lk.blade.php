@extends('mtc.main')
@section('main')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto lg:py-16">
        <div class="columns-3">
            <img src="/image/mechanic.svg" style="width: 65px; height:75px; align-items:center;">
            <h1 class="mb-4 justify-center text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-3xl dark:text-white">Formulir Laporan <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500" style="align-items: center">Kerusakan</mark></h1>
            <h6 class="float-right text-lg font-bold dark:text-white">ASB/MAIN/FM-032 Rev.00 <p class="text-lg font-normal text-gray-500 lg:text-sm dark:text-gray-400">Tgl. Berlaku : 15 September 2021 </p></h6>
          </div>
        <br>
        <form action="{{ route('laporan.store') }}" method="post" >
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <div class="columns-3">
                        <div class="w-full">
                            <label for="nolk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. LK</label>
                            <input type="text" name="no-lk" id="no-lk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="No-LK" required="">
                        </div>
                        <div class="w-full">
                            <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Pelapor" required="">
                        </div>
                        <div class="w-full">
                        <label for="alat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identifikasi Alat</label>
                        <input type="text" name="alat" id="alat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Identifikasi Alat" required="">
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="columns-3">
                    <div class="w-full">
                    <label for="Hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari/Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div class="w-full">
                    <label for="Jam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam</label>
                    <input type="time" name="day" id="day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div class="w-full">
                    <label for="PID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.PID</label>
                    <input type="text" name="pid" id="pid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="AIT-001">
                    </div>
                </div>
                <br>
                <div class="columns-3">
                    <div class="w-full">
                    <label for="bangunan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Bangunan</label>
                    <textarea id="bangunan" name="bangunan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keterangan Silahkan..."></textarea>
                    </div>
                    <div class="w-full">
                    <label for="analisa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Analisa Kerusakan</label>
                    <textarea id="analisa" name="analisa" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Indikasi Rusak" required></textarea>
                    </div>
                    <div class="w-full">
                    <label for="kerusakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan Kerusakan/Kelainan</label>
                    <textarea id="kerusakan" name="kerusakan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Alat yg Rusak" required></textarea>
                    </div>
                </div>
                <br>
                <div>
                    <label for="action" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tindakan Yang Diambil Oleh{{ Auth::user()->name }} :</label>
                    <input type="text" name="action" id="action" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tindakan Lanjutan" required="">
                </div>
                <br>
                <div class="columns-3">
                    <div class="w-full">
                    <label for="operator" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TTD Pelapor</label>
                    <textarea id="operator" name="operator" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Untuk Area TTD"></textarea>
                    </div>
                    @role(['Moderator','Admin'])
                    <div class="w-full">
                    <label for="diperiksa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diperiksa Oleh SPV Produksi</label>
                    <textarea id="diperiksa" name="diperiksa" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Untuk Area TTD"></textarea>
                    </div>
                    <div class="w-full">
                    <label for="diperiksa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Kerusakan (Diisi Oleh SPV)</label>                      
                        <div class="flex items-center">
                            <input id="statuslk" name="status-lk" type="checkbox" value="Lk ini berhubungan dengan proses produksi dan ada kerusakan/kelainan setelah pengecekan dilapangan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                </div> 
                <br>
                <div class="columns-3">
                    <div class="w-full">
                        <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                            <textarea id="catatan" name="catatan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Dari Plant Manager"></textarea>
                    </div>
                    <div class="w-full">
                        <label for="ttd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area TTD MGR</label>
                            <textarea id="ttd" name="ttd" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="TTD Plant Manager"></textarea>
                    </div>
                    <div class="w-full">
                        <label for="Status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervensi Yang Dibutuhkan </label>
                        <div class="flex items-center">
                            <input id="urgensi" name="urgensi" type="checkbox" value="Kritis" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-sm text-gray-900 dark:text-gray-300">Kritis</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="urgensi" name="urgensi" type="checkbox" value="Penting" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Penting</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="urgensi" name="urgensi" type="checkbox" value="Rekomendasi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Rekomendasi</label>
                        </div>
                    </div>
                </div> 
                <br>
                @endrole
                @role('Moderator')
                <div class="columns-2">
                    <div class="w-full">
                        <label for="Teknisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diajukan Kepada Teknisi : </label>
                        <div class="flex items-center">
                            <input id="departemen" name="departemen" type="checkbox" value="Elektrikal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-sm text-gray-900 dark:text-gray-300">Elektrikal</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="departemen" name="departemen" type="checkbox" value="Mekanikal" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Mekanikal</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="departemen" name="departemen" type="checkbox" value="Instrument" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Instrument</label>
                        </div>
                    </div>
                    <br>
                    <div class="w-full">
                        <label for="Dilakukan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Untuk Dilakukan : </label>
                        <div class="flex items-center">
                            <input id="dilakukan" name="dilakukan" type="checkbox" value="Reparasi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-sm text-gray-900 dark:text-gray-300">Reparasi</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="dilakukan" name="dilakukan" type="checkbox" value="Penyetelan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Penyetelan</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="dilakukan" name="dilakukan" type="checkbox" value="Preventive" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Preventive</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="dilakukan" name="dilakukan" type="checkbox" value="Cleaning" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Cleaning</label>
                        </div>
                        <div class="flex items-center">
                            <input  id="dilakukan" name="dilakukan" type="checkbox" value="Modifikasi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Modifikasi</label>
                        </div>
                    </div>
                </div>
                <br>
                
                <div class="sm:col-span-3">    
                <h6 class="text-lg font-extrabold dark:text-white">Waktu <small class="ml-2 font-semibold text-gray-500 dark:text-gray-400">Penyelesaian Pekerjaan</small></h6>
                @endrole
                    <br>
                    @role(['Moderator','Admin'])
                    <h6 class="text-base font-bold dark:text-white">Total Waktu Sub Kontraktor :</h6>
                    <div class="columns-3">
                        <div class="w-full">
                            <label for="no-lk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mulai Tanggal</label>
                            <input type="date" name="starday" id="starday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="w-full">
                            <label for="no-lk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selesai Tanggal</label>
                            <input type="date" name="endday" id="endday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="w-full">
                            <label for="no-lk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Hari</label>
                            <input type="text" name="sumday" id="sumday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Total Hari Kerja">
                        </div>
                    </div>
                    <br>
                    <h6 class="text-base font-bold dark:text-white">Total Waktu Dikerjakan Sendiri :</h6>
                    <div class="columns-6">
                        <div class="w-full">
                            <label for="Pelaksana" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelaksana</label>
                            <input type="text" name="eksekutor" id="eksekutor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="w-full">
                            <label for="tahap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahapan Pengerjaan</label>
                            <input type="text" name="tahap" id="tahap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="w-full">
                            <label for="tanggal-kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                            <input type="date" name="eksekusiday" id="eksekusiday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="w-full">
                            <label for="mulai-kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Awal</label>
                            <input type="time" name="starkerja" id="starkerja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="w-full">
                            <label for="selesai-kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Akhir</label>
                            <input type="time" name="endkerja" id="endkerja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                        </div>
                        <div class="w-full">
                            <label for="manhour" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah (Man Hour)</label>
                            <input type="text" name="manhour" id="manhour" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="40H" >
                        </div>
                    </div>
                </div>
                <br>
                <div class="columns-3">
                    <div class="w-full">
                        <label for="hasil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Pengerjaan</label>
                        <select id="hasil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Hasil Pengerjaan</option>
                            <option value="Sudahdapatdiatasi">Sudah Dapat Diatasi</option>
                            <option value="Tidakdapatdiatasi">Tidak Dapat Diatasi</option>
                            <option value="Tidakditemukankelainan/kerusakan">Tidak Ditemukan Kelainan/Kerusakan</option>
                            </select>
                    </div>
                    <div class="w-full">
                        <label for="cegah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cara Pencegahan Masalah</label>
                        <input type="text" name="cegah" id="cegah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis cara Pencegahan">
                    </div>
                    <div class="sm:col-span-3">
                        <label for="material" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Material Yang Dibutuhkan</label>
                        <input type="text" name="material" id="material" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis Material dan QTY">
                    </div>
                </div>
                <br>
                @endrole
                <div class="sm:col-span-3">
                    <label for="ttdmgr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                    <textarea id="ttdmgr"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keterangan Silahkan..."></textarea>
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