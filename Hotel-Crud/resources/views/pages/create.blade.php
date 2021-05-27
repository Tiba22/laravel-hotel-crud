@extends('layouts.main-layout')
@section('content')

  <h1>New Employee</h1>

  <form method="POST" class="" action="{{route('store')}}">

    @csrf
    @method('POST')
    <label for="firstname">Firstname</label>
    <input id="firstname" type="text" name="firstname" value="">

    <label for="lastname">Lastname</label>
    <input id="lastname" type="text" name="lastname" value="">

    <label for="role">Role</label>
    <input id="role" type="text" name="role" value="">

    <label for="ral">Ral</label>
    <input id="ral" type="text" name="ral" value="">

    <br>

    <button type="submit" name="button">
      ADD
    </button>
  </form>





@endsection
