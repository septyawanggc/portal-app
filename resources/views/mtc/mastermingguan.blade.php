@extends('navigation')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
<section>
 
     <aside id="default-sidebar" class="fixed top-50 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 rounded" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
           <ul class="space-y-2 font-medium">
              <li>
                 <a href="/pompaintake" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-bars-staggered"></i>
                    <span class="ml-3">Pompa Intake</span>
                 </a>
              </li>
              <li>
                 <a href="/pompabw" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group">
                  <i class="fa-solid fa-bars-staggered"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Pompa Backwash</span>
                 </a>
              </li>
              <li>
                 <a href="/pompadosing" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-bars-staggered"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Pompa Dosing</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-bars-staggered"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Mixer</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-bars-staggered"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Trafo Intake</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-bars-staggered"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Trafo WTP</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-bars-staggered"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Genset WTP</span>
                 </a>
              </li>
              <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-bars-staggered"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Genset Intake ASB</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-bars-staggered"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Genset Intake BBWS</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-bars-staggered"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Genset Manyaran </span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-bars-staggered"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Genset Desel</span>
               </a>
            </li>
           </ul>
        </div>
     </aside>
     
     <div class="p-4 sm:ml-64">
      @yield('mainmenu')
      </div>
     

</section>
@endif
@endsection
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endsection