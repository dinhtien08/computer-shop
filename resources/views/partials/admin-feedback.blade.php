@if (session('success'))
    <p role="status" class="notice notice-success">
        {{ session('success') }}
    </p>
@endif

@if (session('error'))
    <p role="alert" class="notice notice-error">
        {{ session('error') }}
    </p>
@endif