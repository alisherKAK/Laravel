<form action="{{isset($book) ? route('book.update.put', $book) : route('book.create.post')}}" method="post">
    @csrf
    @if($book ?? false)
        @method('put')
    @endif
    <div>
        <input type="text" name="name"
               value="{{old('name') ?? ($book->name ?? '')}}"
               placeholder="Enter name">
        @error('name')
        <small style="color: tomato">
            {{$message}}
        </small>
        @enderror
    </div>
    <div>
        <input type="number" name="year"
               value="{{old('year') ?? ($book->year ?? '')}}"
               placeholder="Enter year">
        @error('year')
        <small style="color: tomato">
            {{$message}}
        </small>
        @enderror
    </div>
    <button>Save</button>
</form>
