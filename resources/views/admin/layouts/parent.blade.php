<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') | @yield('subtitle')</title>

    @include('admin.layouts.include')

    @stack('style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('admin.layouts.header')
            <div class="main-sidebar sidebar-style-2">
                @include('admin.layouts.aside')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('main')</h1>
                        <div class="section-header-breadcrumb">
                            @yield('location')
                        </div>
                    </div>

                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>

    @include('admin.layouts.script')
    @stack('script')
</body>

</html>
