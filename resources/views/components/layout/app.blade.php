<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="has-navbar-fixed-top"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $titlePage ?? '' }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script defer src="{{ mix('js/app.js') }}"></script>
    @stack('custom-scripts')
</head>
<body>
    <main>
        <section class="section">
            <div class="container">
                @isset ($titlePage)
                    <h1 {{ $titlePage->attributes->merge(['class' => 'title is-1']) }}>
                        {{ $titlePage }}
                    </h1>
                @endisset

                {{ $slot }}
            </div>
        </section>
    </main>
</body>
</html>
