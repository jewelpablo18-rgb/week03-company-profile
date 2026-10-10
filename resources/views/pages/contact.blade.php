@extends('layouts.app')
@section('title', 'Contact | BrightPath Digital Solutions')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-10">Contact Us</h1>

    <div class="grid gap-8 md:grid-cols-2">
        {{-- Contact form (UI only) --}}
        <form class="bg-white p-6 rounded-xl shadow space-y-4" onsubmit="return false;">
            <div>
                <label class="block text-sm font-medium mb-1" for="name">Name</label>
                <input id="name" type="text" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="email">Email</label>
                <input id="email" type="email" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1" for="message">Message</label>
                <textarea id="message" rows="5" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
            </div>
            <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700">Send Message</button>
        </form>

        <div class="space-y-4">
            <div class="bg-white p-6 rounded-xl shadow space-y-2">
                <p class="flex items-start gap-2"><x-icon name="location" class="w-5 h-5 mt-0.5 text-indigo-600 shrink-0" /><span><strong>Address:</strong> 2F Lakeview Building, National Highway, Calauan, Laguna 4012, Philippines</span></p>
                <p class="flex items-start gap-2"><x-icon name="mail" class="w-5 h-5 mt-0.5 text-indigo-600 shrink-0" /><span><strong>Email:</strong> hello@brightpath.example</span></p>
                <p class="flex items-start gap-2"><x-icon name="phone" class="w-5 h-5 mt-0.5 text-indigo-600 shrink-0" /><span><strong>Phone:</strong> +63 917 123 4567</span></p>
                <p class="flex items-start gap-2"><x-icon name="link" class="w-5 h-5 mt-0.5 text-indigo-600 shrink-0" /><span><strong>Social:</strong>
                    <a href="https://facebook.com/brightpathdigital" class="text-indigo-600 hover:underline">Facebook</a> ·
                    <a href="https://linkedin.com/company/brightpathdigital" class="text-indigo-600 hover:underline">LinkedIn</a> ·
                    <a href="https://x.com/brightpathdigital" class="text-indigo-600 hover:underline">X (formerly Twitter)</a>
                </span></p>
            </div>
            <iframe class="w-full h-64 rounded-xl shadow" loading="lazy"
                src="https://www.google.com/maps?q=Calauan,Laguna,Philippines&output=embed"></iframe>
        </div>
    </div>
</div>
@endsection
