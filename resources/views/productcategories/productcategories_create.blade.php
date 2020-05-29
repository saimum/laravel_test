@extends('theme_layout')
@section('content')        

<form method="post" action="/productcategories/productcategories_create">
  {{csrf_field()}}
  <div class="form-group">
    <label for="productcategory_title">productcategory_title</label>
    <input name="productcategory_title" id="productcategory_title" type="text" class="form-control"   placeholder="productcategory_title">
  </div>
  <div class="form-group">
    <label for="productcategory_description">productcategory_description</label>
    <input name="productcategory_description" id="productcategory_description" type="text" class="form-control"   placeholder="productcategory_title">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection