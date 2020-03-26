<a href="{{route('book.update', $book)}}">
    Edit
</a>

<a href="{{route('book.delete', $book)}}" class="delete-link" data-target="delete-form">
    Delete
</a>

<form action="{{route('book.delete', $book)}}" method="post" style="display: none" id="delete-form">
    @csrf
    @method('delete');
</form>

<h1>{{$book->name}}</h1>
<p>{{$book->year}}</p>

<script>
    let link = document.querySelector('.delete-link');
    let target = link.dataset.target;

    link.addEventListener('click', function (event) {
        event.preventDefault();
        document.getElementById(target).submit();
    });
</script>
