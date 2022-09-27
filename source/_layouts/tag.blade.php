@extends('_layouts.master')

@section('title', "Tags '{$page->name()}'")

@section('content')
    <h1>Tags'{{ $page->name() }}'</h1>
<hr style="border-color: silver"/>
    <ul>
        @forelse ($posts->filter->hasTag($page->name()) as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate('Y-m-d') }}</small>
            </li>
        @empty
            <p><a href="/contact">お問い合せは</a></p>
        @endforelse
    </ul>
@endsection
