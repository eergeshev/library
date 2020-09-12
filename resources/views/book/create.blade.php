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
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/books" method="POST">
                @csrf
                <div>
                    <label>Book title</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label>Book description</label>
                    <input type="text" name="description">
                </div>
                {{-- <div>
                    <label>Book language</label>
                    <select name="language_id" id="languages">
                        @foreach ($languages as $language)
                            <option value="{{$language->id}}" >{{$language->name}}</option>
                        @endforeach
                      </select>
                    
                </div> --}}

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
                    <label>Book isbn</label>
                    <input type="text" name="isbn">
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

@endsection