@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/book" method="POST">
                @csrf
                <div>
                    <label>Book title</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label>Book description</label>
                    <input type="text" name="description">
                </div>
                <div>
                    <label>Book language</label>
                    <select name="language_id" id="languages">
                        @foreach ($languages as $language)
                            <option value="{{$language->id}}" >{{$language->name}}</option>
                        @endforeach
                      </select>
                    
                </div>
                <div>
                    <label>Book isbn</label>
                    <input type="text" name="isbn">
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

@endsection