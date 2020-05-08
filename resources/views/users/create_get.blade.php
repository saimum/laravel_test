@extends('layout')
@section('content')

<h2>Create</h2>
<!-- <x-header/> -->
@if(isset($message))         
  <h3>{{$message}}</h>
@endif
<form method="post" action="/users/create_post">
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