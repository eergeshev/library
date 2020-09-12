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

            <div>
                <h4>{{$lang->name}}</h4>
                {{-- <a href="language/{{$lang->id}}">delete</a> --}}
                <ul>
                    @foreach($lang->books as $b)
                        <li>{{$b->title}}</li>
                    @endforeach
                </ul>
            </div>

            <hr>

        @endforeach

        </div>
    </div>
</div>

@endsection