<div x-data="map()" x-init="initComponent({{ json_encode($monuments) }})">
    <div x-ref="map" class="relative h-[600px] overflow-clip rounded-md border border-slate-300 shadow-lg">
        <div class="absolute top-2 right-8 z-10 rounded-md bg-white bg-opacity-75">
            <div class="ol-unselectable ol-control">
                <button x-on:click.prevent="legendOpened = ! legendOpened" title="Open/Close details"
                        class="absolute inset-0 flex items-center justify-center">
                    <!-- Heroicon name: outline/globe -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pl-0.5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
        </div>
        <div x-cloak x-show="legendOpened" x-transition:enter="transition-opacity duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity duration-300" x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute right-0 top-16 left-2 bottom-2 z-10 max-w-sm rounded-md border border-slate-300 bg-white bg-opacity-50 shadow-sm">


            <div class="absolute inset-1 overflow-y-auto rounded-md bg-white bg-opacity-75 p-2 pt-1">
                <div class="flex items-center justify-between pr-1">
                    <!-- We will have 2 tabs, so let's put 2 titles that will also change the activeTab on click -->
                    <div class="flex justify-start space-x-4">
                        <h4 x-on:click.prevend="activeTab = 'legend'" class="cursor-pointer text-slate-700"
                            x-bind:class="activeTab === 'legend' && 'font-bold'">Недвижимость</h4>
                        <h4 x-on:click.prevend="activeTab = 'monuments'" class="cursor-pointer text-slate-700"
                            x-bind:class="activeTab === 'monuments' && 'font-bold'">Зарубежная</h4>
                        <h4 x-on:click.prevend="activeTab = 'new'" class="cursor-pointer text-slate-700"
                            x-bind:class="activeTab === 'new' && 'font-bold'">Добавить</h4>
                    </div>
                    <button x-on:click.prevent="legendOpened = false"
                            class="mb-1 text-2xl font-black text-slate-400 transition hover:text-[#3369A1] focus:text-[#3369A1] focus:outline-none">&times;</button>
                </div>
                <ul x-show="activeTab === 'legend'" x-transition:enter="transition-opacity duration-150"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-150" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="mt-2 p-1 space-y-1 rounded-md border border-slate-300 bg-white">
                    <template x-for="(layer, index) in map.getAllLayers().reverse()" :key="index">
                        <li class="flex items-center px-2 py-1">
                            <div x-id="['legend-checkbox']">
                                <label x-bind:for="$id('legend-checkbox')" class="flex items-center">
                                    <input type="checkbox" x-bind:checked="layer.getVisible()"
                                           x-bind:id="$id('legend-checkbox')"
                                           x-on:change="layer.setVisible(!layer.getVisible())"
                                           class="rounded border-slate-300 text-[#3369A1] shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <span class="ml-2 text-sm text-slate-600" x-text="layer.get('label')"></span>
                                </label>
                                <template x-if="layer.get('label') === 'Monuments' && layer.getVisible()">
                                    <div class="mt-2 ml-6 text-sm text-slate-600">
                                        <template x-for="(feature, index) in layer.getSource().getFeatures()"
                                                  :key="index">
                                            <a href="#" :title="'Go to '  feature.get('name')"
                                               x-text="feature.get('name')" x-on:click.prevent="gotoFeature(feature)"
                                               class="block hover:underline hover:text-slate-800 focus:outline-none focus:underline focus:text-slate-800 transition">
                                            </a>
                                        </template>
                                    </div>
                                </template>

                                <template x-if="layer.get('label') === 'Дома' && layer.getVisible()">
                                    <div class="mt-2 ml-6 text-sm text-slate-600">
                                        <template x-for="(feature, index) in layer.getSource().getFeatures()"
                                                  :key="index">
                                            <a href="#" :title="'Go to '  feature.get('name')"
                                               x-text="feature.get('name')" x-on:click.prevent="gotoFeature(feature)"
                                               class="block hover:underline hover:text-slate-800 focus:outline-none focus:underline focus:text-slate-800 transition">
                                            </a>
                                        </template>
                                    </div>
                                </template>
                            </div>

                        </li>
                    </template>
                </ul>
                <div x-show="activeTab === 'monuments'" x-transition:enter="transition-opacity duration-150"
                     x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                     x-transition:leave="transition-opacity duration-150" x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0" class="mt-2 p-1 rounded-md border border-slate-300 bg-white">
                    <livewire:items.index />
                </div>
                <div x-show="activeTab === 'new'" x-transition:enter="transition-opacity duration-150"
                     x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                     x-transition:leave="transition-opacity duration-150" x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0" class="mt-2 p-1 rounded-md border border-slate-300 bg-white">
                    <livewire:items.create />
                </div>
            </div>
        </div>
    </div>
</div>

@once
    @push('styles')
        @vite(['resources/css/components/map.css'])
    @endpush
    @push('scripts')
        @vite(['resources/js/components/map.js'])
    @endpush
@endonce
