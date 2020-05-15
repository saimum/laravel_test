@extends('layout')
@section('content')

<x-header title="Session Get Page"/>

@if(isset($confirmation_message))         
  <h3>{{$confirmation_message}}</h3>
@endif

<form method="post" action="/users/set_session_post">
  {{csrf_field()}}
  <label for="users_c_first_name">First name:</label>
  <input type="text" id="users_c_first_name" name="users_c_first_name" value= "{{ isset($model) ? $model['users_c_first_name'] : '' }}"><br>
  @error('users_c_first_name')
  {{$message}}<br><br>
  @enderror
  <label for="users_c_last_name">Last name:</label>
  <input type="text" id="users_c_last_name" name="users_c_last_name" value= "{{ isset($model) ? $model['users_c_last_name'] : '' }}"><br>
  @error('users_c_last_name')
  {{$message}}<br><br>
  @enderror
  <input type="submit" value="Submit">
</form> 
@endsection