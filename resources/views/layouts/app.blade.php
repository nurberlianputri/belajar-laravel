<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Bimbel Cemerlang</title>

    <script src="https://cdn.tailwindcss.com"></script>
    @yield('css')
</head>
<body class="bg-slate-50 text-slate-700 antialiased flex flex-col min-h-screen">

    @include('partials.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('script')

</body>
</html>