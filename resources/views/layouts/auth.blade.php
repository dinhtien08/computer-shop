<!doctype html>
<html lang="vi" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Computer Shop</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        };
    </script>

    <style type="text/tailwindcss">
        @layer components {
            .auth-label {
                @apply mb-1.5 block text-sm font-medium text-slate-700;
            }

            .auth-input {
                @apply w-full rounded-xl border border-slate-200 bg-slate-50
                       px-4 py-3 text-sm text-slate-800 outline-none transition
                       placeholder:text-slate-400
                       focus:border-blue-500 focus:bg-white
                       focus:ring-4 focus:ring-blue-500/10;
            }

            .auth-input[aria-invalid="true"] {
                @apply border-red-500 bg-red-50
                       focus:border-red-600 focus:bg-red-50
                       focus:ring-red-500/10;
            }

            .auth-error {
                @apply mt-1.5 text-sm font-medium text-red-700;
            }

            .auth-button {
                @apply w-full rounded-xl bg-blue-600 px-4 py-3
                       text-sm font-semibold text-white shadow-md shadow-blue-500/25
                       transition hover:bg-blue-700
                       focus-visible:outline focus-visible:outline-2
                       focus-visible:outline-offset-2 focus-visible:outline-blue-600;
            }

            .auth-link {
                @apply font-medium text-blue-600 hover:text-blue-700 hover:underline;
            }
        }
    </style>
</head>

<body class="flex min-h-screen items-center justify-center bg-gradient-to-br
             from-slate-100 via-slate-50 to-blue-50 px-4 py-10 font-sans text-slate-800">

    <main class="w-full max-w-md">
        <h1 class="mb-6 text-center text-2xl font-bold tracking-tight">
            @yield('title')
        </h1>

        <div class="rounded-2xl border border-slate-200/60 bg-white p-6
                    shadow-[0_8px_30px_-4px_rgba(0,0,0,0.1)] sm:p-8">
            @yield('content')
        </div>
    </main>

</body>
</html>