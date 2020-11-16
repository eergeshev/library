@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h2>Add new book</h2>
            </div>
            <hr>
            <form action="/bookinstances" method="POST">
                @csrf
                 <div>
                    <label>Book title</label>
                        <label for="title">Choose a book:</label>
                        <select name="book">
                            @foreach($books as $book)
                            <option name="book" value="{{ $book->id }}" id="{{ $book->id }}">{{$book->title}}</option>
                            @endforeach
                        </select>

                </div>
                <div>
{{--                  <div>--}}

{{--                    <label>Book status</label>--}}

{{--                    <select name="status" id="status" onchange="showHideDate()">--}}
{{--                            <option value="#">Choose an option:</option>--}}

{{--                            @foreach ($statuses as $status => $val)--}}
{{--                                <option value="{{$val}}">{{$val}}</option>--}}
{{--                            @endforeach--}}

{{--                    </select>--}}


{{--                </div>--}}
                    <div id="date-block">

                    </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
{{--<script>--}}
{{--    function showHideDate() {--}}
{{--        let status = document.getElementById("status").value;--}}
{{--        let date_block = document.getElementById("date-block");--}}
{{--        if (status === "lend") {--}}
{{--            date_block.style.display = "block";--}}
{{--            date_block.innerHTML = "<label>Book due back</label>\n" +--}}
{{--                "                        <input type=\"date\" name=\"due_back\">\n" +--}}
{{--                "\n" +--}}
{{--                "                        <hr>";--}}
{{--        } else {--}}
{{--            date_block.style.display = "none";--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
@endsection
