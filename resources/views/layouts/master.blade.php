<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head Section -->
    @include('partials.styles')
</head>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    main > .container {
        padding: 60px 15px 0;
    }
</style>
<body>
@include('partials.header')
<main class="flex-shrink-0">
    <div class="container">
{{--        <h1 class="mt-5">Sticky footer with fixed navbar</h1>--}}
{{--        <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code class="small">main &gt; .container</code>.</p>--}}
{{--        <p>Back to <a href="/docs/5.0/examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>--}}
        @yield('content')
    </div>
</main>
@include('partials.footer')
@include('partials.scripts')
</body>
</html>
