@extends('layouts.app')
@section('title', '402+2')
@section('main')
<section>
    <div class="container flex items-center min-h-fit px-6 py-12 mx-auto" data-aos="fade-up">
        <div>
            <p class="text-sm font-medium text-blue-500">404 error</p>
            <h1 class="mt-3 text-2xl font-semibold text-gray-800 md:text-3xl">Page not found, maybe a typo?</h1>
            <p class="mt-4 text-gray-500 dark:text-gray-400">Sorry, that route seems wrong bruh.</p>

            <div class="flex items-center mt-6 gap-x-3">
                <a href="{{ url()->previous() }}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    <span>Go back</span>
                </a>

                <a href="{{ route('home') }}" class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600">
                    Take me home
                </a>
            </div>

            <div class="mt-10 space-y-6">
                <div>
                    <a href="#" class="inline-flex items-center text-sm text-blue-500 gap-x-2 hover:underline">
                        <span>Documentation</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>

                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Dive in to learn all about our product.</p>
                </div>

                <div>
                    <a href="#" class="inline-flex items-center text-sm text-blue-500 gap-x-2 hover:underline">
                        <span>Our blog</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>

                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Read the latest posts on our blog.</p>
                </div>

                <div>
                    <a href="#" class="inline-flex items-center text-sm text-blue-500 gap-x-2 hover:underline">
                        <span>Chat to support</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>

                    <p class="mt-2 text-sm text-gray-500">Our friendly team is here to help.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection