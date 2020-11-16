@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div>
            <h2>Add new Language</h2>
        </div>
            
          <form action="/language" method="post">
            @csrf
            <input type="text" name='name'>
            <button>Submit</button>

          </form>

        <hr>

        <div class="text-align-center">
            <h3>List of languages</h3>
        </div>
        <hr>
        @foreach($languages as $lang)

            <div class="d-flex pl-3">
                <h4>{{$lang->name}}</h4>
                
                <div>
                    <ul>
                        @foreach($lang->books as $b)
                            <li>{{$b->title}}</li>
                        @endforeach
                    </ul>
                </div>
                <a href="language/{{$lang->id}}" style="margin-left: 100px">delete</a>
            </div>

            <hr>

        @endforeach

        </div>
    </div>
</div>

@endsection