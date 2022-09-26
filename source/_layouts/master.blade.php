<!DOCTYPE html>
<html lang="{{ $page->language ?? 'ja' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav>
                <nav>
                <a href="/">
  <img src="https://img.alicdn.com/imgextra/i3/2710706468/O1CN019ZXous1xeOUxVpEr8_!!2710706468.jpg" width="75"/>
</a><br>
                <ul>
                    <li><a href="/">トップページ</a></li>
                    <li><a href="/list">商品一覧</a></li>
                    <li><a href="/posts">新品情報</a></li>
                     <li><a href="/order">ご注文方法</a></li>
                     <li><a href="/contact">お問い合わせ</a></li>
                     <li><a href="/about">会社概要</a></li>
                </ul>
                <hr>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
        <hr>
            <small>
             &copy; <span data-year></span>&bull;<a href="/about">ToyAddons</a> All rights reserved.
               &bull;<a href="/contact">お問合せ</a>
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
