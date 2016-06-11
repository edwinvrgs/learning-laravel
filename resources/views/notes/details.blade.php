@extends('layout')

@section('content')
  <h2>Details of the note: {{ $note->id }}</h2>

  <hr>
  <p class="lead">{{ $note->note }}</p>

  <hr>

  <p><a href="{{ url('notes') }}">Return</a></p>
@endsection
