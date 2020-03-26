<form action="{{isset($music) ? route('music.update', $music) : route('music.create.post')}}" method="post">
    @csrf
    @if($music ?? false)
        @method('put')
    @endif

    <div>
        <input type="text" name="name"
               value="{{old('name') ?? ($music->name ?? '')}}"
               placeholder="Enter name">
        @error('name')
        <small style="color: tomato">
            {{$message}}
        </small>
        @enderror
    </div>
    <div>
        <input type="text" name="author"
               value="{{old('author') ?? ($music->author ?? '')}}"
               placeholder="Enter author">
        @error('author')
        <small style="color: tomato">
            {{$message}}
        </small>
        @enderror
    </div>
    <div>
        <input type="time" name="duration"
               value="{{old('duration') ?? ($music->duration ?? '')}}">
        @error('duration')
        <small style="color: tomato">
            {{$message}}
        </small>
        @enderror
    </div>
    <div>
        <input type="number" name="quality"
               value="{{old('quality') ?? ($music->quality ?? '')}}">
        @error('quality')
        <small style="color: tomato">
            {{$message}}
        </small>
        @enderror
    </div>
    <button>Save</button>
</form>
