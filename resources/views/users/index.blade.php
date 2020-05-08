@extends('layout')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@section('content')
<h2>Index</h2>
<!-- <x-header/> -->
<table>
  <tr>
    <th>users_c_id</th>
    <th>users_c_first_name</th>
    <th>users_c_last_name</th>
    <th>edit</th>
    <th>view</th>
    <th>delete</th>
  </tr>
    @foreach($list as $item)
        <tr>
            <td>{{ $item->users_c_id }}</td>
            <td>{{ $item->users_c_first_name }}</td>
            <td>{{ $item->users_c_last_name }}</td>
            <td>edit link</td>
            <td>view link</td>
            <td>delete link</td>
        </tr>
    @endforeach
</table>
@endsection
