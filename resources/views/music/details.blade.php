<a href="{{route('music.update', $music)}}">
    Edit
</a>

<a href="{{route('music.delete', $music)}}" class="delete-link" data-target="delete-form">
    Delete
</a>

<form action="{{route('music.delete', $music)}}" method="post" style="display: none" id="delete-form">
    @csrf
    @method('delete');
</form>

<h1>{{$music->name}} - {{$music->author}}</h1>
<p>{{$music->duration}}</p>
<p>{{$music->quality}}HZ</p>

<script>
    let link = document.querySelector('.delete-link');
    let target = link.dataset.target;

    link.addEventListener('click', function (event) {
        event.preventDefault();
        document.getElementById(target).submit();
    });
</script>
