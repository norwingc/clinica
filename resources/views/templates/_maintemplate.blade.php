<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - Salud Materno Fetal</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @yield('css')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="hold-transition {{ \Auth::user()->theme }} sidebar-mini fixed">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="/img/logo.png" alt="Logo"></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="/img/logo.png" alt="Logo"></span>
            </a>
            @include('templates._header')
        </header>

        <aside class="main-sidebar">
            @include('templates._nav')
        </aside>

        <div class="content-wrapper">
            @yield('contenido')

            <footer class="text-center">Salud Materno Fetal &reg; {{ date('Y') }} Powered By @norwingc</footer>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>

        @yield('js')
        @stack('scripts')
    </body>
</html>
