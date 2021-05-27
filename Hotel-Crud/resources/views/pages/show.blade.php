@extends('layouts.main-layout')
@section('content')

  <h1>Employee Selected:</h1>

  <h2>
    {{ $employee -> firstname }}
    {{ $employee -> lastname }}
  </h2>

  <h3>
    {{ $employee -> role }}
  </h3>

  <h3>
    {{ $employee -> ral }}
  </h3>
@endsection
