@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Page Header -->
    <section class="bg-black text-white py-16 text-center">
        <h1 class="text-4xl font-bold">Contact Us</h1>
        <p class="text-gray-300 mt-2">We'd love to hear from you.</p>
    </section>

    <!-- Contact Section with Form and Info -->
    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div>
            <h2 class="text-2xl font-bold mb-6">Send us a Message</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Full Name</label>
                    <input type="text" placeholder="Juan Dela Cruz" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" placeholder="you@example.com" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Subject</label>
                    <input type="text" placeholder="How can we help?" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Message</label>
                    <textarea rows="5" placeholder="Write your message here..." class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
                </div>
                <button type="button" class="bg-yellow-400 text-black font-semibold px-6 py-3 rounded-lg hover:bg-yellow-300 transition">
                    Send Message
                </button>
                <p class="text-xs text-gray-400">
                    * This form is UI only for this activity and is not yet connected to a backend.
                </p>
            </form>
        </div>

        <!-- Contact Information -->
        <div class="space-y-6">
            <div>
                <h3 class="font-semibold mb-1">📍 Address</h3>
                <p class="text-gray-600">123 Innovation Street, Makati City, Philippines</p>
            </div>
            <div>
                <h3 class="font-semibold mb-1">✉️ Email</h3>
                <p class="text-gray-600">info@jyptech.com</p>
            </div>
            <div>
                <h3 class="font-semibold mb-1">📞 Phone</h3>
                <p class="text-gray-600">+63 900 000 0000</p>
            </div>
            <div>
                <h3 class="font-semibold mb-2">🕐 Business Hours</h3>
                <p class="text-gray-600">Mon - Fri: 9 AM - 6 PM</p>
                <p class="text-gray-600">Sat - Sun: Closed</p>
            </div>
        </div>
    </section>
@endsection