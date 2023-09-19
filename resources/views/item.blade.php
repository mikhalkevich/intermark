@extends('layouts.base')
@section('content')
<div class="pt-20 bg-[#2fb45d]" >
    <h1 class="text-center">Форма обратной связи</h1>
    <form class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
        <div class="p-2">
            <input type="text" id="name" class="w-full" placeholder="ФИО" name="name" />
        </div>
        <div class="p-2">
            <input type="text" id="phone" class="w-full" placeholder="Телефон" name="phone" />
        </div>
        <div class="p-2">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
  <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
      Green to blue
  </span>
            </button>
        </div>
        <div>&nbsp;</div>
    </form>

</div>
@endsection
