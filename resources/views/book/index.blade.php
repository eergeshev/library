@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/book/create">create book</a>
            <hr>
            <h2 style="align-item-center">Books</h2>
            <table border="1" style="border-collapse: collapse;">
                <thead>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Description</th>
                    <th>Language</th>
                    <th>Genres</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach ($books as $book)
                <tr>
                    <td><a href="/book/{{$book->id}}">{{$book->title}}</a></td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->description}}</td>

                    <td>
                        <ul>
                            @foreach($book->languages as $b)
                            <li>{{$b->name}}</li>
                            @endforeach
                        </ul>
                    </td>

                    <td>
                        <ul>
                            @foreach($book->genres as $b)
                            <li>{{$b->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <script>
                        $(document).ready()
                    </script>

                    <td><a href="book/{{ $book->id }}/edit">Edit</a></td>
                    <td><a href="book/{{$book->id }}">Delete</a></td>
                </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
