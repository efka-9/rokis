@extends('layout')

@section('content')

Klausimas: <br>

{{ $question->name }} <br>

Atsakymai: <br>

<form action="{{ route('next') }}" method="POST">
  @foreach($question->answers as $answer)
    <input type="radio" name="answer" value="{{ $answer }}">{{ $answer->value }} <br>
  @endforeach

  {{ csrf_field() }}
  <input type="hidden" name="question" value="{{ $question }}">

  <button type="submit">Next</button>
</form>

@stop
