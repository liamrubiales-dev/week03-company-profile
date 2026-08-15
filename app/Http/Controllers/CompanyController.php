<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function home(): View
    {
        $featuredServices = [
            [
                'title' => 'Web Development',
                'description' => 'Custom, scalable websites and web applications built with modern frameworks.',
                'icon' => '💻',
            ],
            [
                'title' => 'Mobile Development',
                'description' => 'Native and cross-platform mobile apps for iOS and Android.',
                'icon' => '📱',
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'User-centered design that turns ideas into intuitive digital products.',
                'icon' => '🎨',
            ],
        ];

        return view('pages.home', compact('featuredServices'));
    }

    public function about(): View
    {
        $coreValues = [
            'Integrity' => 'We do what is right, even when no one is watching.',
            'Innovation' => 'We continuously explore better ways to solve problems.',
            'Excellence' => 'We hold ourselves to the highest standard of quality.',
            'Collaboration' => 'We believe great work happens through teamwork.',
        ];

        $team = [
            ['name' => 'Juan Dela Cruz', 'role' => 'Founder & CEO'],
            ['name' => 'Maria Santos', 'role' => 'Lead Developer'],
            ['name' => 'Carlos Reyes', 'role' => 'Project Manager'],
        ];

        return view('pages.about', compact('coreValues', 'team'));
    }

    public function services(): View
    {
        $services = [
            [
                'icon' => '💻',
                'title' => 'Web Development',
                'description' => 'We build fast, secure, and responsive websites tailored to your business needs.',
            ],
            [
                'icon' => '📱',
                'title' => 'Mobile Development',
                'description' => 'Cross-platform mobile applications designed for performance and usability.',
            ],
            [
                'icon' => '🎨',
                'title' => 'UI/UX Design',
                'description' => 'Human-centered interfaces that are both beautiful and easy to use.',
            ],
            [
                'icon' => '☁️',
                'title' => 'Cloud Solutions',
                'description' => 'Scalable cloud infrastructure and migration services for growing businesses.',
            ],
            [
                'icon' => '🔒',
                'title' => 'Cybersecurity',
                'description' => 'Protect your systems and data with proactive security assessments and monitoring.',
            ],
            [
                'icon' => '📊',
                'title' => 'IT Consulting',
                'description' => 'Strategic technology guidance to help your business make smarter IT decisions.',
            ],
        ];

        return view('pages.services', compact('services'));
    }

    public function contact(): View
    {
        $companyInfo = [
            'address' => '123 Innovation Street, Makati City, Philippines',
            'email' => 'info@yourcompany.com',
            'phone' => '+63 900 000 0000',
            'social' => [
                'Facebook' => '#',
                'LinkedIn' => '#',
                'Twitter' => '#',
                'Instagram' => '#',
            ],
        ];

        return view('pages.contact', compact('companyInfo'));
    }
}