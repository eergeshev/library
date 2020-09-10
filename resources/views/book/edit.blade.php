@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/book/{{$book->id}}" method="POST">
                @csrf
                @method("PUT")
                <div>
                    <label>Book title</label>
                    <input type="text" name="title" value="{{ old ('title') ?? $book->title }}"
                    autocomplete="title">
                </div>
                <div>
                    <label>Book description</label>
                    <input type="text" name="description" value="{{ old ('description') ?? $book->description }}"
                    autocomplete="description">
                </div>
                <div>
                    <label>Book isbn</label>
                    <input type="text" name="isbn" value="{{ old ('isbn') ?? $book->isbn }}" 
                    autocomplete="isbn">
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

@endsection