@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <!-- Page Header -->
    <section class="bg-black text-white py-16 text-center">
        <h1 class="text-4xl font-bold">Our Services</h1>
        <p class="text-gray-300 mt-2">Comprehensive technology solutions tailored to your needs.</p>
    </section>

    <!-- Services Grid -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($services as $service)
                <div class="bg-white border rounded-xl shadow-sm p-6 hover:shadow-lg transition">
                    <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                    <h3 class="text-xl font-semibold mb-2">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gray-100 py-16 text-center">
        <h2 class="text-2xl font-bold mb-4">Not sure which service fits your needs?</h2>
        <p class="text-gray-600 mb-6">Reach out and we'll help you figure out the right solution.</p>
        <a href="{{ url('/contact') }}" class="inline-block bg-yellow-400 text-black font-semibold px-8 py-3 rounded-lg hover:bg-yellow-300 transition">
            Talk to Us
        </a>
    </section>
@endsection