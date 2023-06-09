@extends('welcome')
@section('content')
    <div class="container">
        <form action="{{route('update')}}" method="POST">
            @csrf
            <div class="form-group">
                
                <span><img src="{{asset('image/'. $data->image)}}" style="height:100px;width:100px;"/></span>
                <input type="file" name="image" class="form-control">

            </div>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
@endsection