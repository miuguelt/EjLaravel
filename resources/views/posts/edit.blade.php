<x-layouts.app
    title="Nuevo Post"
>

<form action="{{ route('posts.update', $post)}}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="title" value="{{ old('title', $post->title)}}"> <br>
    @error('title')
        <small>{{ $message }}</small> 
    @enderror
    <br>
    <button type="submit">Enviar</button>
</form>

<a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>