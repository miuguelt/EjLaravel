<x-layouts.app
    title="Blog"
>
    @if (session('mensaje'))
        {{ session('mensaje') }}
    @endif

    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Crear nuevo Post</a>
    @foreach ($post as $item)
    <div style="display: flex; align-items: baseline">
        <h1> <a href="{{ route('posts.show', $item) }}">{{ $item->title }}</a></h1> <br>

        <a href="{{ route('posts.edit', $item) }}">Editar</a> 

        <form action="{{ route('posts.destroy', $item) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Eliminar">
        </form>
        
        <a href="{{ route('posts.destroy', $item) }}">Eliminar</a> 
    </div>
    @endforeach
</x-layouts.app>