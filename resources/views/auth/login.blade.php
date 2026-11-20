<h1>Đăng nhập Computer Shop</h1>
@if (session('success'))
    <p role="status">{{ session('success') }}</p>
@endif
<form method="POST" action="{{ route('login.submit') }}" novalidate>
    @csrf

    <div>
        <label for="email">Email</label>
        <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            autocomplete="username"
            required
        >

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password">Mật khẩu</label>
        <input
            id="password"
            type="password"
            name="password"
            autocomplete="current-password"
            required
        >

        @error('password')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">Đăng nhập</button>
</form>
<p>Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký</a></p>