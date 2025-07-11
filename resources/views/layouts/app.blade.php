<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Temple Les Béatitudes')</title>
    <link rel="shortcut icon" href="{{ asset('assest/images/Logo église Méthodiste.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assest/style.css') }}">
    @stack('styles')
</head>
<body>
    @if(isset($headerType) && $headerType === 'actualites')
        @include('partials.header-actualites')
    @else
        @include('partials.header-navbar')
    @endif

    @yield('content')

    @if(isset($footerType) && $footerType === 'actualites')
        @include('partials.footer-actualites')
    @elseif(isset($footerType) && $footerType === 'formulaire')
        @include('partials.footer-formulaire')
    @else
        @include('partials.footer-accueil')
    @endif
    @stack('scripts')
</body>
</html> 