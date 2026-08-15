@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Page Header -->
    <section class="bg-black text-white py-16 text-center">
        <h1 class="text-4xl font-bold">About JYP Tech</h1>
        <p class="text-gray-300 mt-2">Get to know who we are and what drives us.</p>
    </section>

    <!-- History Section -->
    <section class="max-w-4xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold mb-4">Our History</h2>
        <p class="text-gray-600 leading-relaxed">
            JYP Tech started as a small team of developers with a shared goal: to make quality software accessible to startups and small businesses. Over the years, we've grown into a full-service technology partner, delivering web, mobile, and cloud solutions to clients across different industries.
        </p>
    </section>

    <!-- Mission & Vision Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10">
            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="text-xl font-bold mb-3">🎯 Our Mission</h3>
                <p class="text-gray-600">
                    To empower businesses with reliable, scalable, and user-friendly technology solutions that solve real problems.
                </p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="text-xl font-bold mb-3">🚀 Our Vision</h3>
                <p class="text-gray-600">
                    To be a leading technology partner recognized for innovation, integrity, and long-term client success.
                </p>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold text-center mb-10">Our Core Values</h2>
        <div class="grid md:grid-cols-4 gap-6">
            @foreach ($coreValues as $value => $description)
                <div class="text-center p-6 border rounded-xl hover:shadow-md transition">
                    <h3 class="font-semibold text-yellow-600 mb-2">{{ $value }}</h3>
                    <p class="text-sm text-gray-600">{{ $description }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-black py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-2xl font-bold text-center mb-10 text-white">Meet the Team</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($team as $member)
                    <div class="bg-white rounded-xl p-8 text-center">
                        <div class="text-5xl mb-4">👤</div>
                        <h3 class="font-bold text-lg mb-1">{{ $member['name'] }}</h3>
                        <p class="text-gray-600 text-sm">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="max-w-6xl mx-auto px-6 py-16 text-center">
        <h2 class="text-2xl font-bold mb-4">Let's Work Together</h2>
        <p class="text-gray-600 mb-8">Ready to transform your business with our expertise?</p>
        <a href="{{ url('/contact') }}" class="inline-block bg-yellow-400 text-black font-semibold px-8 py-3 rounded-lg hover:bg-yellow-300 transition">
            Get in Touch
        </a>
    </section>
@endsection