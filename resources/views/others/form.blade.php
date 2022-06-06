@extends('main.home')
@section('content')
  
<form action="" method="post">
  {{@csrf_field()}}
  <label for="name">Name:</label><br>
  <input type="text"  name="name" value="{{old('name')}}"><br>
  @error("name")
        <span class="text-danger">{{$message}}</span><br>
  @enderror
  <label for="id">ID:</label><br>
  <input type="text"  name="id" value="{{old('id')}}"><br>
  @error('id')
        <span class="text-danger">{{$message}}</span><br>
  @enderror
  <label for="price">Price:</label><br>
  <input type="text"  name="price" value="{{old('price')}}"><br>


  @error('price')
        <span class="text-danger">{{$message}}</span><br><br>
  @enderror
  <input type="submit" value="Submit">
</form>


@endsection

