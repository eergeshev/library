@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/author/create">Create new author</a>
            @foreach ($authors as $author)
            <p>{{$author->name}}</p>
            <p>{{$author->birth_date}}</p>
            <p>{{$author->dead_date}}</p>
            <p>{{$author->bio}}</p>
            


                
            @endforeach

        </div>
    </div>
</div>

@endsection