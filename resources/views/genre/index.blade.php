@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h2>Add new genre</h2>
            </div>
          <form action="/genre" method="post">
            @csrf
            <input type="text" name='name'>
            <button>Submit</button>

        </form>

        <hr>
        <div>
            <h3>List of genres</h3>
        </div>
        <hr>
        @foreach($genres as $genre)

            <div class="d-flex pl-3 ">
                <h4>{{$genre->name}}</h4>
                
                <div class="row">
                    <ul>
                        @foreach($genre->books as $b)
                            <li>{{$b->title}}</li>
                        @endforeach
                    </ul>
                </div>
                <a href="genre/{{$genre->id}}" style="margin-left: 100px">delete</a>
            </div>

            <hr>
            

        @endforeach

        </div>
    </div>
</div>

@endsection