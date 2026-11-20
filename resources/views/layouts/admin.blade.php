<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Quản trị') | Computer Shop</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-shell">
        <aside class="sidebar">
            <a href="{{ route('admin.dashboard') }}" class="brand">
                Computer<span>Shop</span>
            </a>

            <nav class="sidebar-nav" aria-label="Điều hướng quản trị">
                <a
                    href="{{ route('admin.dashboard') }}"
                    @if (request()->routeIs('admin.dashboard')) aria-current="page" @endif
                >
                    Tổng quan
                </a>

                <a
                    href="{{ route('admin.categories.index') }}"
                    @if (request()->routeIs('admin.categories.*')) aria-current="true" @endif
                >
                    Danh mục
                </a>

                <a
                    href="{{ route('admin.products.index') }}"
                    @if (request()->routeIs('admin.products.*')) aria-current="true" @endif
                >
                    Sản phẩm
                </a>
            </nav>
        </aside>

        <div class="admin-main">
            <header class="topbar">
                <span>{{ auth()->user()->name }}</span>
                @include('partials.logout')
            </header>

            <main class="page">
                <div class="page-heading">
                    <h1>@yield('title')</h1>
                    @yield('actions')
                </div>

                @include('partials.admin-feedback')

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>