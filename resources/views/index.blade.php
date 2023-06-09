@extends('welcome')
@section('content')

<div class="container">
        <a href="{{route('create')}}">Add</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    
                    <th scope="row">{{$item->id}}</th>
                    <td><img src="{{asset('images/'.$item->image)}}"></td>
                    <td><a href="">Delete</a></td>
                  </tr>      
                @endforeach
              
              
            </tbody>
          </table>
    </div>
@endsection