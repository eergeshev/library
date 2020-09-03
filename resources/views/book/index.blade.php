@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/book/create">create book</a>
            <table border="1" style="border-collapse: collapse;">
                <caption>Book</caption>
                <thead>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Description</th>
                </thead>
                <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->description}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection