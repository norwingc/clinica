<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Salud Materno Fetal - @yield('title') </title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        @yield('css')
    </head>
    <body class="c-app">
        @include('template._nav')
        <div class="c-wrapper c-fixed-components">
            @include('template._header')
            <div class="c-body">
                <main class="c-main p-0">
                   @yield('content')
                </main>
                <footer class="c-footer">
                    <div class="ml-auto text-black-50">Salud Materno Fetal &reg; {{ date('Y') }} Powered By @norwingc</div>
                </footer>
            </div>
        </div>

        <script src="{{ mix('/js/app.js') }}" charset="utf-8"></script>
        <script src="{{ asset('/js/pace.min.js') }}" charset="utf-8"></script>

        <script>
            $("#sidebar").mouseenter(function() {
                $("#sidebar").removeClass('c-sidebar-minimized')
            });

            $('.numbersOnly').keyup(function () {
                this.value = this.value.replace(/[^0-9\.]/g,'');
            });
        </script>
        @stack('scripts')
        @yield('js')
    </body>
</html>
