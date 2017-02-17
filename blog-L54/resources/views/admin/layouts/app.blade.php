
  @include('/shared/header')
<body class="admin-body">
    @include('admin/shared/navbar')

    <div class="container">
        @include('shared/alerts')

        <div class="row">
            <div class="col-md-3">
                @include('admin/shared/sidebar')
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/admin.js"></script>
</body>
</html>
