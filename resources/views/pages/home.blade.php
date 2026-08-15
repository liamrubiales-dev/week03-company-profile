@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="bg-black text-white">
        <div class="max-w-6xl mx-auto px-6 py-24 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                Building Digital Solutions That Move Business <span class="text-yellow-400">Forward</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                We are a technology company helping startups and enterprises design, build, and scale reliable software.
            </p>
            <a href="{{ url('/contact') }}" class="inline-block bg-yellow-400 text-black font-semibold px-8 py-3 rounded-lg hover:bg-yellow-300 transition">
                Get a Free Consultation
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="max-w-6xl mx-auto px-6 py-16 text-center">
        <h2 class="text-3xl font-bold mb-4">Who We Are</h2>
        <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
            JYP Tech was founded to help businesses of every size embrace technology with confidence. From web platforms to cloud infrastructure, our team combines technical expertise with a genuine partnership approach to deliver software that lasts.
        </p>
    </section>

    <!-- Featured Services Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10">Featured Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($featuredServices as $service)
                    <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-lg transition">
                        <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                        <h3 class="text-xl font-semibold mb-2">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 text-sm">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-black text-white text-center py-16">
        <h2 class="text-2xl font-bold mb-4">Ready to Start Your Project?</h2>
        <p class="text-gray-300 mb-6">Let's talk about how we can help your business grow.</p>
        <a href="{{ url('/contact') }}" class="inline-block bg-yellow-400 text-black font-semibold px-8 py-3 rounded-lg hover:bg-yellow-300 transition">
            Contact Us Today
        </a>
    </section>
@endsection 