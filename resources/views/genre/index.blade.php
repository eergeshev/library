@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="/genre" method="post">
            @csrf
            <input type="text" name='name'>
            <button>Submit</button>

        </form>

        <hr>

        @foreach($genres as $genre)

            <div>
                <h4>{{$genre->name}}</h4>
                <a href="genre/{{$genre->id}}">delete</a>
                {{-- <ul>
                    @foreach($genre->books as $b)
                        <li>{{$b->title}}</li>
                    @endforeach
                </ul> --}}
            </div>

            <hr>

        @endforeach

        </div>
    </div>
</div>

@endsection