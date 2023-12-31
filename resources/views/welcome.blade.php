@extends('layouts.base')
@push('scripts')
    <script src="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script>
    @vite('resources/js/map.js')
@endpush
@push('styles')
    <link href="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.css" rel="stylesheet" />
@endpush
@section('content')
    <div id="default-carousel" class="relative rounded w-full top-0 left-0 z-0" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                 data-carousel-item="">
                <div class="absolute top-1/2 text-center w-full text-2xl font-semibold text-white z-20">
                    <div>Полный сперкт услуг</div>
                    <div>По подбору недвижимости</div>
                </div>
                <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                     class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">

            </div>
            <!-- Item 2 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                 data-carousel-item="">
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg"
                     class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform z-10 -translate-x-full"
                 data-carousel-item="">
                <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                     class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
        </div>
         Slider controls -->
        <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev="">
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  stroke-width="2"
                                                                                  d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next="">
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  stroke-width="2"
                                                                                  d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
    <div class="m-3 p-3 bg-gray-100 z-30">
        <x-sell-form></x-sell-form>
    </div>
    <div class="content-center">
        @include('includes.items')
    </div>
@endsection
