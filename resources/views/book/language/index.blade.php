@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="/language" method="post">
            @csrf
            <input type="text" name='name'>
            <button>Submit</button>

        </form>

        <hr>

        @foreach($languages as $lang)

        <p><h4>{{$lang->name}}</h4> <a href="language/{{$lang->id}}">delete</a></p>

        <hr>
        

        @endforeach

        </div>
    </div>
</div>

@endsection