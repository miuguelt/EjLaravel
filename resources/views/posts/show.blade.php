
<x-layouts.app
    :title="$post->title"
>
    @if (session('mensaje'))
            {{ session('mensaje') }}
    @endif
    
    <h1>{{ $post->title }}</h1>
    <a href="/blog">Regresar</a>

</x-layouts.app>