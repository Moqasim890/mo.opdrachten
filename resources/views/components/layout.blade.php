<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full bg-gray-50">
<div class="min-h-full flex flex-col">
    <!-- Top Bar -->
    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-10 items-center justify-between text-sm text-white">
                <div class="flex items-center space-x-6">
                    <a href="mailto:info@jobboard.com" class="hover:text-gray-200 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        info@jobboard.com
                    </a>
                    <span class="hover:text-gray-200 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +1 (555) 123-4567
                    </span>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="hover:text-gray-200">Help</a>
                    <span>|</span>
                    <a href="#" class="hover:text-gray-200">For Employers</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50 border-b border-gray-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <div class="h-14 w-14 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 rounded-2xl flex items-center justify-center shadow-xl transform hover:scale-105 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="absolute -bottom-1 -right-1 h-4 w-4 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div>
                        <h1 class="text-2xl font-black bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                            JobBoard
                        </h1>
                        <p class="text-xs text-gray-500 font-medium">Find Your Dream Job</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-2">
                    <a href="/" class="group px-5 py-2.5 rounded-xl text-sm font-semibold transition-all {{ request()->is('/') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-gray-700 hover:bg-gray-100' }}">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Home
                        </span>
                    </a>
                    <a href="/jobs" class="group px-5 py-2.5 rounded-xl text-sm font-semibold transition-all {{ request()->is('jobs*') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-gray-700 hover:bg-gray-100' }}">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Browse Jobs
                        </span>
                    </a>
                    <a href="/contact" class="group px-5 py-2.5 rounded-xl text-sm font-semibold transition-all {{ request()->is('contact') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-gray-700 hover:bg-gray-100' }}">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Contact
                        </span>
                    </a>
                </div>

                <!-- Right Actions -->
                <div class="flex items-center space-x-3">
                    <button class="hidden lg:flex items-center px-4 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition-all">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        Search Jobs
                    </button>
                    <button class="px-5 py-2.5 text-sm font-semibold text-gray-700 bg-white border-2 border-gray-300 rounded-xl hover:border-indigo-600 hover:text-indigo-600 transition-all">
                        Sign In
                    </button>
                    <button class="px-5 py-2.5 text-sm font-semibold text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl shadow-lg shadow-indigo-500/50 hover:shadow-xl hover:shadow-indigo-500/50 transition-all">
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Header -->
    <header class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yLjIxLTEuNzktNC00LTRzLTQgMS43OS00IDQgMS43OSA0IDQgNCA0LTEuNzkgNC00em0wLTEwYzAtMi4yMS0xLjc5LTQtNC00cy00IDEuNzktNCA0IDEuNzkgNCA0IDQgNC0xLjc5IDQtNHptMC0xMGMwLTIuMjEtMS43OS00LTQtNHMtNCAxLjc5LTQgNCAxLjc5IDQgNCA0IDQtMS43OSA0LTR6Ii8+PC9nPjwvZz48L3N2Zz4=')] opacity-20"></div>
        
        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0">
                <div>
                    <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-white drop-shadow-lg">
                        {{ $title ?? 'Welcome' }}
                    </h1>
                    <p class="mt-2 text-lg text-white/90 font-medium">Discover amazing opportunities and build your career</p>
                </div>
                
                @if(request()->is('jobs*'))
                <a href="/jobs/create" class="inline-flex items-center px-6 py-3 text-base font-semibold text-indigo-600 bg-white rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Post a Job
                </a>
                @endif
            </div>
        </div>

        <!-- Decorative Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-12 text-gray-50" preserveAspectRatio="none" viewBox="0 0 1440 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 22L120 16C240 10 480 -2 720 1C960 4 1200 22 1320 31L1440 40V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z" fill="currentColor"/>
            </svg>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-50">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 mt-auto border-t-4 border-indigo-600">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand Section -->
                <div class="lg:col-span-1">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="h-14 w-14 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 rounded-2xl flex items-center justify-center shadow-xl">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-white">JobBoard</h3>
                            <p class="text-xs text-gray-400">Find Your Dream Job</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Connecting talented professionals with amazing opportunities worldwide. Start your career journey today.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="group h-10 w-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-r hover:from-indigo-600 hover:to-purple-600 transition-all">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="group h-10 w-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-r hover:from-indigo-600 hover:to-purple-600 transition-all">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="group h-10 w-10 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-gradient-to-r hover:from-indigo-600 hover:to-purple-600 transition-all">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white text-lg font-bold mb-6 border-b-2 border-indigo-600 pb-2 inline-block">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center group">
                            <span class="mr-2 text-indigo-500 group-hover:mr-3 transition-all">→</span> Home
                        </a></li>
                        <li><a href="/jobs" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center group">
                            <span class="mr-2 text-indigo-500 group-hover:mr-3 transition-all">→</span> Browse Jobs
                        </a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center group">
                            <span class="mr-2 text-indigo-500 group-hover:mr-3 transition-all">→</span> Contact Us
                        </a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center group">
                            <span class="mr-2 text-indigo-500 group-hover:mr-3 transition-all">→</span> About Us
                        </a></li>
                    </ul>
                </div>

                <!-- For Job Seekers -->
                <div>
                    <h4 class="text-white text-lg font-bold mb-6 border-b-2 border-indigo-600 pb-2 inline-block">For Job Seekers</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center group">
                            <span class="mr-2 text-indigo-500 group-hover:mr-3 transition-all">→</span> Job Search
                        </a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center group">
                            <span class="mr-2 text-indigo-500 group-hover:mr-3 transition-all">→</span> Career Advice
                        </a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center group">
                            <span class="mr-2 text-indigo-500 group-hover:mr-3 transition-all">→</span> Resume Builder
                        </a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center group">
                            <span class="mr-2 text-indigo-500 group-hover:mr-3 transition-all">→</span> Salary Guide
                        </a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-white text-lg font-bold mb-6 border-b-2 border-indigo-600 pb-2 inline-block">Get In Touch</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start text-gray-400 text-sm">
                            <div class="h-8 w-8 bg-gray-800 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Email</p>
                                <a href="mailto:info@jobboard.com" class="hover:text-white transition-colors">info@jobboard.com</a>
                            </div>
                        </li>
                        <li class="flex items-start text-gray-400 text-sm">
                            <div class="h-8 w-8 bg-gray-800 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Phone</p>
                                <span>+1 (555) 123-4567</span>
                            </div>
                        </li>
                        <li class="flex items-start text-gray-400 text-sm">
                            <div class="h-8 w-8 bg-gray-800 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Address</p>
                                <span>123 Business St, Tech City</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-16 pt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} JobBoard. All rights reserved. Made with ❤️
                    </p>
                    <div class="flex flex-wrap justify-center gap-6 text-sm">
                        <a href="/privacy" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                        <a href="/terms" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                        <a href="/cookies" class="text-gray-400 hover:text-white transition-colors">Cookie Policy</a>
                        <a href="/sitemap" class="text-gray-400 hover:text-white transition-colors">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
