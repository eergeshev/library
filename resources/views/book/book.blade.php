@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h2>{{$book->title}}</h2>
                @foreach ($book->authors as $author)
                <h2>{{$author->name}}</h2>
                @endforeach

                <p><strong>Description</strong></p>
                <p>{{$book->description}}</p>
                <p><strong>ISBN:</strong>  {{$book->isbn}}</p>
                <div>
                    <h4>Languages</h4>
                @foreach($book->languages as $lang)
                    <ul>
                        <li>{{$lang->name}}</li>
                    </ul>
                @endforeach
                 </div>
                <hr>
                <div>
                    <h4>Genres</h4>
                @foreach($book->genres as $genre)
                    <ul>
                        <li>{{$genre->name}}</li>
                    </ul>
                @endforeach
                </div>
                <hr>
                <div>
                    <h4>Book instances</h4>

                    @foreach($book->book_instances as $instance)
                        @if ($instance->status == "lend")
                            <p>{{$instance->due_back}} --- {{$instance->status}}</p>
                        @else
                            <p>{{$instance->status}}</p>
                        @endif

                    @endforeach
                </div>
            </div>


        </div>
    </div>
</div>

@endsection
