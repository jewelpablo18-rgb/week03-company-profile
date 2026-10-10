<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    private function getServices(): array
    {
        return [
            ['icon' => 'web', 'title' => 'Web Development', 'description' => 'Responsive, fast and secure websites built with Laravel and modern frameworks.'],
            ['icon' => 'mobile', 'title' => 'Mobile Development', 'description' => 'Android and iOS apps that keep your customers connected.'],
            ['icon' => 'design', 'title' => 'UI/UX Design', 'description' => 'Clean, user-friendly designs based on how your customers actually behave.'],
            ['icon' => 'cloud', 'title' => 'Cloud Solutions', 'description' => 'Hosting, backup and migration to keep your business running 24/7.'],
            ['icon' => 'security', 'title' => 'Cybersecurity', 'description' => 'Security checks and monitoring to protect your data and your customers.'],
            ['icon' => 'consulting', 'title' => 'IT Consulting', 'description' => 'Practical technology advice to help you plan, budget and grow.'],
        ];
    }

    public function home()
    {
        return view('pages.home', ['featured' => array_slice($this->getServices(), 0, 3)]);
    }

    public function about()
    {
        $team = [
            ['name' => 'Miguel Dela Cruz', 'role' => 'Founder & CEO'],
            ['name' => 'Sofia Ramirez', 'role' => 'Lead Developer'],
            ['name' => 'Carlo Mendoza', 'role' => 'UI/UX Designer'],
            ['name' => 'Bea Villanueva', 'role' => 'Project Manager'],
        ];

        return view('pages.about', compact('team'));
    }

    public function services()
    {
        return view('pages.services', ['services' => $this->getServices()]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
