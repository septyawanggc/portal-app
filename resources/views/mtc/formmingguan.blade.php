@extends('navigation')
@section('header')
@endsection
@section('main')
@if ($user->level == "SPV-Maintenance" or $user->level == "Admin" or $user->level=="Dirut" or $user->level=="PlantManager" or $user->level=="Teknisi")
<section>
 
     <aside id="default-sidebar" class="fixed top-50 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
           <ul class="space-y-2 font-medium">
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-plus"></i>
                    <span class="ml-3">Pompa Intake</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group">
                  <i class="fa-solid fa-plus"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Pompa Backwash</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-plus"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Pompa Dosing</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-plus"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Mixer</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-plus"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Trafo Intake</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-plus"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Trafo WTP</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-plus"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Genset WTP</span>
                 </a>
              </li>
              <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-plus"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Genset Intake ASB</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-plus"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Genset Intake BBWS</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-plus"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Genset Manyaran </span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-plus"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Genset Desel</span>
               </a>
            </li>
           </ul>
        </div>
     </aside>
     
     <div class="p-4 sm:ml-64">
        <div class="p-4">
           <div class="grid grid-cols-3 gap-4 mb-4">
              <div class="flex items-center justify-center h-24 rounded bg-blue-50 dark:bg-blue-800">
                 <p class="text-2xl">
                    test paragrahp
                 </p>
              </div>
              <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                 </p>
              </div>
              <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                 </p>
              </div>
           </div>
           <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">
                 <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                 </svg>
              </p>
           </div>
           <div class="grid grid-cols-2 gap-4 mb-4">
              <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                 </p>
              </div>
              <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                 </p>
              </div>
              <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                 </p>
              </div>
              <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                 </p>
              </div>
           </div>
        </div>
     </div>
     

</section>
@endif
@endsection
@section('footer')
@endsection