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
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/634e9215daff0e1306d29b9a/1gflel9n5';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
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
                    <li><a href="/list">商品</a></li>
                    <li><a href="/tag/">分類</a></li>
                    <li><a href="/posts">情報</a></li>
                     <li><a href="/order">注文</a></li>
                     <li><a href="/contact">問合</a></li>
                     <li><a href="/about">概要</a></li>
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
             &copy; <span data-year></span>&bull;<a href="/about">ToyAddons</a> All rights reserved.
               &bull;<a href="/contact">→問合←</a>&bull;
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
