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
                <li><a href="/tag">分類Category</a></li>
                    <li><a href="/list">商品Product</a></li>
                    <li><a href="/posts">情報News</a></li>
                     <li><a href="/order">注文Order</a></li>
                     <li><a href="/contact">問合Contat</a></li>
                     <li><a href="/about">概要About</a></li>
                </ul>
                <hr style="border-color: silver"/>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
         <hr style="border-color: silver"/>
            <small>
             &copy; <span data-year></span>&bull;<a href="/about">Tehaccho</a> All rights reserved.
               &bull;<a href="/contact">→問合Contact←</a>&bull;
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
