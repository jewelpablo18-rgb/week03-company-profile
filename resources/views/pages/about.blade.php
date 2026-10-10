@extends('layouts.app')
@section('title', 'About | BrightPath Digital Solutions')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-10">About Us</h1>

    <section class="mb-12">
        <h2 class="text-2xl font-semibold mb-3">Company History</h2>
        <p class="text-gray-600 leading-relaxed">Founded in 2023 by four IT graduates who saw that many local businesses lacked an online presence, BrightPath started by building simple websites for neighborhood stores. It has since grown into a full-service digital company serving clients across Calabarzon.</p>
    </section>

    <section class="grid gap-6 md:grid-cols-2 mb-12">
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-semibold mb-2 flex items-center gap-2"><x-icon name="mission" class="w-7 h-7 text-indigo-600" /> Mission</h2>
            <p class="text-gray-600">To provide affordable, high-quality technology solutions that help local businesses compete in the digital economy.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-semibold mb-2 flex items-center gap-2"><x-icon name="vision" class="w-7 h-7 text-indigo-600" /> Vision</h2>
            <p class="text-gray-600">To become the most trusted digital partner for growing businesses in the Philippines.</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Core Values</h2>
        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4">
            @foreach (['Integrity', 'Innovation', 'Collaboration', 'Excellence'] as $value)
                <div class="bg-indigo-50 text-indigo-700 font-semibold text-center py-6 rounded-xl">{{ $value }}</div>
            @endforeach
        </div>
    </section>

    <section>
        <h2 class="text-2xl font-semibold mb-4">Meet the Team</h2>
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-4">
            @foreach ($team as $member)
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <div class="w-20 h-20 mx-auto rounded-full bg-indigo-200 flex items-center justify-center text-2xl font-bold text-indigo-700 mb-3">{{ substr($member['name'], 0, 1) }}</div>
                    <h3 class="font-semibold">{{ $member['name'] }}</h3>
                    <p class="text-sm text-gray-500">{{ $member['role'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
