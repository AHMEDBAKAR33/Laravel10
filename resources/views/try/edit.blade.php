@extends('try.app_try')

@section('title','Edit')

@section('content')

   
    @foreach ($data as $data )

        <form action="" method="post">
            @csrf
            @method('put')
            <input type="text" name="username" value="{{$data->username}}">
            <hr>
            <input type="email" name="email" value="{{$data->email}}">
            <hr>
            <input type="date" name="created_at" >
            <hr>
            <input class=" btn btn-primary " type="submit" value="submit">

        </form>
        
    @endforeach

    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

        
@endsection

