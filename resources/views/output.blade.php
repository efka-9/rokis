@extends('layout')

@section('content')

Viskas rokai, taip taip. Vat tiek vat taskeliu {{ $points }} <br>

Taip pat buvo tokie atsakymai: <br>

@foreach($answers as $answer)
  Klausimas: {{ $answer->question->name }} <br>
  Atsakymas: {{ $answer->value }} <br>
@endforeach

@stop
