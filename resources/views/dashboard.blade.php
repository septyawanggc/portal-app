@extends('navigation')
@section('header')
<link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
<script src="//unpkg.com/alpinejs" defer></script>
@endsection
@section('main')

<div class="grid grid-cols-3 gap-5">

    <x-bladewind.card class="cursor-pointer hover:shadow-gray-300">
        <svg ...>...</svg>
        <span class="text-center ...">Maintenance Open Order</span>
        <x-bladewind.rating
        type="thumbsup"
        name="thumb-rating" />
    </x-bladewind.card>
    
    <x-bladewind.card class="cursor-pointer hover:shadow-gray-300">
        <svg...>...</svg>
        <span class="text-center ...">Hasil Temuan HSE</span>
    </x-bladewind.card>

    <x-bladewind.card class="cursor-pointer hover:shadow-gray-300">
        <svg...>...</svg>
        <span class="text-center ...">Hasil Pengecekan Lab Hari ... </span>
    </x-bladewind.card>

    <x-bladewind.card title="Mobile Money Penetration">

        <x-bladewind.horizontal-line-graph
            label="MTN: "
            percentage="55"
            color="yellow" />

        <x-bladewind.horizontal-line-graph
            label="Vodafone: "
            percentage="30"
            color="red"
            class="py-3" />

        <x-bladewind.horizontal-line-graph
            label="AirtelTigo: "
            percentage="15"
            color="blue" />

    </x-bladewind.card>

    <x-bladewind.card title="Farmer age ratio">

        <x-bladewind.horizontal-line-graph
            label="Above 60: "
            percentage="33"
            color="cyan" />

        <x-bladewind.horizontal-line-graph
            label="Between 40 - 60: "
            percentage="43"
            color="purple"
            class="py-3" />

        <x-bladewind.horizontal-line-graph
            label="Under 40: "
            percentage="24"
            color="gray" />

    </x-bladewind.card>

    <x-bladewind::statistic
    number="34,500,100"
    label="Total payments">

    <x-slot name="icon">
        <svg class="h-16 w-16 p-2 text-white rounded-full bg-blue-500"...>
        ...
        </svg>
    </x-slot>

</x-bladewind::statistic>
</div>

<div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
    <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">All categories</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Shoes</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Bags</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Electronics</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Gaming</button>
</div>
<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
    </div>
</div>


@endsection
@section('footer')
@endsection