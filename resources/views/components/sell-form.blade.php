<div class="text">
    <form
        class="grid px-4 py-5 mx-auto text-gray-900 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 md:px-6">
        <div class="p-2 col-span-2 grid grid-cols-2">
            <input id="search" class="w-full block h-10" placeholder="Место, адрес" type="text" />
            <div id="answer" class="pl-10 text-left">
                <p>.</p>
            </div>
        </div>
        <div class="p-2">
            <select class="p-2 w-full">
                <option>Тип объекта</option>
                <option>Новостройки</option>
                <option>Квартиры</option>
                <option>Пентхаусы</option>
                <option>Аппартаменты</option>
                <option>Резиденции</option>
                <option>Пентхаусы</option>
            </select>
        </div>

        <div class="col-span-2 p-2">
            <select class="p-2 w-36">
                <option>Страна</option>
                <option>Индонезия</option>
                <option>Испания</option>
                <option>Маршалские острава</option>
            </select>
            <input type="number" class="w-24 p-2" name="price_form" min="0" max="100000" placeholder="от,$"
                   id="price_form"/>
            <input type="number" class="w-24 p-2" name="price_to" min="100" max="100000000" placeholder="до"
                   id="price_to"/>
        </div>
        <div class="p-2">
            <input type="submit" name="search" id="search" value="Искать"
                   class="ml-1 w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white"/>
        </div>
    </form>
</div>
