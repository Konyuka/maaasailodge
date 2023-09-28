<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="description" content="Masai Lodge">
    <meta name="keywords" content="Nature, Wildlife, Food, Travel">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'MasaiLodge') }}</title>
    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead

</head>

<body class="font-sans antialiased" style="    background-color: white;">
    @inertia
</body>

</html>
