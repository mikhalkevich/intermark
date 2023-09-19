@extends('layouts.base')
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
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
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
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
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
        <div class="border-1 shadow-2xl m-3 grid grid-cols-1 md:grid-cols-2">
            <div class="h-52 w-full bg-gray-100"></div>
            <div class="h-52 w-full bg-white">
                <p class="text-sm pt-2 pl-2">ID: GRD123</p>
                <p class="text- pt-2 pl-2"><a href="#" class="text-orange-950 hover:opacity-75">Греция</a>, <a href="#"
                                                                                                               class="text-orange-950 hover:opacity-75">Крит</a>,
                    <a href="#" class="text-orange-950 hover:opacity-75">Элунда</a></p>
                <p class="text-sm pt-2 pl-2">Цена по запросу</p>
                <p class="text-sm pt-2 pl-2"><a href="#" class="text-orange-950 hover:opacity-75">
                        Великолепная вилла с 6 спальнями с отдельным гостевым домом. Вилла расположена в клубном поселке
                        на 10 вилл с собственным частным пляжем и сервисом 5* отеля.
                    </a></p>
                <ul class="grid grid-cols-3 text-sm">
                    <li class="text-center p-2 text-orange-950 hover:opacity-75">ВИЛЛА</li>
                    <li class="text-center p-2">Площадь: 542 м<sup>2</sup></li>
                    <li class="text-center p-2">Спален: <b>6</b></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
