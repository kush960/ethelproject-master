@extends('layouts.app')

@section('content')
               
               
    <h1>Vitals</h1>

    @foreach ($my_vital_questions as $question)

        {{ $question->id }}
        {{ $question->name }}
        {{ $question->prompt }}

    @endforeach

@endsection