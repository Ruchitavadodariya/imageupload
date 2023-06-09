@extends('welcome')
@section('content')
    <div class="container">
        {{$errors}}
        <form action="{{route('store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="file" name="image" id="image">
            <input type="submit" name="submit" id="submit">
        </form>
@endsection