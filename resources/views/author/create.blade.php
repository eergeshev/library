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
            <div>
                <h2>Add new Auhthor</h2>
            </div>
            <hr>
            <form action="/authors" method="POST">
                @csrf
                                <div>
                    <label>Author name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>BirthDate</label>
                    <input type="date" name="birth_date">

                    <label>DeadDate</label>
                    <input type="date" name="dead_date">
                </div>
                <div>
                    <label>Bio</label>
                    <input type="text" name="bio">

                </div>
                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                      <select>
                        <option>Select an option</option>
                      </select>
                      <div class="overSelect"></div>
                    </div>

                    <div id="checkboxes">
                    @foreach($books as $book)
                      <label for="{{ $book->id}}">
                        <input type="checkbox" name='books[]' value ="{{ $book->id }}"  id="{{ $book->id }}"/> {{ $book->title }} </label>
                 
                    @endforeach
                    </div>
                  </div>

                

                
                
                <input type="submit" value="Submit">
            </div>
            </form>
        </div>
    </div>
</div>

@endsection