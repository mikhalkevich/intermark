@foreach($items as $item)
<div class="border-1 shadow-2xl m-3 grid grid-cols-1 md:grid-cols-2">
    <div class="h-52 w-full bg-gray-100"></div>
    <div class="h-52 w-full bg-white">
        <p class="text-sm pt-2 pl-2">ID: {{$item->id}}</p>
        <p class="text- pt-2 pl-2"><a href="#?country_id={{$item->country_id}}" class="text-orange-950 hover:opacity-75">Греция</a>, <a href="#"
                                                                                                       class="text-orange-950 hover:opacity-75">Крит</a>,
            <a href="#" class="text-orange-950 hover:opacity-75">Элунда</a></p>
        <p class="text-sm pt-2 pl-2">{{$item->price}}</p>
        <p class="text-sm pt-2 pl-2"><a href="#" class="text-orange-950 hover:opacity-75">
                {{$item->name}}
            </a></p>
        <ul class="grid grid-cols-3 text-sm">
            <li class="text-center p-2 text-orange-950 hover:opacity-75">{{$item->type}}</li>
            <li class="text-center p-2">Площадь: {{$item->square}} м<sup>2</sup></li>
            <li class="text-center p-2">Спален: <b>{{$item->rooms}}</b></li>
        </ul>
    </div>
</div>
@endforeach
