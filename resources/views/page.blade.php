@extends('layouts.base')
@section('content')
    <h1 class="text-center text-3xl">{{$maintext->name}}</h1>
    <div class="p-2 shadow-2xl border-r-2 m-2">
        {!! $maintext->body !!}
    </div>
@endsection
