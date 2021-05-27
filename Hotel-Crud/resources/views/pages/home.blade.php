@extends('layouts.main-layout')
@section('content')

  <h1>Employee List:</h1>

  <a class="addnew" href="{{ route('create')}}">Add new employee</a>

  <ul>
    @foreach ($employees as $employee)
      <li>
        <a href="{{ route('show', $employee -> id) }}">
          {{ $employee -> firstname }}

          {{ $employee -> lastname }}

          <a href="{{route('destroy', $employee -> id)}}">
            &#10060;
          </a>
        </a>
      </li>
    @endforeach
  </ul>

@endsection
