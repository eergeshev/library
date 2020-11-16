@extends('layouts.app')

<script>
    var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>

<script>
    var expanded = false;

    function showCheckboxess() {
        var checkboxes1 = document.getElementById("checkboxes1");
        if (!expanded) {
            checkboxes1.style.display = "block";
            expanded = true;
        } else {
            checkboxes1.style.display = "none";
            expanded = false;
        }
    }
</script>

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

                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                        <select>
                            <option>Select an option</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>

                    <div id="checkboxes">
                        @foreach($languages as $language)
                            <label for="{{ $language->id}}">
                                <input type="checkbox" name='languages[]' value ="{{ $language->id }}"  id="{{ $language->id }}"/> {{ $language->name }} </label>

                        @endforeach
                    </div>
                </div>

                <div>

                    <hr>

                    <div class="multiselect">
                        <div class="selectBox" onclick="showCheckboxess()">
                            <select>
                                <option>Select an option</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>

                        <div id="checkboxes1">
                            @foreach($genres as $genre)
                                <label for="{{ $genre->id}}">
                                    <input type="checkbox" name='genres[]' value ="{{ $genre->id }}"  id="{{ $genre->id }}"/> {{ $genre->name }} </label>

                            @endforeach
                        </div>
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
