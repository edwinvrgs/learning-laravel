@extends('layout')

@section('content')
  <h2>Details of the note: {{ $note->id }}</h2>

  <p><a href="{{ url('notes') }}">Return</a></p>

  <p class="lead">{{ $note->note }}</p>
@endsection
