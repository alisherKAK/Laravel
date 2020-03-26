<a href="{{route('book.create')}}">Create Book</a>

<ul>
@foreach($books as $book)
    <li>
        <a href="{{route('book.details', $book)}}">
            {{$book->name}}
        </a>
    </li>
@endforeach
</ul>
