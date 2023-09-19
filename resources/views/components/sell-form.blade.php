<div class="text">
    <form
        class="grid px-4 py-5 mx-auto text-gray-900 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 md:px-6">
        <div class="p-2">
            <input type="text" class="w-full" name="address" id="address" placeholder="Место, адрес"/>
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
            <select class="w-24 p-2">
                <option>$</option>
                <option>руб</option>
                <option>%</option>
            </select>
            <input type="number" class="w-24 p-2" name="price_form" min="0" max="100000" placeholder="от"
                   id="price_form"/>
            <input type="number" class="w-24 p-2" name="price_to" min="100" max="100000000" placeholder="до"
                   id="price_to"/>
        </div>

        <div class="p-2 grid grid-cols-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6 m-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
            </svg>
            <input type="submit" name="search" id="search" value="Искать"
                   class="ml-1 w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white"/>
        </div>
    </form>
</div>
