@component('mail::message')
    # Hi!. New contact lead!
    __Name__ {{$lead->name}}<br />
    __Email__ {{$lead->email}}<br />
    __Phone__ {{$lead->phone}}<br />
    __Message__ <br />
    {{$lead->message}}
    <br />
    Thanks, <br />
    {{config('app.name')}}
@endcomponent
