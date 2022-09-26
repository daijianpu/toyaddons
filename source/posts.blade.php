@extends('_layouts.master')

@section('title', '新品情報')

@section('content')
    <h1>新品情報</h1>

    <ul>
        @forelse ($posts->sortBy('title', 'desc') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p><a href="/contact">お問い合わせ</a></p>
        @endforelse
    </ul>
@endsection
