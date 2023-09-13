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


<x-bladewind.tab-group name="staff-loans" color="cyan">
    <div class="grid grid-cols-2 gap-5">
    <x-slot name="headings">

        <x-bladewind.tab-heading
            name="loans"
            active="true"
            label="Pending Loans" />

    </x-slot>

    <x-bladewind.tab-body>

        <x-bladewind.tab-content name="loans" active="true">
            this is content for pending loans
        </x-bladewind.tab-content>

    </x-bladewind.tab-body>
    </div>
</x-bladewind.tab-group>

@endsection
@section('footer')
@endsection