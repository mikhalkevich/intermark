<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    @stack('styles')
</head>
<body class="antialiased bg-white-200">

<div class="container px-4 mx-auto flex flex-wrap items-center justify-between mb-3 relative z-10">
    <div class="flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">

    </div>
    <div class="flex lg:flex-grow items-center" id="example-navbar-info">
        <ul class="flex flex-row lg:flex-row list-none ml-auto">
            <li class="nav-item">
                <button
                    class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-500 hover:opacity-75"
                    type="button">
                    Хотите продать или сдать недвижимость?
                </button>
            </li>
            <li class="nav-item">
                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-orange-950 hover:opacity-75"
                   href="#pablo">
                    Обратитесь к нам!
                </a>
            </li>
            <li class="nav-item">
                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-500 hover:opacity-75"
                   href="#pablo">
                    <img src="http://185.154.193.112/img/phone.png"> +7 (495) 252 00 99
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="w-full absolute z-10">
    <nav class="m-4 mt-1 ml-10  rounded-b bg-gray-200 border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="/intermarklogo100x100.svg" class="absolute -top-8 left-3 mr-3 z-0" alt="Intermark logo"/>
            </a>
            <button data-collapse-toggle="mega-menu-full" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="mega-menu-full" aria-expanded="false">
                <span class="sr-only">Открыть меню</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div id="mega-menu-full" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col m-2 pt-0 pb-0 font-medium md:flex-row md:space-x-8 md:mt-0">
                    <li>
                        <button data-dropdown-toggle="home" data-dropdown-trigger="hover"
                                class="mega-menu-link flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent"
                                type="button">
                            Недвижимость
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="home"
                             class="z-10 w-full hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <div
                                class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
                                <ul aria-labelledby="mega-menu-full-dropdown-button">
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Новостройки</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Квартиры</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Дома</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Апартаменты</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Пентхаусы</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Жилые комплексы</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="hidden md:block">
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Резиденции</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </li>
                    <li>
                        <button data-dropdown-toggle="city" data-dropdown-trigger="hover"
                                class="mega-menu-link flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent"
                                type="button">
                            Зарубежная
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="city"
                             class="z-10 w-full hidden bg-white divide-gray-100 rounded-lg shadow">
                            <div
                                class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
                                <div class="text-3xl">Зарубежная недвижимость</div>
                                <ul aria-labelledby="mega-menu-full-dropdown-button">
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Купить</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Продать</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Популярные направления</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Арендавать</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Сдать</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Популярные страны</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button data-dropdown-toggle="country" data-dropdown-trigger="hover"
                                class="mega-menu-link flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent"
                                type="button">
                            Купить
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="country"
                             class="z-10 w-full hidden bg-white divide-y divide-gray-100 rounded-lg shadow">
                            <div
                                class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
                                <div class="text-3xl">Купить недвижимость</div>
                                <ul aria-labelledby="mega-menu-full-dropdown-button">
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Купить</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Продавцы</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Страны</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Направления</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Элитная недвижимость</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Популярные направления</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button data-dropdown-toggle="foraign" data-dropdown-trigger="hover"
                                class="mega-menu-link flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent"
                                type="button">
                            Арендавать
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="foraign"
                             class="z-10 w-full hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <div
                                class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
                                <div class="text-3xl">Арендавать недвижимость</div>
                                <ul aria-labelledby="mega-menu-full-dropdown-button">
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Купить</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Элитная недвижимость</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Популярные направления</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Новостройки</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Дома</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Популярные направления</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button data-dropdown-toggle="com" data-dropdown-trigger="hover"
                                class="mega-menu-link flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent"
                                type="button">
                            Собственникам
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="com"
                             class="z-10 w-full hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <div
                                class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
                                <div class="text-3xl">Собственникам</div>
                                <ul aria-labelledby="mega-menu-full-dropdown-button">
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Сдать</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Продать</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Популярные направления</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Элитная недвижимость</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Реклама</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block p-3 rounded-lg hover:bg-gray-50">
                                            <div class="font-semibold">Популярные направления</div>
                                            <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a data-dropdown-toggle="dropdown"
                           class=" flex items-center text-xs uppercase font-bold leading-snug text-gray-500 hover:opacity-75">
                            <img src="/img/Rus_40.jpg"/>
                        </a>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                             class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow"
                             style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(940px, 55px);"
                             data-popper-placement="bottom">
                            <img src="/img/Eng_40.jpg"/>
                        </div>

                    </li>
                    <li>
                        @if(auth()->guest())
                        <a href="/login">Login</a>
                        <a href="/register">Register</a>
                        @else
                            <a href="{{asset('dashboard')}}">Dashboard</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="mt-20">
@yield('content')
</div>
<div class=" bg-gray-300 p-20">
    <div class="content-center grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
        <div>
            <div class="text-2xl">Полезные ссылки</div>
            <ul>
                <li><a href="#" class=" leading-snug text-orange-950 hover:opacity-75">Недвижимость Индонезии</a></li>
                <li><a href="#" class=" leading-snug text-orange-950 hover:opacity-75">Виза в США</a></li>
                <li><a href="#" class=" leading-snug text-orange-950 hover:opacity-75">Недвижимость </a></li>
                <li><a href="#" class=" leading-snug text-orange-950 hover:opacity-75">Аренда яхт</a></li>
                <li><a href="#" class=" leading-snug text-orange-950 hover:opacity-75">Недвижимость Китая</a></li>
            </ul>
        </div>
        <div>
            <div class="text-2xl">Услуги</div>
            <div class="text-sm">Компания
                <a class=" text-xs uppercase font-bold leading-snug text-orange-950 hover:opacity-75"
                   href="#pablo">
                    Intermark</a> <a class=" leading-snug text-orange-950 hover:opacity-75"
                                     href="#pablo">Real Estate</a>

                предоставляет услуги в сфере недвижимости <br />
                Политика кофиденциальности</div>
        </div>
        <div>
            <div class="text-2xl">О компании</div>
            <ul>
                <li><a href="{{asset('command')}}" class=" leading-snug text-orange-950 hover:opacity-75">Команда</a></li>
                <li><a href="{{asset('press')}}" class=" leading-snug text-orange-950 hover:opacity-75">Пресса</a></li>
                <li><a href="{{asset('events')}}" class=" leading-snug text-orange-950 hover:opacity-75">Мероприятия</a></li>
                <li><a href="{{asset('vacancy')}}" class=" leading-snug text-orange-950 hover:opacity-75">Вакансии</a></li>
                <li><a href="{{asset('client')}}" class=" leading-snug text-orange-950 hover:opacity-75">Клиентам</a></li>
            </ul>
        </div>
        <div>
            <div class="text-center">Контакты</div>
        </div>
    </div>
    <div class="text-center pt-10">&copy; 2023</div>
</div>
</body>
</html>
