@props(['tagsCsv'])

@php
    $tags = explode(', ', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
        <li
            class="flex items-center justify-center bg-secondary text-white rounded-xl px-3 py-1 mr-2"
        >
            <a href="/?tag={{$tag}}">{{ strtoupper($tag) }}</a>
        </li>
    @endforeach
</ul>