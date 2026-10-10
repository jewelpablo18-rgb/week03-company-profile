@extends('layouts.app')
@section('title', 'Services | BrightPath Digital Solutions')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-3">Our Services</h1>
    <p class="text-center text-gray-600 mb-10">End-to-end technology services tailored to your needs.</p>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($services as $service)
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <div class="w-14 h-14 mb-3 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center"><x-icon :name="$service['icon']" class="w-8 h-8" /></div>
                <h2 class="text-xl font-semibold mb-2">{{ $service['title'] }}</h2>
                <p class="text-gray-600">{{ $service['description'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
