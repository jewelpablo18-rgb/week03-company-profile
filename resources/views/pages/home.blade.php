@extends('layouts.app')
@section('title', 'Home | BrightPath Digital Solutions')

@section('content')
<section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
    <div class="max-w-6xl mx-auto px-4 py-24 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Empowering Filipino Businesses with Modern Technology</h1>
        <p class="text-lg md:text-xl mb-8 text-indigo-100">Building Smarter Digital Experiences</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-indigo-600 font-semibold px-8 py-3 rounded-full shadow hover:bg-indigo-50">Get in Touch</a>
    </div>
</section>

<section class="max-w-4xl mx-auto px-4 py-16 text-center">
    <h2 class="text-3xl font-bold mb-4">Who We Are</h2>
    <p class="text-gray-600 leading-relaxed">BrightPath Digital Solutions is a Laguna-based startup that helps small and medium businesses grow online through custom websites, mobile apps, and reliable IT support.</p>
</section>

<section class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Featured Services</h2>
    <div class="grid gap-6 md:grid-cols-3">
        @foreach ($featured as $service)
            <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-lg transition">
                <div class="w-14 h-14 mx-auto mb-3 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center"><x-icon :name="$service['icon']" class="w-8 h-8" /></div>
                <h3 class="text-xl font-semibold mb-2">{{ $service['title'] }}</h3>
                <p class="text-gray-600">{{ $service['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="max-w-4xl mx-auto px-4 py-16 text-center">
    <h2 class="text-3xl font-bold mb-3">Ready to start your project?</h2>
    <a href="{{ route('services') }}" class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-full hover:bg-indigo-700">Explore All Services</a>
</section>
@endsection
