
@extends('try.app_try')

@section('title','Index Page')


@section('content')

<h1 class=" btn btn-danger"> Hello in Index Page </h1>

@foreach ($data as $data )
    <P>{{$data->username}} </P>
    <p>{{$data->email}}</p>
    <p>{{$data->password}}</p>
    <p>{{$data->created_at}}</p>
    <div class="btn-group" role="group">
    <a style="margin-right: 10px;" class=" btn btn-primary " href="{{route('edit.user',['id'=>$data->id])}}">Edit </a>
    <form action="{{route('delete.user',['id'=>$data->id])}}" method="POST" >
        @csrf
        @method('DELETE')
    <button class=" btn btn-danger" value="submit"> Delete</button>
    </form> 
</div>
    <hr>
@endforeach

@endsection






