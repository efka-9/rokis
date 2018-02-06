@extends('layout')

@section('content')

Issirink quiza:

@foreach ($quizes as $quiz)
  <a href="{{ route('question', ['question_id' => 1]) }}">
    {{ $quiz->name }}
  </a>
@endforeach

@stop
