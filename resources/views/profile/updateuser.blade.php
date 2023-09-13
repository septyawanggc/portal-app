@extends('navigation')
@section('header')
@endsection
@section('main')
<x-bladewind.centered-content size="small">

    <x-bladewind.input
        name="fullname"
        placeholder="John T. Doe"
        prefix="user"
        prefix_is_icon="true" />

    <x-bladewind.input
        name="emailic"
        placeholder="me@bladewindui.com"
        prefix="envelope"
        prefix_is_icon="true" />

    <div class="flex gap-4">
        <x-bladewind.input
            name="fon"
            placeholder="0000.000.00"
            prefix="phone"
            prefix_is_icon="true" />

        <x-bladewind.input
            name="passw" type="password"
            placeholder="Password"
            prefix="key"
            prefix_is_icon="true"
            prefix_icon_css="text-orange-500"
            viewable="true" />

    </div>

    <x-bladewind.button class="w-full">Sign Up</x-bladewind.button>

</x-bladewind.centered-content>
@endsection
@section('footer')
@endsection