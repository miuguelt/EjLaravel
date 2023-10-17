<x-layouts.app
    title="Nuevo Post"
>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" value="{{ old('title') }}"> <br>
    @error('title')
        <small>{{ $message }}</small> 
    @enderror
    <br>
    <button type="submit">Enviar</button>
</form>

<a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>