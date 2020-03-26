<a href="{{route('music.create')}}">Create Music</a>

<ul>
@foreach($musics as $music)
    <li>
        <a href="{{route('music.details', $music)}}">{{$music->name}} - {{$music->author}}</a>
    </li>
@endforeach
</ul>
